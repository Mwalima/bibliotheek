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

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function insertBoeken(Request $request)
    {
        $boek = new Boek();
        $boek->titel = $request->get('titel');
        $boek->auteur = $request->get('auteur');
        $boek->omschrijving=$request->get('omschrijving');
        $boek->afbeelding=$request->get('afbeelding');
        $boek->save();

        return back()->with('success', 'Boek toegevoegd');
    }
}
