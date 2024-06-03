<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Mot_de_pass_oublier_Request extends FormRequest
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
                "code_de_recuperation"=> "bail|required|between:5,20|alpha"
        ];
    }
}
