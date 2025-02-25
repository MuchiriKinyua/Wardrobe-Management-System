<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOccassionRequest;
use App\Http\Requests\UpdateOccassionRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\OccassionRepository;
use Illuminate\Http\Request;
use Flash;

class OccassionController extends AppBaseController
{
    /** @var OccassionRepository $occassionRepository*/
    private $occassionRepository;

    public function __construct(OccassionRepository $occassionRepo)
    {
        $this->occassionRepository = $occassionRepo;
    }

    /**
     * Display a listing of the Occassion.
     */
    public function index(Request $request)
    {
        $occassions = $this->occassionRepository->paginate(10);

        return view('occassions.index')
            ->with('occassions', $occassions);
    }

    /**
     * Show the form for creating a new Occassion.
     */
    public function create()
    {
        return view('occassions.create');
    }

    /**
     * Store a newly created Occassion in storage.
     */
    public function store(CreateOccassionRequest $request)
    {
        $input = $request->all();

        $occassion = $this->occassionRepository->create($input);

        Flash::success('Occassion saved successfully.');

        return redirect(route('occassions.index'));
    }

    /**
     * Display the specified Occassion.
     */
    public function show($id)
    {
        $occassion = $this->occassionRepository->find($id);

        if (empty($occassion)) {
            Flash::error('Occassion not found');

            return redirect(route('occassions.index'));
        }

        return view('occassions.show')->with('occassion', $occassion);
    }

    /**
     * Show the form for editing the specified Occassion.
     */
    public function edit($id)
    {
        $occassion = $this->occassionRepository->find($id);

        if (empty($occassion)) {
            Flash::error('Occassion not found');

            return redirect(route('occassions.index'));
        }

        return view('occassions.edit')->with('occassion', $occassion);
    }

    /**
     * Update the specified Occassion in storage.
     */
    public function update($id, UpdateOccassionRequest $request)
    {
        $occassion = $this->occassionRepository->find($id);

        if (empty($occassion)) {
            Flash::error('Occassion not found');

            return redirect(route('occassions.index'));
        }

        $occassion = $this->occassionRepository->update($request->all(), $id);

        Flash::success('Occassion updated successfully.');

        return redirect(route('occassions.index'));
    }

    /**
     * Remove the specified Occassion from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $occassion = $this->occassionRepository->find($id);

        if (empty($occassion)) {
            Flash::error('Occassion not found');

            return redirect(route('occassions.index'));
        }

        $this->occassionRepository->delete($id);

        Flash::success('Occassion deleted successfully.');

        return redirect(route('occassions.index'));
    }
}
