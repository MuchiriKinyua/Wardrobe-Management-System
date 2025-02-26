<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLaundryRequest;
use App\Http\Requests\UpdateLaundryRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\LaundryRepository;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;
use Flash;

class LaundryController extends AppBaseController
{
    /** @var LaundryRepository $laundryRepository*/
    private $laundryRepository;

    public function __construct(LaundryRepository $laundryRepo)
    {
        $this->laundryRepository = $laundryRepo;
    }

    /**
     * Display a listing of the Laundry.
     */
    public function index(Request $request)
    {
        $laundries = $this->laundryRepository->paginate(10);

        return view('laundries.index')
            ->with('laundries', $laundries);
    }

    /**
     * Show the form for creating a new Laundry.
     */
    public function create()
    {
        $users = User::pluck('name', 'id');
        $clothing_items = Item::pluck('cloth_name', 'id');

        return view('laundries.create', compact('users', 'clothing_items'));
    }

    /**
     * Store a newly created Laundry in storage.
     */
    public function store(CreateLaundryRequest $request)
    {
        $input = $request->all();

        $laundry = $this->laundryRepository->create($input);

        Flash::success('Laundry saved successfully.');

        return redirect(route('laundries.index'));
    }

    /**
     * Display the specified Laundry.
     */
    public function show($id)
    {
        $laundry = $this->laundryRepository->find($id);

        if (empty($laundry)) {
            Flash::error('Laundry not found');

            return redirect(route('laundries.index'));
        }

        return view('laundries.show')->with('laundry', $laundry);
    }

    /**
     * Show the form for editing the specified Laundry.
     */
    public function edit($id)
    {
        $laundry = $this->laundryRepository->find($id);

        if (empty($laundry)) {
            Flash::error('Laundry not found');

            return redirect(route('laundries.index'));
        }

        return view('laundries.edit')->with('laundry', $laundry);
    }

    /**
     * Update the specified Laundry in storage.
     */
    public function update($id, UpdateLaundryRequest $request)
    {
        $laundry = $this->laundryRepository->find($id);

        if (empty($laundry)) {
            Flash::error('Laundry not found');

            return redirect(route('laundries.index'));
        }

        $laundry = $this->laundryRepository->update($request->all(), $id);

        Flash::success('Laundry updated successfully.');

        return redirect(route('laundries.index'));
    }

    /**
     * Remove the specified Laundry from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $laundry = $this->laundryRepository->find($id);

        if (empty($laundry)) {
            Flash::error('Laundry not found');

            return redirect(route('laundries.index'));
        }

        $this->laundryRepository->delete($id);

        Flash::success('Laundry deleted successfully.');

        return redirect(route('laundries.index'));
    }
}
