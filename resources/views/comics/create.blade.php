{{-- estendi il layout di default --}}
@extends('default')
@section('title','Comic/NuovoFumetto.it')
@section('content')
<form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div>
        <label class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title">
    </div>

    <div>
        <label class="form-label">Descrizione</label>
        <input type="text" class="form-control" name="description">
    </div>

    <div>
        <label class="form-label">Image</label>
        <input type="url" class="form-control" name="thumb">
    </div>

    <div>
        <label class="form-label">Prezzo</label>
        <input type="number" class="form-control" name="price">
    </div>

    <div>
        <label class="form-label">Serie</label>
        <input type="text" class="form-control" name="series">
    </div>

    <div>
        <label class="form-label">Data</label>
        <input type="date" class="form-control" name="sale_date">
    </div>

    <div>
        <label class="form-label">Tipo</label>
        <input name="type" class="form-control" >
    </div>

    <div>
        <button type="reset">Indietro</button>
        <button type="submit">Crea Fumetto</button>
    </div>
</form>
@endsection