<?php

namespace App\Http\Controllers;

use App\Sortie;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index(){
//<----- liste des utilisateurs et des sorties injectées dans la vue admin_liste_users--------->
        $users=User::all();
        $sorties=Sortie::all();
        return view ('admin_liste_users',['users'=>$users,'sorties'=>$sorties]);
    }

    public function nopermission()

    {
        return view('no-permission');
    }

    public function remove_user($id)
    {

        DB::table('users')->where('id','=',$id)->delete();
        $users=User::all();
        $sorties=Sortie::all();
        return view ('admin_liste_users',['users'=>$users,'sorties'=>$sorties]);
    }
}


