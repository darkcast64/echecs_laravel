@extends('layouts.app')

<link href="{{asset('css/details_sortie.css')}}" rel="stylesheet">



<div class="container sortie mt-2 col-10 col-md-6 ">
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
    <li><p>
    @if ($user->profile_image)
            <img src="{{$user->profile_image}}" style="width: 20px; height: 20px; border-radius: 50%;">
            @endif
            {{$user->name}}<a href="/profil/{{{$user->id}}}">Voir profil</a><a href="/message/{{$user->id}}">Envoyer message</a></p></li>
@endforeach
    <li><p>Nombres d'inscrits : {{$count}}</p></li>
    </ul>
</div>
<div class="container">
    <div class="row">
        <a href="{{route('liste_sorties')}}"><div class=" btn btn-primary  justify-content-center">Retour</div></a>
    </div>
</div>
