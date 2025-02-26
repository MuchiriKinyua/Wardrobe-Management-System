<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFavoriteRequest;
use App\Http\Requests\UpdateFavoriteRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\FavoriteRepository;
use Illuminate\Http\Request;
use App\Models\Item;
use Flash;

class FavoriteController extends AppBaseController
{
    /** @var FavoriteRepository $favoriteRepository*/
    private $favoriteRepository;

    public function __construct(FavoriteRepository $favoriteRepo)
    {
        $this->favoriteRepository = $favoriteRepo;
    }

    /**
     * Display a listing of the Favorite.
     */
    public function index(Request $request)
    {
        $favorites = $this->favoriteRepository->paginate(10);

        return view('favorites.index')
            ->with('favorites', $favorites);
    }

    /**
     * Show the form for creating a new Favorite.
     */
    public function create()
    {   
        $clothing_items = Item::pluck('cloth_name', 'id');

        return view('favorites.create', compact('clothing_items'));
    }

    /**
     * Store a newly created Favorite in storage.
     */
    public function store(CreateFavoriteRequest $request)
    {
        $input = $request->all();

        $favorite = $this->favoriteRepository->create($input);

        Flash::success('Favorite saved successfully.');

        return redirect(route('favorites.index'));
    }

    /**
     * Display the specified Favorite.
     */
    public function show($id)
    {
        $favorite = $this->favoriteRepository->find($id);

        if (empty($favorite)) {
            Flash::error('Favorite not found');

            return redirect(route('favorites.index'));
        }

        return view('favorites.show')->with('favorite', $favorite);
    }

    /**
     * Show the form for editing the specified Favorite.
     */
    public function edit($id)
    {
        $favorite = $this->favoriteRepository->find($id);

        if (empty($favorite)) {
            Flash::error('Favorite not found');

            return redirect(route('favorites.index'));
        }

        return view('favorites.edit')->with('favorite', $favorite);
    }

    /**
     * Update the specified Favorite in storage.
     */
    public function update($id, UpdateFavoriteRequest $request)
    {
        $favorite = $this->favoriteRepository->find($id);

        if (empty($favorite)) {
            Flash::error('Favorite not found');

            return redirect(route('favorites.index'));
        }

        $favorite = $this->favoriteRepository->update($request->all(), $id);

        Flash::success('Favorite updated successfully.');

        return redirect(route('favorites.index'));
    }

    /**
     * Remove the specified Favorite from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $favorite = $this->favoriteRepository->find($id);

        if (empty($favorite)) {
            Flash::error('Favorite not found');

            return redirect(route('favorites.index'));
        }

        $this->favoriteRepository->delete($id);

        Flash::success('Favorite deleted successfully.');

        return redirect(route('favorites.index'));
    }
}
