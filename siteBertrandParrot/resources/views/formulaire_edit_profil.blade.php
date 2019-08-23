@extends('layouts.app')
<link href="{{asset('css/liste_sorties.css')}}" rel="stylesheet">

<body>
<form method="post" class="col-6" action="/formulaire_edit_profil_soumis/{{$user->id}}">
    @csrf
<label>Nom</label>
    <div class="form-group">
    <input type="text" class="form-control" placeholder="{{$user->name}}" name="name" value="{{$user->name}}">
    </div>
    <label>Email</label>
    <div class="form-group">
    <input type="email" class="form-control" placeholder="{{$user->email}}" name="email" value="{{$user->email}}">
    </div>
    <label>Description</label>
    <div class="form-group">
    <textarea name="description" id="description" cols="15" rows="5" class="form-control" placeholder="{{$user->description}}"></textarea>
    </div>
    <label style="color:white;">Centres d'intérêts</label>
    <div class="form-group">
    <textarea name="centres_interets" id="centres_interets" class="form-control" cols="15" rows="5" placeholder="{{$user->centres_interets}}"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</body>
