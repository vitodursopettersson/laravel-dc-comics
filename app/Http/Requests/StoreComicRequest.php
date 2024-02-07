<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'sale_date' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Il campo è obbligatorio.',
            'thumb.url' => 'Inserisci una URL valida',
            'price.numeric' => 'Inserisci un valore numerico.',
            'sale_date.date' => 'Inserisci una data valida.'
        ];
    }
}
