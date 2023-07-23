<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    
    //バリデーション
    public function rules()
    {
        return [
            'register.name' => 'required|string|max:15',//名前制限
            'register.age' => 'required|integer|max:130',//年齢制限
        ];
    }
}
