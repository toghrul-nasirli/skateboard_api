<?php

namespace App\Http\Requests;

use App\Rules\PreparationDateCheckRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateDeliveryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'delivery_date' => ['required', 'after:preparation_date'],
            'preparation_date' => ['required', new PreparationDateCheckRule($this->order_id)],
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute bölməsi boş buraxıla bilməz.',
            'after' => ':attribute, :date tarixindən sonra bir tarixdə olmalıdır.',
        ];
    }

    public function attributes()
    {
        return [
            'delivery_date' => 'Çatdırılma tarixi',
            'preparation_date' => 'Hazırlanma tarixi',
        ];
    }
}
