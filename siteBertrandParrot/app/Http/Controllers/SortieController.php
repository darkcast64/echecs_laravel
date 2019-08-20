<?php

namespace App\Http\Controllers;

use App\Sortie;
use App\User;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SortieController extends Controller
{
    //
    public function formulaire(Request $request)
    {


        $user = auth()->user();

        $sortie = new Sortie;

        $sortie->nom = $request->nom;
        $sortie->date = $request->date;
        $sortie->description = $request->description;
        $sortie->lieu = $request->lieu;
        $sortie->auteur = $user->name;
        $sortie->save();
        $sorties = DB::table('sorties')->orderBy('created_at', 'desc')->get();

        return view('liste_sorties', ['user' => $user, 'sorties' => $sorties]);

    }

    public function inscription_sortie(Request $request)
    {
        $id_sortie = $request->inscription_sortie;
        $user = auth()->user();
//        je récupère les lignes dans la bdd ou la sortie est déja liée à l'utilisateur'
        $user_sortie=DB::table('sortie_user')->join('users','user_id','=','users.id')->where('sortie_id',$id_sortie)->where('user_id','=',$user->id)->count();
//        si l'utilisateur est déja lié à la sortie'
        if($user_sortie>=1){

            return view ('deja_inscrit');
        }
        else{
        $user->sorties()->attach($id_sortie);

        $sorties = DB::table('sorties')->orderBy('created_at', 'desc')->get();

        return view('liste_sorties', ['sorties' => $sorties, 'user' => $user]);
    }}

    public function details($id)
    {
//je récupère tous les utilisateurs inscrits à la sortie
        $users = DB::table('sortie_user')->join('users', 'user_id', '=', 'users.id')->select('name','profile_image', 'id')->where('sortie_id', $id)->get();
//       dd($users);
//        $sortie = DB::table('sorties')->where('id',$id)->get();
//        dd($sortie);
        $sorties = Sortie::all();
        $sortie = $sorties->find($id);
        $count=DB::table('sortie_user')->where('sortie_id',$id)->count();
        return view('details', ['users' => $users, 'sortie' => $sortie,'count'=>$count]);
    }

    public function profil($id)
    {

        $users = User::all();
        $user = $users->find($id);

        return view('profil', ['user' => $user]);
    }

    public function message($id)
    {

        $users = User::all();
        $user = $users->find($id);

        return view('message', ['user' => $user]);
    }

    public function envoi_message($id,Request $request)
    {
            $message=new Message;
            $user = auth()->user();
            $message->auteur=$user->name;
            $message->message=$request->message;
//            le destinateur du message est l'user dont l'id a transité
            $message->user_id=$id;
            $message->save();

            return view ('envoi_message');
    }
    public function lire_message(){
//        on récupère l'utilisateur connecté'
        $user = auth()->user();
//        on récupère le message et l'auteur destiné à l'utilisateur connecté
        $messages=DB::table('messages')->select('message','auteur')->where('user_id','=',$user->id)->get();

        return view('lire_message',['messages'=>$messages]);
    }
}
