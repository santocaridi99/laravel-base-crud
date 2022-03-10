<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //array di parametri da validizzare
            // richiede almeno 5 caratteri
            "title"=>"required|min:5",
            // min 20
            "description"=>"required|min:20",
            // può essere nulla
            "thumb"=> "nullable|url",
            // deve essere numerico
            "price"=>"required|numeric",
            "series"=>"required|min:5",
            // richiede una data
            "sale_date"=>"required|date",
            "type"=>"required|min:3"
        ];
    }
}
