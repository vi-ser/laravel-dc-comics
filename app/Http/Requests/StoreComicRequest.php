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
            'title' => 'required|max:255',
            'description' => 'nullable|max:5000',
            'thumb' => 'nullable|max:2000',
            'price' => 'required|max:7',
            'series' => 'nullable|max:100',
            'sale_date' => 'required',
            'type' => 'required|max:100',
            'artists' => 'nullable|max:2000',
            'writers' => 'nullable|max:2000'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo deve essere inserito',
            'title.max' => "Il titolo deve avere massimo :max caratteri",
            'description.max' => 'La descrizione deve avere massimo :max caratteri',
            'thumb.max' => "L'url dell'immagine deve avere massimo :max caratteri",
            'price.required' => 'Il prezzo deve essere inserito',
            'price.max' => 'Il prezzo deve avere massimo :max caratteri',
            'series.max' => 'Il campo "serie" deve avere massimo :max caratteri',
            'sale_date.required' => 'La data di vendita deve essere inserita',
            'type.required' => 'La tipologia deve essere inserita',
            'type.max' => "La tipologia deve avere massimo :max caratteri",
            'artists.max' => 'Il campo artisti deve avere massimo :max caratteri',
            'writers.max' => 'Il campo scrittori deve avere massimo :max caratteri',
        ];
    }
}
