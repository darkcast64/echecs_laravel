@extends('layouts.app')



{{--<div class="container">--}}
    {{--<div class="row card-header">--}}
        {{--<p>Liste des utilisateurs inscrits sur le site</p>--}}
        {{--<ul>--}}
            {{--@foreach($users as $user)--}}
                {{--<li>{{$user->name}}  <a href="/remove_user/{{$user->id}}">Supprimer</a></li>--}}
            {{--@endforeach--}}

        {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="row card-header">--}}
        {{--<p>Liste des sorties</p>--}}
        {{--<ul>--}}
            {{--@foreach($sorties as $sortie)--}}
                {{--<li>{{$sortie->nom}} : date {{$sortie->date}}  <a href="/remove_sortie/{{$sortie->id}}">Supprimer</a></li>--}}
            {{--@endforeach--}}

        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}

<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header ">Dashboard / Tableau de bord</div>
                <p>Liste des utilisateurs inscrits sur le site</p>
                <ul>
                    @foreach($users as $user)
                        <li>{{$user->name}}  <a href="/remove_user/{{$user->id}}">Supprimer</a></li>
                    @endforeach

                </ul>
            </div>
            <div class="row card-header justify-content-center">
                <p>Liste des sorties</p>
                <ul>
                    @foreach($sorties as $sortie)
                        <li>{{$sortie->nom}} : date {{$sortie->date}}  <a href="/remove_sortie/{{$sortie->id}}">Supprimer</a></li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</div>
