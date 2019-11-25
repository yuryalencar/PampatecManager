<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            'name' => 'required|string',
            'description' => 'required|string',
            'value_of_the_meters' => 'numeric',
            'size' => 'numeric',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nome do Grupo',
            'description' => 'Descrição da Sala',
            'value_of_the_meters' => 'Valor do Metro da Sala',
            'size' => 'Tamanho da Sala',
        ];
    }
}
