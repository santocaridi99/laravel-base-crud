<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Http\Requests\ComicStoreRequest;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ritorno tutti i dati alla index
        $data = Comic::all();
        return view("comics.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // ritorno create
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // ricordare di cambiare class Request in ComicStoreRequest
    public function store(ComicStoreRequest $request)
    {
        // // salvo i dati della richiesta in una nuova data
        // $data = $request->all();
        // invece di all eseguo funzione validated (prende dati validati dal request)
        $data = $request->validated();

        // li scrivo in modo automatico
        $newComic = new Comic();
        $newComic->fill($data);
        // $newComic->title = $newdata["title"];
        // $newComic->description = $newdata["description"];
        // $newComic->thumb = $newdata["thumb"];
        // $newComic->price = $newdata["price"];
        // $newComic->series = $newdata["series"];
        // $newComic->sale_date = $newdata["sale_date"];
        // $newComic->type = $newdata["type"];
        // Salvo newcomics
        $newComic->save();
        // Redirect 
        return redirect()->route('comics.show',$newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // automaticamente fa il find or fail
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        // ritorna una view metodo get relativo form  e pasuiamo il record che vogliamo editare tramite id
        return view("comics.edit", compact("comic"));
    }

    // nel form action dobbiamo effettuare l'update

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicStoreRequest $request, $id)
    {
        // faccio la request ti tutti i dati e li metto nella variabile
        // $data = $request->all();
        // invece di all eseguo funzione validated (prende dati validati dal request)
        $data = $request->validated();
        // find or fail del relativo fumetto
        $comic = Comic::findOrFail($id);
        // update esegue il fill con i nuovi dati e salva in automatico
        $comic->update($data);
        // ritorno alla rotta show e gli passo l'id
        return redirect()->route("comics.show", $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // find or fail del relativo fumetto
        $comic = Comic::findOrFail($id);
        // cancella il fumetto
        $comic->delete();
        // redirexr all'index
        return redirect()->route("comics.index");
    }
}
