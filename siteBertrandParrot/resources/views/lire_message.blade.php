@extends('layouts.app')
<link href="{{asset('css/lire_message.css')}}" rel="stylesheet">
<ul>
@foreach($messages as $message)
        <li>{{$message->message}} par {{$message->auteur}}</li>
    @endforeach
</ul>
