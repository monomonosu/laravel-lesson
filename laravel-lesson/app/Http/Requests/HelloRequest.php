<?php

namespace App\Http\Requests;

use App\Rules\MyRule;
use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'hello')
            return true;
        else
            return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => ['numeric', new MyRule(5)],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力',
            'mail.email' => 'メアド必要',
            'age.numeric' => '年齢は整数で',
            'age.hello' => 'Hello! 偶数のみ入力して',
        ];
    }
}
