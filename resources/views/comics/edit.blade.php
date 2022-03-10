{{-- uguale al form create solo che passo action update e i relativi metodi --}}
{{-- per avere un placeholder ho dato come value i dati dinamici --}}

{{-- estendi il layout di default --}}
@extends('default')
@section('title','Modifica fumetto'.$comic->id)
@section('content')
{{-- se ci sono errori nella errors bag --}}
@if($errors->any())
{{-- faccio una ul --}}
<ul class="error">
    {{-- seleziono tutti gli errori della error bag con function all() --}}
    {{-- creo una li per ogni errore con il foreach --}}
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form action="{{route('comics.update', $comic->id)}}" method="POST" class="edit">
    @csrf
    {{-- per inserire i metodi put o patch di update usiamo @ method --}}
    @method('put')
    {{-- inserisco dati di name dinamicamente --}}
    <div>
        <label class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title" value="{{$comic->title}}">
    </div>

    <div>
        <label class="form-label">Descrizione</label>
        <textarea name="description" class="form-control" cols="30" rows="10">{{$comic->description}}</textarea>
    </div>

    <div>
        <label class="form-label">Image</label>
        <input type="url" class="form-control" name="thumb" value="{{$comic->thumb}}">
    </div>

    <div>
        <label class="form-label">Prezzo</label>
        <input type="number" class="form-control" name="price" value="{{$comic->price}}">
    </div>

    <div>
        <label class="form-label">Serie</label>
        <input type="text" class="form-control" name="series" value="{{$comic->series}}">
    </div>

    <div>
        <label class="form-label">Data</label>
        <input type="date" class="form-control" name="sale_date" value="{{$comic->sale_date}}">
    </div>

    <div>
        <label class="form-label">Tipo</label>
        <input type="text" class="form-control" name="type" value="{{$comic->type}}">
    </div>

    <div>
        <button type="reset">Indietro</button>
        <button type="submit">Crea Fumetto</button>
    </div>
</form>
{{-- un bottone che fa ritornare alla home --}}
<form method="get" action="{{route('comics.index')}}" class="home">
    {{-- do token al form --}}
    @csrf
    <button type="submit">Home</button>
</form>
@endsection