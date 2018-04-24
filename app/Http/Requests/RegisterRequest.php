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
            'p_password' => 'required|min:3|max:255',
            'p_conpassword' => 'required|min:3|max:255|same:p_password',
            'p_username' => 'required',
            //'p_userid' => 'required|numeric',

            'p_name' => 'required',
            'p_surename' => 'required',
            'p_address' => 'required',
            'p_email' => 'required'
            //
        ];
    }

    public function messages(){
        return [
        'required' => 'You have to enter some data on :attribute field',
        'numeric' => 'You have to enter some data on :attribute field not number',
        'p_password.required' => 'Please enter password longer than 3',
        'p_conpassword.required' => 'Please enter confirm password longer than 3',
        'p_password.min:3' => 'Please enter password at least 3',
        'p_conpassword.min:3' => 'Please enter confirm password at least 3',
        'p_conpassword.same:p_password' => 'Please enter confirmpassword match to password',
        
        //'p_userid.required' => 'Please enter Number'
        ];
    }
}
