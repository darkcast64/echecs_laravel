@extends('layouts.app')
<link href="{{asset('css/liste_sorties.css')}}" rel="stylesheet">
<body>

<div class="container mt-2 col-10 col-md-8 ">
    <div class="row justify-content-center">
        <a href="/formulaire_sortie" style="color:white !important;">
            <div class="col-md-8 col-4 mt-4 btn btn-primary ml-1 d-flex align-items-center justify-content-center">
                Proposer une sortie
            </div>
        </a>
        @if($user->profile_image)
            <div class="m-0 p-0 offset-5 col-2 mt-4 d-flex justify-content-center" data-toggle="modal" data-target="#exampleModal">
                <img src="{{$user->profile_image}}" style="width: 60px; height: 60px; border-radius: 50%;"></p>
            </div>
        @else
            <div class="ml-5 p-0 offset-5 col-2 mt-4 d-flex justify-content-center">

                <i class="fas fa-user fa-w-14 fa-5x" data-toggle="modal" data-target="#exampleModal"></i></div>

        @endif
        <div class="ml-5 pl-3 col-2 mt-4 d-flex justify-content-center">
            <a href="/" style="color:black !important;">
                <i class="fas fa-home fa-w-18 fa-5x"></i>
            </a>
        </div>

        @if($user->hasRole('admin'))
            <a href="/admin" style="color:black !important;">Admin</a>
        @endif

    </div>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $user->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>E-mail : {{$user->email}}</p>
            </div>
            <div class="modal-body">
                <p>Date d'inscription : {{$user->created_at}}</p>
            </div>

            <div class="modal-body">
                <p><a href="/liste_messages">Messages</a></p>
            </div>
            <div class="modal-body">
                <p><a href="{{ route('profile') }}">Uploader une image</a></p>
            </div>
            <div class="modal-body">
                <a href="{{ route('logout') }}" style="color:black !important;"><p>Deconnexion</p></a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>


@foreach ($sorties as $sortie)
    <div class="container sortie mt-2 col-10 col-md-8 ">
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
        <div class="row">
            <form method="post" action="{{route('inscription_sortie') }}">
                @csrf
                <div class=" col-6">
                    <button name="inscription_sortie" type="submit" value="{{ $sortie->id }}">S'inscrire</button>
                </div>
            </form>
            <div class="col-4"><a href="/details/{{{$sortie->id}}}" style="color:  purple !important;">Details</a></div>
        </div>
    </div>
    @endforeach
    </div>

</body>
</html>
