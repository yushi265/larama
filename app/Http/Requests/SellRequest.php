<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:200',
            'price' => 'required|digits_between:1,10',
            'item-image' => ['file', 'image', 'required'],
            'category' => 'required|integer',
            'condition' => 'required|integer',
        ];
    }

    public function attributes()
    {
        return [
            'name' => '商品名',
            'description' => '商品説明',
            'price' => '価格',
            'item-image' => '商品画像',
            'category' => 'カテゴリー',
            'condition' => '商品の状態',
        ];
    }
}
