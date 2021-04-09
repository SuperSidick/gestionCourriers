<?php

namespace App\Http\Controllers;

use App\Receved;
use App\RecevedPdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecevedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receveds = Receved::orderBy('created_at', 'desc')->get();
        return view('user.receved.index', compact('receveds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('user.receved.create');
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
            'objet' => ['required','min:10'],
            'expeditaire' => ['required','min:3'],
            'destinataire' => ['required','min:3'],
            'livreur' => ['required','min:3'],
            'file' => ['required','mimes:pdf']
        ]);

        $fileName = $request->file->getClientOriginalName();
        $request->file->move(public_path('pdf/receved'), $fileName);

        $receved =  Receved::create([
            'objet' => $request->objet,
            'expeditaire' => $request->expeditaire,
            'destinataire' => $request->destinataire,
            'livreur' => $request->livreur,
            'user_id' => Auth::user()->id,
        ]);

        RecevedPdf::create([
            'nom' => $fileName,
            'receved_id' => $receved->id,
        ]);


        return redirect()->route('receved.index')->with('success','Courrier ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $receved = Receved::findOrFail($id);
        return view('user.receved.show', compact('receved'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receved = Receved::findOrFail($id);
        return view('user.receved.edit', compact('receved'));
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
            'objet' => ['required','min:10'],
            'expeditaire' => ['required','min:3'],
            'destinataire' => ['required','min:3'],
            'livreur' => ['required','min:3'],
        ]);

        $receved = Receved::FindOrFail($id);
        $receved->update([
            'objet' => $request->objet,
            'expeditaire' => $request->expeditaire,
            'destinataire' => $request->destinataire,
            'livreur' => $request->livreur,
        ]);

        return redirect()->route('receved.show', $id)->with('success','Modification effectuée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Receved::destroy($id);
        return redirect()->route('receved.index')->with('error','Supprédion effectuée avec succès !');
    }
}
