<?php

namespace Subhashwebiots\Sqlstringify\StringReq;

use Illuminate\Foundation\Http\FormRequest;

class StrR extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'envato_username' => 'required',
            'license' => 'required|regex:/^([a-f0-9]{8})-(([a-f0-9]{4})-){3}([a-f0-9]{12})$/i',
        ];
    }

    public function attributes()
    {
        return [
            'envato_username' => 'Envato Username',
            'license' => 'License',
        ];
    }

    public function messages()
    {
        return [
            'license.regex' => dbString('SW52YWxpZCBwdXJjaGFzZSBjb2Rl'),
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
