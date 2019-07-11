@extends('layout.app')
@section('content')
    <h1>{{$events->count()}} {{str_plural('Evenement', $events->count())}}</h1>
    @if(! $events->isEmpty())
        <ul>
            @foreach($events as $event)
                <hr>
                <li><a href="{{route('events2.show',$event)}}">{{$event->title}}</a></li>
            @endforeach
        </ul>
        {{ $events->links() }}
    @else
        <p>Aucun evenement pour le moment</p>
    @endif
@stop