<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeaveRequest extends FormRequest
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
            'p_taskid' => 'required',
            'p_status' => 'required',
            'p_typeid' => 'required',
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
