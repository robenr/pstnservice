<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            'first_name' => 'required|regex:/^[a-zA-Z]+$/u',
            'last_name' => 'required|regex:/^[a-zA-Z]+$/u',
            'email' => 'email',
            'phone' => 'required|numeric|size:10',
            'city' => 'required|regex:/^[a-zA-Z]+$/u',
            'country' => 'required|regex:/^[a-zA-Z]+$/u',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Please provide a first name.',
            'last_name.required' => 'Please provide a last name.',
            'email.email' => 'Please provide a valid email.',
            'phone.required' => 'Please provide a phone.',
            'city.required' => 'Please provide a city.',
            'country.required' => 'Please provide a country.',
            'first_name.regex' => 'Invalid first name.',
            'last_name.regex' => 'Invalid last name.',
            'phone.numeric' => 'Invalid phone.',
            'city.regex' => 'Invalid city.',
            'country.regex' => 'Invalid country.',
        ];
    }
}
