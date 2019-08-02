<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListeSortiesController extends Controller
{
    //
    public function index()
    {
        $sorties = DB::table('sorties')->orderBy('created_at','desc')->get();
        $user = auth()->user();

        return view('liste_sorties', ['sorties' => $sorties,'user'=>$user]);
    }
}
