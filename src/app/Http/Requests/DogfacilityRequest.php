<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DogfacilityRequest extends FormRequest
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
            'title' => 'required|max:20',
            'category_id' => 'required|integer|max:2',
            'openinghours' => 'required|max:20',
            'summary' => 'required|string|min:30|max:200',
            'url' => 'required|url',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タイトルは必須です。',
            'title.max' => 'タイトルは20文字以内で入力してください。',
            'category_id' => '大型犬の可否を選択してください。',
            'openinghours' => '営業時間は必須です。',
            'openinghours.max' => '営業時間は20文字以内で入力してください。',
            'summary.required' => '本文は必須です。',
            'summary.max' => '本文は140文字以内で入力してください。',
        ];
    }
}
