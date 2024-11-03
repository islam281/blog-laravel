<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [


            'name'=>'required|string',
            'email'=>'required|email',
            'subject'=>'required|string',
            'message'=>'required',
            'blog_id'=>'required|exists:blogs,id',


            //
        ];
    }


    public function attributes(): array
    {
        return [


            'blog_id'=>'blog',


            //
        ];
    }
}
