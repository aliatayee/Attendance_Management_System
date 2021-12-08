<?php

namespace App\Http\Requests\FingerDevice;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'serialNumber' => [
                'required',
                'string',
                Rule::unique('finger_devices', 'serialNumber')->ignore($this->finger_device),
            ],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
