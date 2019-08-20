@extends('layouts.app')
<link href="{{asset('css/liste_sorties.css')}}" rel="stylesheet">

<p>Vous êtes déja inscrit à cette sortie</p>
<div class="container">
    <div class="row">
        <a href="{{route('liste_sorties')}}"><div class=" btn btn-primary  justify-content-center">Retour</div></a>
    </div>
</div>
