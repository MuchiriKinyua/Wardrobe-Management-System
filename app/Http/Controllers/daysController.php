<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedaysRequest;
use App\Http\Requests\UpdatedaysRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\daysRepository;
use Illuminate\Http\Request;
use Flash;

class daysController extends AppBaseController
{
    /** @var daysRepository $daysRepository*/
    private $daysRepository;

    public function __construct(daysRepository $daysRepo)
    {
        $this->daysRepository = $daysRepo;
    }

    /**
     * Display a listing of the days.
     */
    public function index(Request $request)
    {
        $days = $this->daysRepository->paginate(10);

        return view('days.index')
            ->with('days', $days);
    }

    /**
     * Show the form for creating a new days.
     */
    public function create()
    {
        return view('days.create');
    }

    /**
     * Store a newly created days in storage.
     */
    public function store(CreatedaysRequest $request)
    {
        $input = $request->all();

        $days = $this->daysRepository->create($input);

        Flash::success('Days saved successfully.');

        return redirect(route('days.index'));
    }

    /**
     * Display the specified days.
     */
    public function show($id)
    {
        $days = $this->daysRepository->find($id);

        if (empty($days)) {
            Flash::error('Days not found');

            return redirect(route('days.index'));
        }

        return view('days.show')->with('days', $days);
    }

    /**
     * Show the form for editing the specified days.
     */
    public function edit($id)
    {
        $days = $this->daysRepository->find($id);

        if (empty($days)) {
            Flash::error('Days not found');

            return redirect(route('days.index'));
        }

        return view('days.edit')->with('days', $days);
    }

    /**
     * Update the specified days in storage.
     */
    public function update($id, UpdatedaysRequest $request)
    {
        $days = $this->daysRepository->find($id);

        if (empty($days)) {
            Flash::error('Days not found');

            return redirect(route('days.index'));
        }

        $days = $this->daysRepository->update($request->all(), $id);

        Flash::success('Days updated successfully.');

        return redirect(route('days.index'));
    }

    /**
     * Remove the specified days from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $days = $this->daysRepository->find($id);

        if (empty($days)) {
            Flash::error('Days not found');

            return redirect(route('days.index'));
        }

        $this->daysRepository->delete($id);

        Flash::success('Days deleted successfully.');

        return redirect(route('days.index'));
    }
}
