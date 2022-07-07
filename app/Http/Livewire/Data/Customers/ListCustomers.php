<?php

namespace App\Http\Livewire\Data\Customers;

use Illuminate\Support\Facades\Storage;
use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class ListCustomers extends Component
{
    use WithPagination;

    protected $updatesQueryString = ['search'];
    public $search;

    public function destroy($id)
    {
        $customer = Customer::find($id);

        if ($customer) {
            Storage::disk('public')->delete('photos/' . $customer->customer_ktp_image);
            Storage::disk('public')->delete('photos/' . $customer->customer_npwp_image);
            Storage::disk('public')->delete('photos/' . $customer->customer_sppkp_image);
            Storage::disk('public')->delete('photos/' . $customer->customer_store1_image);
            Storage::disk('public')->delete('photos/' . $customer->customer_store2_image);
            $customer->delete();
        }

        session()->flash('message', 'Data Berhasil Dihapus.');

        return redirect()->route('data.customers.listcustomers');
    }

    public function render()
    {
        return view('livewire.data.customers.list-customers', [
            'customers' => $this->search === null ?
                Customer::latest()->paginate(5) :
                Customer::where('customer_name', 'like', '%' . $this->search . '%')
                ->orWhere('customer_code', 'like', '%' . $this->search . '%')
                ->orWhere('customer_userid', 'like', '%' . $this->search . '%')
                ->latest()->paginate(5),
        ]);
    }
}
