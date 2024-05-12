<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GestionnaireRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'type' => 'required|string',
            'nom' => 'required|string',
            'ville' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'required|email',
            'motDePasse' => 'required|string|min:8',
        ];
    }
}
