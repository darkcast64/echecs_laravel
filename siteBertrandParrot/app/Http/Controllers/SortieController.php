<?php

namespace App\Http\Controllers;

use App\Sortie;
use App\User;
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
        $sortie->lieu=$request->lieu;
        $sortie->auteur=$user->name;
        $sortie->save();
        $sorties = DB::table('sorties')->orderBy('created_at','desc')->get();

        return view('liste_sorties',['user'=>$user,'sorties'=>$sorties]);

    }
    public function inscription_sortie(Request $request)
    {
        $id_sortie=$request->inscription_sortie;
        $user=auth()->user();
        $user->sorties()->attach($id_sortie);

        $sorties = DB::table('sorties')->orderBy('created_at','desc')->get();

        return view('liste_sorties',['sorties'=>$sorties,'user'=>$user]);
    }

    public function details($id){

        $users=DB::table('sortie_user')->join('users','user_id','=','users.id')->select('name','id')->where('sortie_id',$id)->get();
//       dd($users);
//        $sortie = DB::table('sorties')->where('id',$id)->get();
//        dd($sortie);
        $sorties=Sortie::all();
        $sortie=$sorties->find($id);
        return view('details',['users'=>$users,'sortie'=>$sortie]);
    }

    public function profil($id){

        $users=User::all();
        $user=$users->find($id);

        return view('profil',['user'=>$user]);
    }
}
