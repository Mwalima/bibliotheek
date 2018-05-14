<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Boek;

class BoekController extends Controller
{
    public function getBoeken()
    {
        $boeken = Boek::all();
        return view('boekoverzicht', compact('boeken'));
    }
}
