<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'p_responsibility' => 'required',
            'p_substituteid' => 'required',
            'p_period' => 'required',
            'p_userid' => 'required',
            //
        ];
    }
    public function messages(){
        return [
        'required' => 'You have to enter some data on :attribute field'
        ];
    }
}
