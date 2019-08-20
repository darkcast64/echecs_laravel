@extends('layouts.app')
<link href="{{asset('css/liste_sorties.css')}}" rel="stylesheet">
<form action="{{ route('profile.update') }}" method="POST" role="form" enctype="multipart/form-data">
    @csrf


    <div class="form-group row mt-2">
        <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>
        <div class="col-md-4">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name', auth()->user()->name) }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="profile_image" class="col-md-2 col-form-label text-md-right">Profile Image</label>
        <div class="col-md-4">
            <input id="profile_image" type="file" class="form-control" name="profile_image">
            @if (auth()->user()->image)
                <code>{{ auth()->user()->image }}</code>
            @endif
        </div>
    </div>
    <div class="form-group row mb-0 mt-5">
        <div class="col-md-8 offset-md-2">
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </div>
    </div>
    <div class="row">
        <div class="offset-2 col-md-4 mt-2">
        <a href="{{route('liste_sorties')}}"><div class=" btn btn-success  justify-content-center">Retour</div></a>
    </div>
    </div>
</form>
