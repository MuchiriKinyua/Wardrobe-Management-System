<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaysController extends Controller
{
    public function monday()
    {
        return view('more/monday');
    }

    public function tuesday()
    {
        return view('more/tuesday');
    }

    public function wednesday()
    {
        return view('more/wednesday');
    }

    public function thursday()
    {
        return view('more/thursday');
    }

    public function friday()
    {
        return view('more/friday');
    }

    public function saturday()
    {
        return view('more/saturday');
    }

    public function sunday()
    {
        return view('more/sunday');
    }

}
