<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserUpdateRequest extends Request
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
        $id = $this->input('id');

        return [
            'name'      =>  'required|max:45',
            'email'     =>  'required|email|unique:users,email,'.$id,
            'password'  =>  'min:6|confirmed',
            'avatar'    =>  'image',
            'role'      =>  'required'
        ];
    }
}
