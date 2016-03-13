<?php

namespace Users\Http\Requests;

use Users\Http\Requests\Request;

class ProfileRequest extends Request
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
          'name' => 'min:6|max:15|required',
          'username' => 'min:6|max:15|required|unique:users',
          'email' => 'required|email|unique:users',
        ];
    }
}
