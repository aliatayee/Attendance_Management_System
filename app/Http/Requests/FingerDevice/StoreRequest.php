<?php

namespace App\Http\Requests\FingerDevice;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => [
                'required',
                'string',
            ],
            'ip' => [
                'required',
                'ipv4',
            ],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
