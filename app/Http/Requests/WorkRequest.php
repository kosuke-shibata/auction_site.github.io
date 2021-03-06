<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkRequest extends FormRequest
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
            'work.title' => 'required|string|max:50',
            'work.price' => 'required',
            'work.body' => 'required|string|max:1000',
            'image_path' => 'required',
            'work.file_path' => 'required',
        ];
    }
}
