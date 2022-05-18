<?php

namespace App\Http\Livewire\Data\Customers;

use App\Models\Customer;
use Livewire\Component;

class ListCustomers extends Component
{
    public function render()
    {
        return view('livewire.data.customers.list-customers', [
            'customers' => Customer::latest()->paginate(10)
        ]);
    }
}
