<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'featured_image' => 'required',
            'category_id' => 'required',
            'tags' => 'required',
            'content' => 'required'
        ];
    }
}
