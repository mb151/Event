@extends('layout.app')
@section('content')
    <h1>Editer levenement #{{$event->id}}</h1>
    <form action="{{route('events2.update', $event)}}" method="POST">
        {{ csrf_field() }}
        {{method_field('PUT')}}
        @include('layout.partials._form', ['SubmitButon'=>"Modifier l'événement"])
    </form>
    <hr>
    <p><a href="{{route('home')}}">Annuler</a></p>
@stop