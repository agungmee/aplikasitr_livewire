<?php

namespace App\Http\Livewire\Data\Customers;

use App\Models\Customer;
use App\Models\Employee;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

date_default_timezone_set('Asia/Jakarta');

class Edit extends Component
{
    use WithFileUploads;

    public $customerId;
    public $customer_code;
    public $customer_name;
    public $customer_group;
    public $customer_userid;
    public $customer_password;
    public $customer_cabang;
    public $customer_territory;
    public $customer_address;
    public $customer_province;
    public $customer_city;
    public $customer_district;
    public $customer_village;
    public $customer_postal_code;
    public $customer_contact;
    public $customer_type;
    public $customer_ktp_name;
    public $customer_ktp_no;
    public $customer_npwp_no;
    public $customer_npwp_address;
    public $customer_sppkp_address;
    public $customer_tax_address;
    public $customer_phone1;
    public $customer_phone2;
    public $customer_birthdate;
    public $sales_philips_name;
    public $sales_supow_name;
    public $sales_pengaju;
    public $pic_sas;
    public $customer_ktp_image;
    public $customer_npwp_image;
    public $customer_sppkp_image;
    public $customer_store1_image;
    public $customer_store2_image;
    public $customer_check;
    public $admin_check;
    public $updated_by;


    public function mount(Request $request, $id)
    {
        $customer = Customer::find($id);

        if ($customer) {
            $this->customerId = $customer->id;
            $this->customer_code = $customer->customer_code;
            $this->customer_name = $customer->customer_name;
            $this->customer_group = $customer->customer_group;
            $this->customer_userid = $customer->customer_userid;
            $this->customer_password = $customer->customer_password;
            $this->customer_cabang = $customer->customer_cabang;
            $this->customer_territory = $customer->customer_territory;
            $this->customer_address = $customer->customer_address;
            $this->customer_province = $customer->customer_province;
            $this->customer_city = $customer->customer_city;
            $this->customer_district = $customer->customer_district;
            $this->customer_village = $customer->customer_village;
            $this->customer_postal_code = $customer->customer_postal_code;
            $this->customer_contact = $customer->customer_contact;
            $this->customer_type = $customer->customer_type;
            $this->customer_ktp_name = $customer->customer_ktp_name;
            $this->customer_ktp_no = $customer->customer_ktp_no;
            $this->customer_npwp_no = $customer->customer_npwp_no;
            $this->customer_npwp_address = $customer->customer_npwp_address;
            $this->customer_sppkp_address = $customer->customer_sppkp_address;
            $this->customer_tax_address = $customer->customer_tax_address;
            $this->customer_phone1 = $customer->customer_phone1;
            $this->customer_phone2 = $customer->customer_phone2;
            $this->customer_birthdate = $customer->customer_birthdate;
            $this->sales_philips_name = $customer->sales_philips_name;
            $this->sales_supow_name = $customer->sales_supow_name;
            $this->sales_pengaju = $customer->sales_pengaju;
            $this->pic_sas = $customer->pic_sas;
            $this->customer_ktp_image = $request->customer_ktp_image;
            $this->customer_npwp_image = $request->customer_npwp_image;
            $this->customer_sppkp_image = $request->customer_sppkp_image;
            $this->customer_store1_image = $request->customer_store1_image;
            $this->customer_store2_image = $request->customer_store2_image;
            $this->customer_check = $customer->customer_check;
            $this->admin_check = $customer->admin_check;
            $this->updated_by = $customer->updated_by;
        }
    }

