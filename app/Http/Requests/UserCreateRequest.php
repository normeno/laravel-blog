<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserCreateRequest extends Request
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
            'name'      =>  'required|max:45',
            'email'     =>  'required|email|unique:users,email|max:65',
            'password'  =>  'required|min:6|confirmed',
            'avatar'    =>  'required',
            'role'      =>  'required'
        ];
    }
}
