<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'responsible' => 'required|string',
            'email' => 'required|string',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nome da Empresa',
            'responsible' => 'Nome do Responsável',
            'email' => 'E-mail do Reponsável',
        ];
    }
}