    public function update()
    {
        $this->validate([
            // 'customer_name' => 'required',
            // 'customer_cabang' => 'required',
            // 'customer_territory' => 'required',
            // 'customer_address' => 'required',
            // 'customer_province' => 'required',
            // 'customer_city' => 'required',
            // 'customer_district' => 'required',
            // 'customer_village' => 'required',
            // 'customer_postal_code' => 'required',
            // 'customer_contact' => 'required',
            // 'customer_type' => 'required',
            // 'customer_phone1' => 'required',
            // 'sales_philips_name' => 'required',
            // 'sales_supow_name' => 'required',
            // 'sales_pengaju' => 'required',
            // 'pic_sas' => 'required',
        ]);

        if ($this->customerId) {
            $customer = Customer::find($this->customerId);

            if ($customer) {
                $data = [
                    'customer_code' => $this->customer_code,
                    'customer_name' => $this->customer_name,
                    'customer_group' => $this->customer_group,
                    'customer_cabang' => $this->customer_cabang,
                    'customer_territory' => $this->customer_territory,
                    'customer_address' => $this->customer_address,
                    'customer_province' => $this->customer_province,
                    'customer_city' => $this->customer_city,
                    'customer_district' => $this->customer_district,
                    'customer_village' => $this->customer_village,
                    'customer_postal_code' => $this->customer_postal_code,
                    'customer_contact' => $this->customer_contact,
                    'customer_type' => $this->customer_type,
                    'customer_ktp_name' => $this->customer_ktp_name,
                    'customer_ktp_no' => $this->customer_ktp_no,
                    'customer_npwp_no' => $this->customer_npwp_no,
                    'customer_npwp_address' => $this->customer_npwp_address,
                    'customer_sppkp_address' => $this->customer_sppkp_address,
                    'customer_tax_address' => $this->customer_tax_address,
                    'customer_phone1' => $this->customer_phone1,
                    'customer_phone2' => $this->customer_phone2,
                    'customer_birthdate' => $this->customer_birthdate,
                    'sales_philips_name' => $this->sales_philips_name,
                    'sales_supow_name' => $this->sales_supow_name,
                    'sales_pengaju' => $this->sales_pengaju,
                    'pic_sas' => $this->pic_sas,
                    'updated_by' => auth()->user()->name,
                ];
            }
        }

        $ktp_image_name  = "";
        if (isset($this->customer_ktp_image)) {
            $this->validate([
                'customer_ktp_image' => 'image|max:10240'
            ]);
            Storage::disk('public')->delete('photos/' . $customer->customer_ktp_image);
            $ktp_image_name  = md5(date('Y-m-d') . rand()) . "_" . "ktp" . "." . $this->customer_ktp_image->extension();
            $this->customer_ktp_image->storeAs('photos/', $ktp_image_name);
            $data['customer_ktp_image'] = $ktp_image_name;
        }

        $npwp_image_name  = "";
        if (isset($this->customer_npwp_image)) {
            $this->validate([
                'customer_npwp_image' => 'image|max:10240'
            ]);
            Storage::disk('public')->delete('photos/' . $customer->customer_npwp_image);
            $npwp_image_name  = md5(date('Y-m-d') . rand()) . "_" . "npwp" . "." . $this->customer_npwp_image->extension();
            $this->customer_npwp_image->storeAs('photos/', $npwp_image_name);
            $data['customer_npwp_image'] = $npwp_image_name;
        }

        $sppkp_image_name  = "";
        if (isset($this->customer_sppkp_image)) {
            $this->validate([
                'customer_sppkp_image' => 'image|max:10240'
            ]);
            Storage::disk('public')->delete('photos/' . $customer->customer_sppkp_image);
            $sppkp_image_name  = md5(date('Y-m-d') . rand()) . "_" . "sppkp" . "." . $this->customer_sppkp_image->extension();
            $this->customer_sppkp_image->storeAs('photos/', $sppkp_image_name);
            $data['customer_sppkp_image'] = $sppkp_image_name;
        }

        $store1_image_name  = "";
        if (isset($this->customer_store1_image)) {
            $this->validate([
                'customer_store1_image' => 'image|max:10240'
            ]);
            Storage::disk('public')->delete('photos/' . $customer->customer_store1_image);
            $store1_image_name  = md5(date('Y-m-d') . rand()) . "_" . "store1" . "." . $this->customer_store1_image->extension();
            $this->customer_store1_image->storeAs('photos/', $store1_image_name);
            $data['customer_store1_image'] = $store1_image_name;
        }

        $store2_image_name  = "";
        if (isset($this->customer_store2_image)) {
            $this->validate([
                'customer_store2_image' => 'image|max:10240'
            ]);
            Storage::disk('public')->delete('photos/' . $customer->customer_store2_image);
            $store2_image_name  = md5(date('Y-m-d') . rand()) . "_" . "store2" . "." . $this->customer_store2_image->extension();
            $this->customer_store2_image->storeAs('photos/', $store2_image_name);
            $data['customer_store2_image'] = $store2_image_name;
        }

        $customer->update($data);

        session()->flash('message', 'Data Berhasil Di Update');

        return redirect()->route('data.customers.listcustomers');
    }

    public function render()
    {
        $customers = Customer::find($this->customerId);
        $employees = Employee::get();
        return view('livewire.data.customers.edit', compact('customers', 'employees'));
    }
}
