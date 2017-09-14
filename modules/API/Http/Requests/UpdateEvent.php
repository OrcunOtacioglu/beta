<?php

namespace Modules\API\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEvent extends FormRequest
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
            'category_id' => 'required|integer',
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'on_sale_date' => 'required|date',
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
