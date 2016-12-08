<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
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
            "frequency_id"   => "required",
            "bus_type"       => "required",
            "origin_id"      => "required",
            "destination_id" => "required",
            "departure"      => "required",
            "seats"          => "required|min:1",
            "fare"           => "required|min:1",
        ];
    }
}
