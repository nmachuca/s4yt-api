<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|min:3',
            'email'=> 'required|string|email|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
            'education' => 'required|numeric|exists:educations,id',
            'institution' => 'required_if:education,1|string',
            'grade' => 'required|numeric|exists:grades,id',
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string'
        ];
    }
}
