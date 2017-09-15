<?php

namespace Modules\API\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRate extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'organizer_id' => 'required|integer',
            'name' => 'required|string',
            'unique_identifier' => 'required|string',
            'type' => 'required|integer',
            'price' => 'required|decimal',
            'min_allowed_per_purchase' => 'required|integer',
            'max_allowed_per_purchase' => 'required|integer',
            'sales_start_time' => 'required|date',
            'sales_end_time' => 'required|date',
            'status' => 'required|integer',
            'availability' => 'required|integer',
            'is_paused' => 'required|boolean',
            'absorb_fees' => 'required|boolean',
            'ticket_delivery' => 'required|integer'
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
