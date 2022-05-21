<?php

namespace App\Http\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;

class Login extends Component
{   
    public $customerId;
    public $customer_userid;
    public $customer_password;

    public function mount($id)
    {   
        $customer = Customer::find($id);

        $this->customerId = $customer->id;
    }



    public function login()
    {   

        // $this->validate([
        //     'customer_userid' => 'required',
        //     'customer_password' => 'required',
        // ]);

        // if(Auth::attempt(['customer_userid' => $this->customer_userid, 'customer_password'=> $this->customer_password])) {

        //     return redirect()->route('customer.confirm');

        // } else {
        //     session()->flash('error', 'Alamat Email atau Password Anda salah!.');
        //     return redirect()->route('customer.login');
        // }
        
        

        $customer = Customer::find($this->customerId)->where('id',$this->customerId)->first();
        
        if($customer->customer_userid == $this->customer_userid && $customer->customer_password == $this->customer_password) {
            redirect()->route('customer.confirm', $this->customerId);
            // return view('livewire.customer.confirm', compact('customer'));
        }
        // else{
        //     session()->flash('error', 'Alamat Email atau Password Anda salah!.');
        //     return view('livewire.customer.login', compact('customer'));
        // } 
    }

    public function render()
    {   
        $customers = Customer::find($this->customerId);
        return view('livewire.customer.login', compact('customers'));
    }
}
