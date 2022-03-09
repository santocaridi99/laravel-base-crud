{{-- estendo default php --}}
@extends('default')
@section('title',"Comics.it")
@section('content')
<div class="container">
    {{-- per ogni fumetto nel data stampo una card --}}
    @foreach ($data as $comics => $comic)
        <div class="card">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <div class="text-box">
                <p>{{$comic->title}}</p>
                <p>{{$comic->series}}</p>
                <p>{{$comic->price}}$</p>
                <p>{{$comic->type}}</p>
                <p>{{$comic->sale_data}}</p>
                {{-- dettagli del fumetto --}}
                <p><a href="{{ route("comics.show", $comic->id) }}">Dettagli</a></p>
                {{-- modifica del fumetto --}}
                <p><a href="{{ route("comics.edit", $comic->id) }}">Modifica</a></p>
            </div>
        </div>
    @endforeach
</div>
{{-- metodo get , azione usa funzione route create --}}
<form method="get" action="{{route('comics.create')}}">
    {{-- do token al form --}}
    @csrf
    <button type="submit">Aggiungi Fumetto</button>
</form>
@endsection