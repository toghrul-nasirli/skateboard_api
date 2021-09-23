<?php

namespace App\Rules;

use App\Models\Order;
use Illuminate\Contracts\Validation\Rule;

class PreparationDateCheckRule implements Rule
{
    private $order_id;

    public function __construct($order_id)
    {
        $this->order_id = $order_id;
    }

    public function passes($attribute, $value)
    {
        $order_date = Order::select('created_at')->find($this->order_id)->created_at;
        
        if(strtotime($value) > strtotime($order_date)) {
            return true;
        }
    }

    public function message()
    {
        return 'Qeyd olunan tarix sifarişin tarixindən sonra olmalıdır!';
    }
}
