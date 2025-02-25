<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaysController extends Controller
{
    public function monday()
    {
        return view('days/monday');
    }

    public function tuesday()
    {
        return view('days/tuesday');
    }

    public function wednesday()
    {
        return view('days/wednesday');
    }

    public function thursday()
    {
        return view('days/thursday');
    }

    public function friday()
    {
        return view('days/friday');
    }

    public function saturday()
    {
        return view('days/saturday');
    }

    public function sunday()
    {
        return view('days/sunday');
    }

}
