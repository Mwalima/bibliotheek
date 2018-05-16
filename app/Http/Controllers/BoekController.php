<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Boek;

class BoekController extends Controller
{

    public function index()
    {
        $boeken = Boek::all();
        return view('boeken_cms', compact('boeken'));
    }

    public function show(Boek $boek)
    {
        $boeken = Boek::all();
        return view('boeken_cms', compact('boeken'));
    }

    public function store(Request $request)
    {
        $boek = Boek::create($request->all());

        return response()->json($boek, 201);
    }

    public function update(Request $request, Boek $boek)
    {
        $boek->update($request->all());

        return back()->with('success', 'Boek aangepast');

    }

    public function delete(Boek $boek)
    {
        $boek->delete();

        return response()->json(null, 204);
    }

    public function getBoeken()
    {
        $boeken = Boek::all();
        return view('boekoverzicht', compact('boeken'));
    }

    public function getBoekToevoegen()
    {
        return view('boektoevoegen');
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
