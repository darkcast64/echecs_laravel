
@extends('layouts.app')
<link href="{{asset('css/liste_sorties.css')}}" rel="stylesheet">



<body>


<ul class="list-group col-3" >
    <li class="list-group-item">Nom : {{$user->name}}</li>
    <li class="list-group-item">Email : {{$user->email}}</li>
    <li class="list-group-item">Description : {{$user->description}}</li>
    <li class="list-group-item">Centres d'intérêts : {{$user->centres_interets}}</li>

</ul>

<a href="/liste_sorties"><button class="btn btn-primary">Retour</button></a>
