<?php

namespace App\Http\Livewire\Data\Customers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Employee;
use Livewire\Component;
use Livewire\WithFileUploads;

date_default_timezone_set('Asia/Jakarta');

class Create extends Component
{

    use WithFileUploads;

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
    public $created_by;
    public $updated_by;

    public function store(Request $request)
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

        $userid = date('dmY_his');



        $ktp_image_name  = "";
        if ($foto_ktp = $request->file('customer_ktp_image')) {
            $request->validate([
                'customer_ktp_image' => 'image|max:10240'
            ]);
            $ktp_image_name  = md5(date('Y-m-d') . rand()) . "_" . "ktp" . "." . $this->customer_ktp_image->extension();
            $this->customer_ktp_image->storeAs('photos/', $ktp_image_name);
        }

        $npwp_image_name  = "";
        if (isset($this->customer_npwp_image)) {
            $this->validate([
                'customer_npwp_image' => 'image|max:10240'
            ]);
            $npwp_image_name  = md5(date('Y-m-d') . rand()) . "_" . "npwp" . "." . $this->customer_npwp_image->extension();
            $this->customer_npwp_image->storeAs('photos/', $npwp_image_name);
        }

        $sppkp_image_name  = "";
        if (isset($this->customer_sppkp_image)) {
            $this->validate([
                'customer_sppkp_image' => 'image|max:10240'
            ]);
            $sppkp_image_name  = md5(date('Y-m-d') . rand()) . "_" . "sppkp" . "." . $this->customer_sppkp_image->extension();
            $this->customer_sppkp_image->storeAs('photos/', $sppkp_image_name);
        }

        $store1_image_name  = "";
        if (isset($this->customer_store1_image)) {
            $this->validate([
                'customer_store1_image' => 'image|max:10240'
            ]);
            $store1_image_name  = md5(date('Y-m-d') . rand()) . "_" . "store1" . "." . $this->customer_store1_image->extension();
            $this->customer_store1_image->storeAs('photos/', $store1_image_name);
        }

        $store2_image_name  = "";
        if (isset($this->customer_store2_image)) {
            $this->validate([
                'customer_store2_image' => 'image|max:10240'
            ]);
            $store2_image_name  = md5(date('Y-m-d') . rand()) . "_" . "store2" . "." . $this->customer_store2_image->extension();
            $this->customer_store2_image->storeAs('photos/', $store2_image_name);
        }

        $customer = Customer::create([
            'customer_code' => $this->customer_code,
            'customer_name' => $this->customer_name,
            'customer_group' => $this->customer_group,
            'customer_userid' => $userid,
            'customer_password' => rand(111111, 999999),
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
            'customer_ktp_image' => $ktp_image_name,
            'customer_npwp_image' => $npwp_image_name,
            'customer_sppkp_image' => $sppkp_image_name,
            'customer_store1_image' => $store1_image_name,
            'customer_store2_image' => $store2_image_name,
            'created_by' => auth()->user()->name,
        ]);

        session()->flash('message', 'Data Customer Berhasil Disimpan');

        return redirect()->route('data.customers.listcustomers');
    }

    public function render()
    {
        $employees = Employee::get();
        return view('livewire.data.customers.create', compact('employees'));
    }
}
