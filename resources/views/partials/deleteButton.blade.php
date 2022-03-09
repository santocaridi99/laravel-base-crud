<form action="{{ route("comics.destroy",$comic->id)}}" method="post" id="{{$comic->id}}">
    @csrf
    @method("delete")
    <button type="submit">Elimina</button>
</form> 