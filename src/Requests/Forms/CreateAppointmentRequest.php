<?php

namespace  Web\App\Requests\Forms;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateAppointmentRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

/**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|max:255',
            'gender' => 'required|max:255',
            'treatment' => 'required|max:255',
            'appointment_date' => 'required|date',
//            'captcha' => 'required|captcha'
        ];

    }
}
