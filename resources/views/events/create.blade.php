@extends('layout.app')
@section('content')
    <h1>Creer un evenement</h1>
    <form action="{{route('events2.store')}}" method="POST">
        {{ csrf_field() }}
        @include('layout.partials._form',['SubmitButon' => "Créer l'événement"])
    </form>
    <hr>
    <p><a href="{{route('home')}}">Annuler</a></p>
@stop