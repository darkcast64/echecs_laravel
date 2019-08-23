<?php

namespace App\Http\Controllers;


use Geocoder\Provider\Chain\Chain;
use Illuminate\Http\Request;


class GeocoderController extends Controller
{
    public function index()
    {

        $geocode = app('geocoder')->geocode(['Los Angeles, CA'])->using('BingMaps')->get();
        return $geocode;
    }


}
