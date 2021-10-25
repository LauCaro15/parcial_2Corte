<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorStore extends FormRequest
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
            'RUT' => 'required|min:5|max:10',
            'name' => 'required|min:5|max:50',
            'lastname' => 'required|min:5|max:50',
            'email' => 'required|min:5|max:50',
            'direccion' => 'required|min:5|max:50',
            'especialidad' => 'required'
        ];
    }
}
