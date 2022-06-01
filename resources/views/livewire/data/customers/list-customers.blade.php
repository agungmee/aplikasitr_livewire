@section('title', 'TR APP | List Customers')

<div>
    <div class="container-fluid mb-5" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-3 sticky-top">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5> <i class="fa fa-list-ul"></i> MAIN MENU</h5>
                        <hr>
                        <ul class="list-group">
                            <a href="/admin/dashboard"><li class="list-group-item"><i class="fa-solid fa-gauge"></i></i> DASHBOARD</li></a>
                            <a href="/admin/customerlist"><li class="list-group-item"><i class="fa-solid fa-users"></i> CUSTOMERS</li></a>
                            <a href="/admin/userlist"><li class="list-group-item"><i class="fa-solid fa-user-check"></i> USERS</li></a>
                            <livewire:admin.logout/>
                          </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5> <i class="fa-solid fa-users"></i> CUSTOMERS</h5>
                        <hr>
                        <div>
                            <div class="d-flex justify-content-between" style="white-space: nowrap">
                                
                                <div>
                                <a href="/admin/createcustomer" class="btn btn-md btn-success mb-3">TAMBAH CUSTOMER</a>
                                </div>

                                <div>
                                <input class="form-control mb-3" type="text" wire:model="search" placeholder="Search" aria-label="search">
                                </div>
                            
                            </div>
                            <div class="table-responsive">
                            <table class="table table-bordered" style="white-space: nowrap">
                                <thead class="thead-dark" style="text-align: center">
                                    <tr>
                                        <th class="" scope="col">KODE</th>
                                        <th class="" scope="col">NAMA CUSTOMER</th>
                                        <th scope="col">GRUP CUSTOMER</th>
                                        <th scope="col">ID CUSTOMER</th>
                                        <th scope="col">PASSWORD</th>
                                        <th scope="col">CABANG</th>
                                        <th scope="col">TERITORI</th>
                                        <th scope="col">ALAMAT</th>
                                        <th scope="col">PROVINSI</th>
                                        <th scope="col">KOTA</th>
                                        <th scope="col">KECAMATAN</th>
                                        <th scope="col">KELURAHAN/DESA</th>
                                        <th scope="col">KODE POS</th>
                                        <th scope="col">KONTAK</th>
                                        <th scope="col">TIPE</th>
                                        <th scope="col">LONGITUDE</th>
                                        <th scope="col">LATITUDE</th>
                                        <th scope="col">NAMA KTP</th>
                                        <th scope="col">NO KTP</th>
                                        <th scope="col">NO NPWP</th>
                                        <th scope="col">ALAMAT NPWP</th>
                                        <th scope="col">ALAMAT SPPKP</th>
                                        <th scope="col">ALAMAT PAJAK</th>
                                        <th scope="col">NO HP1</th>
                                        <th scope="col">NO HP2</th>
                                        <th scope="col">ULANG TAHUN</th>
                                        <th scope="col">SALES PHILIPS</th>
                                        <th scope="col">SALES SUPOW</th>
                                        <th scope="col">YANG MENGAJUKAN</th>
                                        <th scope="col">PIC SAS</th>
                                        <th scope="col">FOTO KTP</th>
                                        <th scope="col">FOTO NPWP</th>
                                        <th scope="col">FOTO SPPKP</th>
                                        <th scope="col">FOTO TOKO1</th>
                                        <th scope="col">FOTO TOKO2</th>
                                        <th scope="col">CUSTOMER CEK</th>
                                        <th scope="col">ADMIN CEK</th>
                                        <th scope="col">WAKTU CUSTOMER CEK</th>
                                        <th scope="col">WAKTU ADMIN CEK</th>
                                        <th scope="col">DIBUAT OLEH</th>
                                        <th scope="col">WAKTU DIBUAT</th>
                                        <th scope="col">DIUPDATE OLEH</th>
                                        <th scope="col">WAKTU DIUPDATE</th>
                                        <th class="td-fixed" scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->customer_code }}</td>
                                        <td>{{ $customer->customer_name }}</td>
                                        <td>{{ $customer->customer_group }}</td>
                                        <td style="background-color:antiquewhite">{{ $customer->customer_userid }}</td>
                                        <td style="background-color:antiquewhite">{{ $customer->customer_password }}</td>
                                        <td>{{ $customer->customer_cabang }}</td>
                                        <td>{{ $customer->customer_territory }}</td>
                                        <td>{{ $customer->customer_address }}</td>
                                        <td>{{ $customer->customer_province }}</td>
                                        <td>{{ $customer->customer_city }}</td>
                                        <td>{{ $customer->customer_district }}</td>
                                        <td>{{ $customer->customer_village }}</td>
                                        <td>{{ $customer->customer_postal_code }}</td>
                                        <td>{{ $customer->customer_contact }}</td>
                                        <td>{{ $customer->customer_type }}</td>
                                        <td>{{ $customer->customer_long }}</td>
                                        <td>{{ $customer->customer_lat }}</td>
                                        <td>{{ $customer->customer_ktp_name }}</td>
                                        <td>{{ $customer->customer_ktp_no }}</td>
                                        <td>{{ $customer->customer_npwp_no }}</td>
                                        <td>{{ $customer->customer_npwp_address }}</td>
                                        <td>{{ $customer->customer_sppkp_address }}</td>
                                        <td>{{ $customer->customer_tax_address }}</td>
                                        <td>{{ $customer->customer_phone1 }}</td>
                                        <td>{{ $customer->customer_phone2 }}</td>
                                        <td>{{ $customer->customer_birthdate }}</td>
                                        <td>{{ $customer->sales_philips_name }}</td>
                                        <td>{{ $customer->sales_supow_name }}</td>
                                        <td>{{ $customer->sales_pengaju }}</td>
                                        <td>{{ $customer->pic_sas }}</td>
                                        <td>
                                            <img width="100px" height="70" src=" /storage/photos/{{ $customer->customer_ktp_image}} " alt="" srcset="">
                                        </td>
                                        <td>
                                            <img width="100px" height="70" src=" /storage/photos/{{$customer->customer_npwp_image}} " alt="" srcset="">
                                        </td>
                                        <td>
                                            <img width="100px" height="70" src=" /storage/photos/{{$customer->customer_sppkp_image}} " alt="" srcset="">
                                        </td>
                                        <td>
                                            <img width="100px" height="70" src=" /storage/photos/{{$customer->customer_store1_image}} " alt="" srcset="">
                                        </td>
                                        <td>
                                            <img width="100px" height="70" src=" /storage/photos/{{$customer->customer_store2_image}} " alt="" srcset="">
                                        </td>
                                        <td>{{ $customer->customer_check }}</td>
                                        <td>{{ $customer->admin_check }}</td>
                                        <td>{{ $customer->update_time_customer }}</td>
                                        <td>{{ $customer->update_time_admin }}</td>
                                        <td>{{ $customer->created_by }}</td>
                                        <td>{{ $customer->created_at }}</td>
                                        <td>{{ $customer->updated_by }}</td>
                                        <td>{{ $customer->updated_at }}</td>
                                        <td class="text-center td-fixed">
                                            <a href=" {{route('data.customers.editcustomer', $customer->id)}} " class="btn btn-sm btn-primary">EDIT</a>
                                            <a href=" {{route('customer.login', $customer->id)}} " class="btn btn-sm btn-success">CONFIRM</a>
                                            <button type="button" onclick="confirm('Are you sure you want to remove the user from this group?') || event.stopImmediatePropagation()" wire:click="destroy('{{$customer->id}}')" class="btn btn-sm btn-danger">DELETE</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                            {{ $customers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>