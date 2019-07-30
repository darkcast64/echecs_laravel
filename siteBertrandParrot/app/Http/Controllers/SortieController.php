<?php

namespace App\Http\Controllers;

use App\Sortie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SortieController extends Controller
{
    //
    public function formulaire(Request $request){


        $user=auth()->user();

        $sortie=new Sortie;
//        dd($request);
        $sortie->nom=$request->nom;
        $sortie->date=$request->date;
        $sortie->description=$request->description;
        $sortie->auteur=$user->id;
        $sortie->save();

        return view('welcome');

    }
    public function inscription_sortie(Request $request)
    {
        $id_sortie=$request->inscription_sortie;
        $user=auth()->user();
        $user->sorties()->attach($id_sortie);
        $sorties = DB::table('sorties')->get();
        $user = auth()->user();

        return view('liste_sorties',['sorties'=>$sorties,'user'=>$user]);
    }
}
