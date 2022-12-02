<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReporteRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'asunto' => 'bail|required|string|max:255|unique:reportes,asunto,' . $this->route('reporte')->id,
                'descripcion' => 'bail|required|string|max:2048',
                'image'=> 'bail|image|mimes:jpeg,png,jpg|max:2048',
                'fechaIni' => 'bail|required|date'
        ];
    }
}
