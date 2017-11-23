<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
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
            "location" => "required",
            "serial" => "required|string|min:10",
            "event_id" => "required|numeric",
            "user_id" => "required|numeric"
        ];
    }
    public function messages(){
        return [
            "user_id.required" => "Ocurrio un error",
            "user_id.numeric" => "Ocurrio un error",
            "location.required" => "El campo localizacion es requerido",
            "serial.required" => "El campo serial es requerido",
            "serial.min" => "El campo serial debe contener al menos 10 caracteres"
        ];
    }
}
