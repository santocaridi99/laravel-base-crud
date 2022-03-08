{{-- estendo default php --}}
@extends('default')
@section('title',"Comics.it")
@section('content')
<div class="container">
    @foreach ($data as $comics => $comic)
        <div class="card">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <div class="text-box">
                <p>{{$comic->series}}</p>
                <p>{{$comic->price}}$</p>
                <p>{{$comic->type}}</p>
                <p>{{$comic->sale_data}}</p>
                <p><a href="{{ route("comics.show", $comic->id) }}">Dettagli</a></p>
            </div>
        </div>
    @endforeach
</div>
<form method="get" action="{{route('comics.create')}}">
    @csrf
    <button type="submit">Aggiungi Fumetto</button>
</form>
@endsection