<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscriptionRequest extends FormRequest
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
                "nom" =>"bail|required|between:3,20|alpha",
                "email" =>"bail|required|between:5,20|alpha",
                "password" =>"bail|required|between:5,20|alpha",
                "num_phone" =>"bail|required|between:5,20",
                "age" =>"bail|required|between:1,20",
                "code_de_recuperation" =>"bail|required|between:5,20"
        ];
    }
}
