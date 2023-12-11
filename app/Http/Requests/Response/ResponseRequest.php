<?php

namespace App\Http\Requests\Response;

use Illuminate\Foundation\Http\FormRequest;

class ResponseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => [
                'nullable',
                'string',
                'max:255'
            ],
            'description' => [
                'nullable',
                'string',
                'max:255'
            ],
            'type' => [
                'required',
                'in:get,post,delete,patch,put'
            ],
            'body' => [
                'required',
                'json',
            ],
            'header_index' => [
                'nullable',
                'array'
            ],
            'header_index.*' => [
                'string',
                'min:1'
            ],
            'header_value' => [
                'nullable',
                'array'
            ],
            'header_value.*' => [
                'string',
                'min:1'
            ],
            'code' => [
                'required',
                'numeric',
                'between:100,599'
            ]
        ];
    }

    /**
     * @return string[]
     */
    function attributes(): array
    {
        return [
            'header_index.*' => 'header index',
            'header_value.*' => 'header value',
            'code' => 'status code',
        ];
    }

    /**
     * @return string[]
     */
    protected function defaults(): array
    {
        return [
            'code'   => '200',
            'type' => 'GET'
        ];
    }
}
