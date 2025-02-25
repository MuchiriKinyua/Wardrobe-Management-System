<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\MaterialRepository;
use Illuminate\Http\Request;
use Flash;

class MaterialController extends AppBaseController
{
    /** @var MaterialRepository $materialRepository*/
    private $materialRepository;

    public function __construct(MaterialRepository $materialRepo)
    {
        $this->materialRepository = $materialRepo;
    }

    /**
     * Display a listing of the Material.
     */
    public function index(Request $request)
    {
        $materials = $this->materialRepository->paginate(10);

        return view('materials.index')
            ->with('materials', $materials);
    }

    /**
     * Show the form for creating a new Material.
     */
    public function create()
    {
        return view('materials.create');
    }

    /**
     * Store a newly created Material in storage.
     */
    public function store(CreateMaterialRequest $request)
    {
        $input = $request->all();

        $material = $this->materialRepository->create($input);

        Flash::success('Material saved successfully.');

        return redirect(route('materials.index'));
    }

    /**
     * Display the specified Material.
     */
    public function show($id)
    {
        $material = $this->materialRepository->find($id);

        if (empty($material)) {
            Flash::error('Material not found');

            return redirect(route('materials.index'));
        }

        return view('materials.show')->with('material', $material);
    }

    /**
     * Show the form for editing the specified Material.
     */
    public function edit($id)
    {
        $material = $this->materialRepository->find($id);

        if (empty($material)) {
            Flash::error('Material not found');

            return redirect(route('materials.index'));
        }

        return view('materials.edit')->with('material', $material);
    }

    /**
     * Update the specified Material in storage.
     */
    public function update($id, UpdateMaterialRequest $request)
    {
        $material = $this->materialRepository->find($id);

        if (empty($material)) {
            Flash::error('Material not found');

            return redirect(route('materials.index'));
        }

        $material = $this->materialRepository->update($request->all(), $id);

        Flash::success('Material updated successfully.');

        return redirect(route('materials.index'));
    }

    /**
     * Remove the specified Material from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $material = $this->materialRepository->find($id);

        if (empty($material)) {
            Flash::error('Material not found');

            return redirect(route('materials.index'));
        }

        $this->materialRepository->delete($id);

        Flash::success('Material deleted successfully.');

        return redirect(route('materials.index'));
    }
}
