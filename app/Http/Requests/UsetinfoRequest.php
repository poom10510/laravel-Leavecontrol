<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsetinfoRequest extends FormRequest
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
            //
                'p_name' => 'required',
                'p_surename' => 'required',
                'p_address' => 'required',
                'p_email' => 'required'
        ];
    }

    public function messages(){
        return [
        'required' => 'You have to enter some data on :attribute field',
        'p_name.required' => 'Please enter Name'
        ];
    }
}
