<?php

namespace App\Http\Livewire\Data\Customers;

use Illuminate\Support\Facades\Storage;
use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class ListCustomers extends Component
{   
    use WithPagination;

    public $search;
    protected $queryString = ['search'];

    public function destroy($customerId)
    {   
        $customer = Customer::find($customerId);

        if($customer) {
            Storage::disk('public')->delete('photos/'. $customer->customer_ktp_image);
            Storage::disk('public')->delete('photos/'. $customer->customer_npwp_image);
            Storage::disk('public')->delete('photos/'. $customer->customer_sppkp_image);
            Storage::disk('public')->delete('photos/'. $customer->customer_store1_image);
            Storage::disk('public')->delete('photos/'. $customer->customer_store2_image);
            $customer->delete();

        }
    }

    public function render()
    {   
        return view('livewire.data.customers.list-customers', [
            'customers' => Customer::latest()->paginate(10)
        ]);
    }
}
