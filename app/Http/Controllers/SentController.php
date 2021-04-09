<?php

namespace App\Http\Controllers;

use App\Sent;
use App\SentPdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sents = Sent::orderBy('created_at', 'desc')->get();
        return view('user.sent.index', compact('sents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.sent.create');
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
            'experditaire'=> ['required','min:3'],
            'destinataire'=> ['required','min:3'],
            'livreur'=> ['required','min:3'],
            'file' => ['required','mimes:pdf']

        ]);

        $fileName = $request->file->getClientOriginalName();
        $request->file->move(public_path('pdf/sent'), $fileName);

        $sent = Sent::create([
            'objet' => $request->objet,
            'expeditaire' => $request->experditaire,
            'destinataire' => $request->destinataire,
            'livreur' => $request->livreur,
            'user_id' => Auth::user()->id,
        ]);

        SentPdf::create([
            'nom' => $fileName,
            'sent_id' => $sent->id,
        ]);
        
        return redirect()->route('sent.index')->with('success','Courrier ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sent = Sent::findOrFail($id);

        return view('user.sent.show', compact('sent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sent = Sent::findOrFail($id);
        return view('user.sent.edit', compact('sent'));
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
            'expeditaire'=> ['required','min:3'],
            'destinataire'=> ['required','min:3'],
            'livreur'=> ['required','min:3'],
        ]);

        $sent = Sent::findOrFail($id);
        $sent->update([
            'objet' => $request->objet,
            'expeditaire' => $request->expeditaire,
            'destinataire' => $request->destinataire,
            'livreur' => $request->livreur,
        ]);

        return redirect()->route('sent.show', $id)->with('success','Modification effectuée !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sent::destroy($id);
        return back()->with('error','Suppréssion effectuer avec succes!');
    }
}
