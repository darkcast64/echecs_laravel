<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ListeSortiesController extends Controller
{
    //
    public function index()
    {
//        Accés aus données dans la table sorties
        $sorties = DB::table('sorties')->orderBy('created_at','desc')->get();
//         Accés à l'utilisateur authentifié'
        $user = Auth::user();
//        Injection des données dans la vue
        return view('liste_sorties', ['sorties' => $sorties,'user'=>$user]);
    }
}
