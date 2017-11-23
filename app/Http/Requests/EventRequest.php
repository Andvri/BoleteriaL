<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            "name" => "required|string|min:5",
            "vip" => "required|numeric|min:0",
            "platinium" => "required|numeric|min:0",
            "altos" => "required|numeric|min:0",
            "medios" => "required|numeric|min:0",
            "date" => "required|date"
        ];
    }
    public function messages(){
        return [
            "date.date" => "El formato de la fecha es incorrecto",
            "name.min" => "El campo nombre debe se mayor a 5 caracteres",
            "name.required" => "El campo nombre es requerido",
            
        ];
    }
}
