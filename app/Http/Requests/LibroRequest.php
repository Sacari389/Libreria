<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibroRequest extends FormRequest
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
			'lib_titulo' => 'required|string',
            'lib_fecha_publicacion' => 'required|date',
			'lib_id_autor' => 'required',
			'lib_id_editorial' => 'required',
			'lib_id_categoria' => 'required',
        ];
    }
}
