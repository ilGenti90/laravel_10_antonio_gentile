<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required | min:3',
            'description' => 'required',
            'price' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Non hai inserito il nome del prodotto',
            'name.min' => 'Il nome deve essere almeno di 3 caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'price.required' => 'Il prezzo è obbligatorio',
        ];
    }
}
