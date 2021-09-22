<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'product_id' => ['required', 'integer', 'exists:skateboards,id'],
            'color_id' => ['required', 'integer', 'exists:colors,id'],
            'amount' => ['required', 'integer', 'between:1,10'],
            'custom_print_photo' => ['nullable', 'image', 'max:2048'],
            'email' => ['email:dns', 'required_without:phone', 'string'],
            'phone' => ['required_without:email', 'string'],
            'address' => ['required', 'string'],
        ];
    }
    
    public function messages()
    {
        return [
            'required' => ':attribute bölməsi boş buraxıla bilməz.',
            ':attribute tam ədəd olmalıdır.',
            'exists' => 'Seçilmiş :attribute mövcud deyil.',
            'between' => ':attribute :min və :max aralığında olmalıdır.',
            'image' => ':attribute şəkil formatında olmalıdır.',
            'max' => ':attribute :max simvoldan böyük olmamalıdır.',
            'email' => ':attribute etibarlı bir e-poçt ünvanı olmalıdır.',
            'string' => ':attribute simvollardan ibarət olmalıdır.',
            'required_if' => ':other bölməsinin dəyəri :value olduğu halda :attribute bölməsi boş buraxıla bilməz.',
        ];
    }

    public function attributes()
    {
        return [
            'product_id' => 'Məhsul id-si',
            'color_id' => 'Məhsul rəngi',
            'amount' => 'Say',
            'custom_print_photo' => 'Xüsusi çap şəkili',
            'email' => 'E-poçt ünvanı',
            'phone' => 'Telefon',
            'address' => 'Ünvan',
        ];
    }
}
