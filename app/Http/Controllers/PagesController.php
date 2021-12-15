<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Etudiant;

class PagesController extends Controller
{
    //
    public function home(){
         // return '<h1> bienvenue dans la page consty</h1>';
         return view('pages.home');
    }

    public function inscription() {
        // return '<h1> bienvenue dans la page loukou</h1>';
         return view('pages.inscription');
     }

    public function tableau() { 
        $etudiants = DB::table('etudiants')
             ->get();
        return view('pages.tableau')->with('etudiants', $etudiants);
    }

    public function show($id){

       // print('ID de etudiant a afficher est '.$id);
           
          $etudiants = Etudiant::find($id);

           return view('pages.show')->with('etudiant', $etudiants);
    }

    public function add() { 
        
        return view('pages.add');
    }

    public function create(request $request) { 
        
        return view('pages.create');
    }

}
