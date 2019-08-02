@extends('layouts.app')

<link href="{{asset('css/details_sortie.css')}}" rel="stylesheet">



<div class="container sortie mt-2 col-6 ">
    <div class="row">
        <div class="offset-6 col-6">{{ $sortie->nom }}</div>
    </div>
    <div class="row">
        <div class="  col-3"><p>Date : {{ $sortie->date }}</p></div>
    </div>
    <div class="row">
        <div class=" col-6">{{ $sortie->description }}</div>
    </div>
    <div class="row">
        <div class=" col-6"><p>Lieu : {{ $sortie->lieu }}</p></div>
    </div>
    <div class="row">
        <div class=" col-6"><p>Auteur : {{ $sortie->auteur }}</p></div>
    </div>
<label>Utilisateurs inscrits</label><ul>
@foreach($users as $user)
            <li><p>{{$user->name}}<a href="/profil/{{{$user->id}}}">Voir profil</a></p></li>
@endforeach
</ul>
</div>
<div class="container">
    <div class="row">
        <div class="col-6"><a href="{{route('liste_sorties')}}">Retour</a></div>
    </div>
</div>