<?php

namespace App\Http\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;

class Login extends Component
{   
    public $customerId;
    public $customer_userid;
    public $customer_password;
    public $customer_check;

    public function mount($id)
    {   
        $customer = Customer::find($id);

        $this->customerId = $customer->id;
        $this->customer_userid = $customer->customer_userid;
        $this->customer_check = $customer->customer_check;
    }

    public function login()
    {   

        $this->validate([
            'customer_userid' => 'required',
            'customer_password' => 'required',
        ]);        

        $customer = Customer::find($this->customerId)->where('id',$this->customerId)->first();
        
        if($customer->customer_check == "No" && $customer->customer_userid == $this->customer_userid && $customer->customer_password == $this->customer_password) {
            redirect()->route('customer.confirm', $this->customerId);
        }
    }

    public function render()
    {   
        $customers = Customer::find($this->customerId);
        return view('livewire.customer.login', compact('customers'));
    }
}
