<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //passo dei dati fillable in modo da riempire in automatico le colonne
    protected $fillable =[
        "title",
        "description",
        "thumb",
        "price",
        "series",
        "sale_date",
        "type"
    ];
}
