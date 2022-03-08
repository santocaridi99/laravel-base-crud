<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            // id
            $table->id();
            // titolo , immaginando che lunghezza caratteri  sia molto grande
            $table->text("title");
            // descrizione idem solo che puù non esserci
            $table->text("description")->nullable();
            // idem il thumb
            $table->text("thumb")->nullable();
            // prezzo 8 cifre due decimali
            $table->float("price", 8, 2);
            // serie max 100 caratteri
            $table->string("series", 100);
            // data
            $table->date("sale_date");
            // tipo
            $table->string("type", 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
