<form action="{{ route('comics.destroy',$comic->id)}}" method="post" id="{{$comic->id}}">
    @csrf
    @method("delete")
    <button type="submit">Elimina</button>
</form>

<script>
    // get elemet by id del form 
    // la variabile deve essere diversa per ogni button
    const deleteButton_{{$comic->id}} = document.getElementById("{{$comic->id}}")
    // faccio ad event listener al submit
    deleteButton_{{$comic->id}}.addEventListener("submit", function(e){
        // faccio che non esegue il submit di default
        e.preventDefault();
        // creo una modale 
        // uso quella semplice del browser assegnandola ad una variabile
        const modal = confirm("Vuoi davvero eliminare l'elemento" + " {{$comic->title}}");
        // confirm ritorna true o false
        if(modal){
            deleteButton_{{$comic->id}}.submit();
        }else{
            alert('operazione annullata')
        }
    })
</script>