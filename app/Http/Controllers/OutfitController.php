<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOutfitRequest;
use App\Http\Requests\UpdateOutfitRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\OutfitRepository;
use Illuminate\Http\Request;
use Flash;

class OutfitController extends AppBaseController
{
    /** @var OutfitRepository $outfitRepository*/
    private $outfitRepository;

    public function __construct(OutfitRepository $outfitRepo)
    {
        $this->outfitRepository = $outfitRepo;
    }

    /**
     * Display a listing of the Outfit.
     */
    public function index(Request $request)
    {
        $outfits = $this->outfitRepository->paginate(10);

        return view('outfits.index')
            ->with('outfits', $outfits);
    }

    /**
     * Show the form for creating a new Outfit.
     */
    public function create()
    {
        return view('outfits.create');
    }

    /**
     * Store a newly created Outfit in storage.
     */
    public function store(CreateOutfitRequest $request)
    {
        $input = $request->all();

        $outfit = $this->outfitRepository->create($input);

        Flash::success('Outfit saved successfully.');

        return redirect(route('outfits.index'));
    }

    /**
     * Display the specified Outfit.
     */
    public function show($id)
    {
        $outfit = $this->outfitRepository->find($id);

        if (empty($outfit)) {
            Flash::error('Outfit not found');

            return redirect(route('outfits.index'));
        }

        return view('outfits.show')->with('outfit', $outfit);
    }

    /**
     * Show the form for editing the specified Outfit.
     */
    public function edit($id)
    {
        $outfit = $this->outfitRepository->find($id);

        if (empty($outfit)) {
            Flash::error('Outfit not found');

            return redirect(route('outfits.index'));
        }

        return view('outfits.edit')->with('outfit', $outfit);
    }

    /**
     * Update the specified Outfit in storage.
     */
    public function update($id, UpdateOutfitRequest $request)
    {
        $outfit = $this->outfitRepository->find($id);

        if (empty($outfit)) {
            Flash::error('Outfit not found');

            return redirect(route('outfits.index'));
        }

        $outfit = $this->outfitRepository->update($request->all(), $id);

        Flash::success('Outfit updated successfully.');

        return redirect(route('outfits.index'));
    }

    /**
     * Remove the specified Outfit from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $outfit = $this->outfitRepository->find($id);

        if (empty($outfit)) {
            Flash::error('Outfit not found');

            return redirect(route('outfits.index'));
        }

        $this->outfitRepository->delete($id);

        Flash::success('Outfit deleted successfully.');

        return redirect(route('outfits.index'));
    }
}
