<?php
use App\Comic;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // passo a comics i valori dei dati che ho importato nel config
        $comics=config("laravel-crud-db");
        foreach($comics as $key=>$comic){
            // per ogni fumetto in comics istanzio una nuovo fumetto
            $newComic = new Comic;
            // passo i valori
            $newComic->title = $comic["title"];
            $newComic->description = $comic["description"];
            $newComic->thumb = $comic["thumb"];
            $newComic->price = $comic["price"];
            $newComic->series = $comic["series"];
            $newComic->sale_date = $comic["sale_date"];
            $newComic->type = $comic["type"];
            // stampo
            $newComic->save();
        }
    }
}
