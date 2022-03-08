{{-- estendi il layout di default --}}
@extends('default')
@section('title','dettagli')
@section('content')
<ul>
    {{-- semplice ul con dettagli --}}
    <li><strong>Titolo</strong>: {{$comic->title}}</li>
    <li><strong>Uscita</strong>: {{$comic->sale_date}}</li>
    <li><strong>Descrizione</strong>: {{$comic->description}}</li>
    <li><strong>IMG</strong>: <img src="{{$comic->thumb}}" alt=""></li>
    <li><strong>Prezzo</strong>: {{$comic->price}}</li>
    <li><strong>Tipo</strong>: {{$comic->type}}</li>
</ul>
@endsection