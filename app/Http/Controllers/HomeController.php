<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Item;
use App\Models\Occassion;
use App\Models\Outfit;
use App\Models\Purchase;
use App\Models\Favorite;
use App\Models\Laundry;
use App\Models\Log;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalUsers = User::count();
        $totalItems = Item::count();
        $totalOccassions = Occassion::count();
        $totalOutfits = Outfit::count();
        $totalPurchases = Purchase::count();
        $totalFavorites = Favorite::count();
        $totalLaundries = Laundry::count();
        $totalLogs = Log::count();

        return view('dashboard', compact('totalUsers', 'totalItems', 'totalOccassions', 'totalOutfits', 'totalPurchases', 'totalFavorites', 'totalLaundries', 'totalLogs'));
    }
}
