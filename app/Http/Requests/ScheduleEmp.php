<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleEmp extends FormRequest
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
            'slug' => 'required|string|min:3|max:32|alpha_dash',
            'time_in' => 'required|date_format:H:i|before:time_out',
            'time_out' => 'required|date_format:H:i',
        ];
    }
}
