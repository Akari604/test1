<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel' => ['required', 'string'],
            // 'tel' => ['required', 'string', 'regex:/^0\d{max:15}$/'],
            // 'tel_first' => ['required', 'string', 'regex:/^0\d{5}$/'],
            // 'tel_second' => ['required', 'string', 'regex:/^0\d{5}$/'],
            // 'tel_third' => ['required', 'string', 'regex:/^0\d{5}$'],
            'address' => ['required', 'string', 'max:255'],
            'building' => ['required', 'string', 'max:255'],
            'select' => ['required'],
            'detail' => ['required', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'gender.required' => '性別を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel.required' => '電話番号を入力してください',
            // 'tel.regex' => '電話番号は5桁までの数字で入力してください',
            // 'tel_first.regex' => '電話番号は5桁までの数字で入力してください',
            // 'tel_first.required' => '電話番号を入力してください',
            // 'tel_second.required' => '電話番号を入力してください',
            // 'tel_third.required' => '電話番号を入力してください',
            // 'tel_first.regex' => '電話番号は5桁までの数字で入力してください',
            // 'tel_second.regex' => '電話番号は5桁までの数字で入力してください',
            // 'tel_third.regex' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'select.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}
