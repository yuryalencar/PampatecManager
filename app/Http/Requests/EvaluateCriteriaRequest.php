<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvaluateCriteriaRequest extends FormRequest
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
            'title' => 'required|string',
            'score' => 'required|integer',
            'description' => 'nullable|string',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Título',
            'score' => 'Peso',
            'description' => 'Descrição',
        ];
    }

}
