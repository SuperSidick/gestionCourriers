<?php

namespace App\Http\Controllers;

use App\Sent;
use Illuminate\Http\Request;

class SearchsController extends Controller
{
    public function sentSearch(Request $request) {
        $data = [$request->debut, $request->fin, $request->nom];
        // dd($data);

        if($request->debut OR $request->fin OR $request->nom){
            dd('y a kekechose');
            
        }
        else {
            return back()->with('error','Vous devez remplir au moins un champ !');
        }

        // if($request->nom || $request->fin || $request->debut) {
        //     dd('Y a kekechoz !');
        // }
        // else {
        //     dd('Y a rien');
        // }
        // if ($request) {   
        //     $this->validate($request, [
        //         'debut' => ['nullable', 'date'],
        //         'fin' => ['nullable', 'date'],
        //         'nom' => ['nullable'],
        //     ]);

        //     $debut = $request->debut;
        //     $fin = $request->fin;
        //     $nom = $request->nom;
        //     $result = Sent::whereBetween('created_at', [$debut, $fin])->orWhere('expeditaire', $nom)->orWhere('destinataire', $nom)->get();
        //     dd($result);
        //     return view('user.searchs.sentsearch');
        // }
    }

    // $ composer require --dev 'phpunit/phpunit ^7';
    // composer require --dev "alexpechkarev/google-maps ^7"
    
    public function recevedSearch(Request $request) {
        return view('user.searchs.recevedsearch');
    }

    public function visitSearch(Request $request) {
        return view('user.searchs.visitsearch');
    }
}
