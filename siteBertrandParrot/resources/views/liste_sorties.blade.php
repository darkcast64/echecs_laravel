@extends('layouts.app')

<body>

    <div class="container ml-1">
        <div class="row">
            <div class="col-4 mt-4 btn btn-primary ml-1"><a href="/formulaire_sortie">Proposer une sortie</a></div>
            <div class="offset-2 mt-4 col-4">Bonjour {{ $user->name }}</div>

        </div>
    </div>


    @foreach ($sorties as $sortie)
        <div class="container sortie mt-2 col-6 ">
            <div class="row">
                <div class="offset-6 col-6">{{ $sortie->nom }}</div>
            </div>
            <div class="row">
                <div class="  col-3">{{ $sortie->date }}</div>
            </div>
            <div class="row">
                <div class=" col-6">{{ $sortie->description }}</div>
            </div>
            <div class="row">
                <div class=" col-6">{{ $sortie->lieu }}</div>
            </div>
            <div class="row">
                <form method="post" action="{{route('inscription_sortie') }}">
                    @csrf
                    <div class=" col-6"><button name="inscription_sortie" type="submit" value="{{ $sortie->id }}" >S'inscrire</button></div>
                </form>
            </div>
        </div>
        @endforeach

</body>
</html>
