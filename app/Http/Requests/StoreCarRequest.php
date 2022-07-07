<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        # TODO: Validate the car details
        return [
            'model' => ['required',],
            'manufacturer' => ['min:1', 'max:255', 'required',],
            'price' => [],
            'code' => [],
        ];
    }
}
