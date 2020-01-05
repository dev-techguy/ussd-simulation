<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class USSDRequest extends FormRequest
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
            'ussdString' => ['string', 'required', 'max:255'],
            'msisdn' => ['numeric', 'digits_between:10,10', 'required'],
            'serviceCode' => ['string', 'max:255', 'required'],
        ];
    }
}
