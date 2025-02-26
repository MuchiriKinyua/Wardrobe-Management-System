<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateItemRequest;
use App\Models\User;
use App\Models\Category;
use App\Models\Item;
use App\Models\Material;
use App\Models\Condition;
use App\Models\Brand;
use App\Http\Requests\UpdateItemRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Storage;
use App\Repositories\ItemRepository;
use Illuminate\Http\Request;
use Flash;

class ItemController extends AppBaseController
{
    /** @var ItemRepository $itemRepository*/
    private $itemRepository;

    public function __construct(ItemRepository $itemRepo)
    {
        $this->itemRepository = $itemRepo;
    }

    /**
     * Display a listing of the Item.
     */
    public function index(Request $request)
    {
        $items = $this->itemRepository->paginate(10);

        return view('items.index')
            ->with('items', $items);
    }

    /**
     * Show the form for creating a new Item.
     */

    public function edit($id)
{
    $item = Item::findOrFail($id);
    $users = User::pluck('name', 'id');
    $categories = Category::pluck('full_name', 'id');
    $brands = Brand::pluck('full_name', 'id');
    $conditions = Condition::pluck('full_name', 'id');
    $materials = Material::pluck('full_name', 'id');

    return view('items.edit', compact('item', 'users', 'categories', 'brands', 'conditions', 'materials')); 
}

public function create()
{
    $users = User::pluck('name', 'id');
    $categories = Category::pluck('full_name', 'id');
    $materials = Material::pluck('full_name', 'id');
    $brands = Brand::pluck('full_name', 'id');
    $conditions = Condition::pluck('full_name', 'id');

    return view('items.create', compact('users', 'categories', 'materials', 'brands', 'conditions'));
}


    /**
     * Store a newly created Item in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public'); // Store in storage/app/public/images
        $data['image'] = $imagePath; // Save image path in the database
    }

    Item::create($data);

    return redirect()->route('items.index')->with('success', 'Item created successfully.');
}


    /**
     * Display the specified Item.
     */
    public function show($id)
    {
        $item = $this->itemRepository->find($id);

        if (empty($item)) {
            Flash::error('Item not found');

            return redirect(route('items.index'));
        }

        return view('items.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified Item.
     */

    /**
     * Update the specified Item in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $item = Item::findOrFail($id);
    $data = $request->all();

    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($item->image) {
            Storage::disk('public')->delete($item->image);
        }

        $imagePath = $request->file('image')->store('images', 'public');
        $data['image'] = $imagePath;
    }

    $item->update($data);

    return redirect()->route('items.index')->with('success', 'Item updated successfully.');
}


    /**
     * Remove the specified Item from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $item = $this->itemRepository->find($id);

        if (empty($item)) {
            Flash::error('Item not found');

            return redirect(route('items.index'));
        }

        $this->itemRepository->delete($id);

        Flash::success('Item deleted successfully.');

        return redirect(route('items.index'));
    }
}
