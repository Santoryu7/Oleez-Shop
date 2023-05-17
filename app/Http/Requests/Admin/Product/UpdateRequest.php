<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'count' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|file'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Данные должны быть строчным типом',
            'description.required' => 'Это поле необходимо для заполнения',
            'description.string' => 'Данные должны быть строчным типом',
            'price.required' => 'Это поле необходимо для заполнения',
            'price.integer' => 'Данные должны быть числовым типом',
            'count.required' => 'Это поле необходимо для заполнения',
            'count.integer' => 'Данные должны быть числовым типом',
            'category_id.required' => 'Это поле необходимо для заполнения',
            'category_id.integer' => 'ID категории должен быть числом',
            'category_id.exists' => 'ID категории должен быть в базе данных',
            'image.file' => 'Необходимо выбрать файл',
        ];
    }
}
