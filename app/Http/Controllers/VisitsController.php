<?php

namespace App\Http\Controllers;

use App\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visits = Visit::orderBy('created_at', 'desc')->get();
        return view('user.visits.index', compact('visits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.visits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'objet' => ['required','min:5'],
            'visiteur' => ['required','min:3'],
            'visite' => ['required','min:3'],
            'rdv' => ['required'],
        ]);

        Visit::create([
            'objet' => $request->objet,
            'nom_visiteur' => $request->visiteur,
            'personne_visite' => $request->visite,
            'rdv' => $request->rdv,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('visits.index')->with('success','Nouvelle visite ajoutée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $visit = Visit::findOrFail($id);
        return view('user.visits.show', compact('visit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $visit = Visit::findOrFail($id);

        return view('user.visits.edit', compact('visit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'objet' => ['required','min:5'],
            'visiteur' => ['required','min:3'],
            'visite' => ['required','min:3'],
            'rdv' => ['required'],
        ]);

        $visit = Visit::findOrFail($id);

        $visit->update([
            'objet' => $request->objet,
            'nom_visiteur' => $request->visiteur,
            'personne_visite' => $request->visite,
            'rdv' => $request->rdv,
       ]);

        return redirect()->route('visits.show', $id)->with('success','Modification effectuée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Visit::destroy($id);
        return redirect()->route('visits.index')->with('error','Supprédion effectuée avec succès !');
    }
}
