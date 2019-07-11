@extends('layout.app')
@section('content')
    <h1>{{$event->title}}</h1>
    <hr>
    <p>{{$event->description}}</p>
    <p>{{$event->adresse}}</p>
    <p>{{$event->price}} euros</p>
    <p>{{$event->start_at}}</p>
    <a href="{{route('events2.edit', $event)}}" class="btn btn-default">Modifier</a> 
    <form action="{{route('events2.destroy', $event)}}" method="POST" class="inline-block">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <input type="submit" value="Supprimer" class="btn btn-danger">
    </form>
    <hr>
    <p><a href="{{route('home')}}">Tous les Evenements</a></p>
@stop