@extends('layouts.app')

<link href="{{asset('css/formulaire_sortie.css')}}" rel="stylesheet">
<body>
<form class="col-6" method="post" action="{{route('formulaire')}}">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1" style="color:black;">Nom de la sortie</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nom">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Date</label>
        <input type="date" class="form-control" id="exampleFormControlInput1"name="date">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Lieu</label>
        <input type="text" class="form-control" id="exampleFormControlInput1"name="lieu">
    </div>


    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
    </div>
    <input type="submit" value="Envoyer">
</form>
<a href="/liste_sorties" style="color:white !important;"><div class="col-md-1 col-4 mt-4 btn btn-primary ml-1 d-flex align-items-center justify-content-center">Retour</div></a>
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
</body>
