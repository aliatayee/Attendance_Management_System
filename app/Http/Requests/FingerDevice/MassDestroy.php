<?php

namespace App\Http\Requests\FingerDevice;

use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroy extends FormRequest
{
    public function rules()
    {
        return [
            'ids' => 'required|array',
            'ids.*' => 'exists:finger_devices,id',
        ];
    }

    public function authorize()
    {
        abort_if(Gate::denies('finger_device_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }
}
