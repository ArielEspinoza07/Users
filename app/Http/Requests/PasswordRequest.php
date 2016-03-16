<?php

namespace Users\Http\Requests;

use Users\Http\Requests\Request;

class PasswordRequest extends Request
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
            'oldpassword' => 'min:5|max:20|required',
            'newpassword' => 'min:5|max:20|required',
            'confpassword' => 'min:5|max:20|required|same:newpassword',
        ];
    }
}
