<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHistoryRequest;
use App\Http\Requests\UpdateHistoryRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\HistoryRepository;
use Illuminate\Http\Request;
use App\Models\Item;
use Flash;

class HistoryController extends AppBaseController
{
    /** @var HistoryRepository $historyRepository*/
    private $historyRepository;

    public function __construct(HistoryRepository $historyRepo)
    {
        $this->historyRepository = $historyRepo;
    }

    /**
     * Display a listing of the History.
     */
    public function index(Request $request)
    {
        $histories = $this->historyRepository->paginate(10);

        return view('histories.index')
            ->with('histories', $histories);
    }

    /**
     * Show the form for creating a new History.
     */
    public function create()
    {   
        $clothing_items = Item::pluck('cloth_name', 'id');

        return view('histories.create', compact('clothing_items'));
    }

    /**
     * Store a newly created History in storage.
     */
    public function store(CreateHistoryRequest $request)
    {
        $input = $request->all();

        $history = $this->historyRepository->create($input);

        Flash::success('History saved successfully.');

        return redirect(route('histories.index'));
    }

    /**
     * Display the specified History.
     */
    public function show($id)
    {
        $history = $this->historyRepository->find($id);

        if (empty($history)) {
            Flash::error('History not found');

            return redirect(route('histories.index'));
        }

        return view('histories.show')->with('history', $history);
    }

    /**
     * Show the form for editing the specified History.
     */
    public function edit($id)
    {
        $history = $this->historyRepository->find($id);

        if (empty($history)) {
            Flash::error('History not found');

            return redirect(route('histories.index'));
        }

        return view('histories.edit')->with('history', $history);
    }

    /**
     * Update the specified History in storage.
     */
    public function update($id, UpdateHistoryRequest $request)
    {
        $history = $this->historyRepository->find($id);

        if (empty($history)) {
            Flash::error('History not found');

            return redirect(route('histories.index'));
        }

        $history = $this->historyRepository->update($request->all(), $id);

        Flash::success('History updated successfully.');

        return redirect(route('histories.index'));
    }

    /**
     * Remove the specified History from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $history = $this->historyRepository->find($id);

        if (empty($history)) {
            Flash::error('History not found');

            return redirect(route('histories.index'));
        }

        $this->historyRepository->delete($id);

        Flash::success('History deleted successfully.');

        return redirect(route('histories.index'));
    }
}
