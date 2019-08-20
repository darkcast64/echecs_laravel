<?php

namespace App\Http\Controllers;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;


class MapController extends Controller
{
    //
    public function index(){
        Mapper::location('Sheffield')->map(['zoom' => 15, 'center' => false, 'marker' => false, 'type' => 'HYBRID', 'overlay' => 'TRAFFIC']);
        return view('cornford/googlmapper/map');
}}
