<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRegisterRequest extends FormRequest
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
            'product_name' => 'required|max:30',
            'product_name_kana' => 'required|max:60',
            'jan' => 'required|max:13',
            'model_number' => 'required|alpha_num',
            'description' => 'required|max:255',
            'main_category' => 'required',
            'sub_category' => 'required',
            'price' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ];
    }

    public function messages()
    {
        return[
            'product_name.required' => '・商品名は必須です',
            'product_name.max' => '・商品名は30文字以内で入力してください',
            'product_name_kana.required' => '・商品名(カナ)は必須です',
            'product_name_kana.max' => '・商品名(カナ)は60文字以内で入力してください',
            'jan.required' => '・JANは必須です',
            'jan.max' => '・JANは13文字以内で入力してください',
            'model_number.required' => '・型番は必須です',
            'model_number.alpha_num' => '・型番は半角英数で入力してください',
            'description.required' => '・商品説明は必須です',
            'description.max' => '・商品説明は255文字以内で入力してください',
            'main_category.required' => '・メインカテゴリーは必須です',
            'sub_category.required' => '・サブカテゴリーは必須です',
            'price.required' => '・価格は必須です',
            'price.integer' => '・価格は数値で入力してください',
            'start_date.required' => '・販売開始日は必須です',
            'start_date.date' => '・販売開始日は日付けを入力してください',
            'end_date.required' => '・販売終了日は必須です',
            'start_date.date' => '・販売終了日は日付けを入力してください',
        ];
    }
}
