<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSizeRequest;
use App\Http\Requests\UpdateSizeRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\SizeRepository;
use Illuminate\Http\Request;
use Flash;

class SizeController extends AppBaseController
{
    /** @var SizeRepository $sizeRepository*/
    private $sizeRepository;

    public function __construct(SizeRepository $sizeRepo)
    {
        $this->sizeRepository = $sizeRepo;
    }

    /**
     * Display a listing of the Size.
     */
    public function index(Request $request)
    {
        $sizes = $this->sizeRepository->paginate(10);

        return view('sizes.index')
            ->with('sizes', $sizes);
    }

    /**
     * Show the form for creating a new Size.
     */
    public function create()
    {
        return view('sizes.create');
    }

    /**
     * Store a newly created Size in storage.
     */
    public function store(CreateSizeRequest $request)
    {
        $input = $request->all();

        $size = $this->sizeRepository->create($input);

        Flash::success('Size saved successfully.');

        return redirect(route('sizes.index'));
    }

    /**
     * Display the specified Size.
     */
    public function show($id)
    {
        $size = $this->sizeRepository->find($id);

        if (empty($size)) {
            Flash::error('Size not found');

            return redirect(route('sizes.index'));
        }

        return view('sizes.show')->with('size', $size);
    }

    /**
     * Show the form for editing the specified Size.
     */
    public function edit($id)
    {
        $size = $this->sizeRepository->find($id);

        if (empty($size)) {
            Flash::error('Size not found');

            return redirect(route('sizes.index'));
        }

        return view('sizes.edit')->with('size', $size);
    }

    /**
     * Update the specified Size in storage.
     */
    public function update($id, UpdateSizeRequest $request)
    {
        $size = $this->sizeRepository->find($id);

        if (empty($size)) {
            Flash::error('Size not found');

            return redirect(route('sizes.index'));
        }

        $size = $this->sizeRepository->update($request->all(), $id);

        Flash::success('Size updated successfully.');

        return redirect(route('sizes.index'));
    }

    /**
     * Remove the specified Size from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $size = $this->sizeRepository->find($id);

        if (empty($size)) {
            Flash::error('Size not found');

            return redirect(route('sizes.index'));
        }

        $this->sizeRepository->delete($id);

        Flash::success('Size deleted successfully.');

        return redirect(route('sizes.index'));
    }
}
