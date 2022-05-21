@section('title', 'TR APP | Confirm Data Customer')


<div>
    <div class="container-fluid" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-3" id="sticky-sidebar">
                <div class="sticky-top">
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
            </div>
            <div class="col-md-9">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5> <i class="fa fa-user-plus"></i> CONFIRM DATA CUSTOMER</h5>
                        <hr>
                        <div>
                            <div class="container mb-5" style="margin-top: 50px">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card border-0 rounded shadow">
                                            <div class="card-body">
                                                <h5 class="text-center"> <i class="fa fa-user-plus"></i> CONFIRM DATA CUSTOMER</h5>
                                                <hr>
                                                @csrf
                                                <form wire:submit.prevent="confirm" enctype="multipart/form-data">
                                                        <div>
                                                        <input type="hidden" wire:model="customerId">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">KODE</label>
                                                                <input type="text" wire:model="customer_code" class="form-control @error('customer_code') is-invalid @enderror"
                                                                    placeholder="Kode">
                                                                @error('customer_code')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">NAMA CUSTOMER</label>
                                                                <input type="text" wire:model="customer_name" class="form-control @error('name') is-invalid @enderror"
                                                                    placeholder="Nama Customer">
                                                                @error('name')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">CABANG</label>
                                                                <select wire:model="customer_cabang" class="form-control @error('customer_cabang') is-invalid @enderror">
                                                                    <option selected>-- Pilih Cabang --</option>
                                                                    <option value="Sunter">Sunter</option>
                                                                    <option value="Glodok">Glodok</option>
                                                                    <option value="Kenari">Kenari</option>
                                                                    <option value="Tebet">Tebet</option>
                                                                    <option value="Tangerang">Tangerang</option>
                                                                </select>
                                                                @error('customer_cabang')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">TERITORI</label>
                                                                <select wire:model="customer_territory" class="form-control @error('customer_cabang') is-invalid @enderror" id="">
                                                                    <option selected>-- Pilih Teritori --</option>
                                                                    <option value="Jakarta1">Jakarta1</option>
                                                                    <option value="Jakarta2">Jakarta2</option>
                                                                    <option value="Jakarta3">Jakarta3</option>
                                                                    <option value="Jakarta4">Jakarta4</option>
                                                                    <option value="Jakarta5">Jakarta5</option>
                                                                    <option value="Tangerang">Tangerang</option>
                                                                </select>
                                                                @error('customer_territory')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">ALAMAT</label>
                                                                <textarea wire:model="customer_address" class="form-control @error('customer_address') is-invalid @enderror"
                                                                    placeholder="ALAMAT" rows="3"></textarea>
                                                                @error('customer_address')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">PROVINSI</label>
                                                                <input type="text" wire:model="customer_province" class="form-control @error('customer_province') is-invalid @enderror"
                                                                    placeholder="Provinsi">
                                                                @error('customer_province')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">KOTA</label>
                                                                <input type="text" wire:model="customer_city" class="form-control @error('customer_city') is-invalid @enderror"
                                                                    placeholder="Kota">
                                                                @error('customer_city')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Kecamatan</label>
                                                                <input type="text" wire:model="customer_district" class="form-control @error('customer_district') is-invalid @enderror"
                                                                    placeholder="Kecamatan">
                                                                @error('customer_district')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Kelurahan/Desa</label>
                                                                <input type="text" wire:model="customer_village" class="form-control @error('customer_village') is-invalid @enderror"
                                                                    placeholder="Kelurahan/Desa">
                                                                @error('customer_village')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Kode POS</label>
                                                                <input type="text" wire:model="customer_postal_code" class="form-control @error('customer_postal_code') is-invalid @enderror"
                                                                    placeholder="Kode POS">
                                                                @error('customer_postal_code')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Kontak</label>
                                                                <input type="text" wire:model="customer_contact" class="form-control @error('customer_contact') is-invalid @enderror"
                                                                    placeholder="Kontak">
                                                                @error('customer_contact')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">TIPE CUSTOMER</label>
                                                                <select wire:model="customer_type" class="form-control @error('customer_type') is-invalid @enderror" id="">
                                                                    <option selected>-- Pilih Tipe Toko --</option>
                                                                    <option value="TL">TL</option>
                                                                    <option value="GL">GL</option>
                                                                    <option value="TB">TB</option>
                                                                    <option value="SMM">SMM</option>
                                                                    <option value="OTHERS">OTHERS</option>
                                                                </select>
                                                                @error('customer_type')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Nama di KTP</label>
                                                                <input type="text" wire:model="customer_ktp_name" class="form-control @error('customer_ktp_name') is-invalid @enderror"
                                                                    placeholder="Nama di KTP">
                                                                @error('customer_ktp_name')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">No KTP</label>
                                                                <input type="text" wire:model="customer_ktp_no" class="form-control @error('customer_ktp_no') is-invalid @enderror"
                                                                    placeholder="No KTP">
                                                                @error('customer_ktp_no')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">No NPWP</label>
                                                                <input type="text" wire:model="customer_npwp_no" class="form-control @error('customer_npwp_no') is-invalid @enderror"
                                                                    placeholder="No NPWP">
                                                                @error('customer_npwp_no')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Alamat NPWP</label>
                                                                <input type="text" wire:model="customer_npwp_address" class="form-control @error('customer_npwp_address') is-invalid @enderror"
                                                                    placeholder="Alamat NPWP">
                                                                @error('customer_npwp_address')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Alamat SPPKP</label>
                                                                <input type="text" wire:model="customer_sppkp_address" class="form-control @error('customer_sppkp_address') is-invalid @enderror"
                                                                    placeholder="Alamat SPPKP">
                                                                @error('customer_sppkp_address')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Alamat Pajak</label>
                                                                <select wire:model="customer_tax_address" class="form-control" id="" @error('customer_tax_address') is-invalid @enderror>
                                                                    <option selected>-- Pilih Alamat Pajak --</option>
                                                                    <option value="Sesuai NPWP">Sesuai NPWP</option>
                                                                    <option value="Sesuai KTP">Sesuai KTP</option>
                                                                </select>
                                                                @error('customer_tax_address')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">No Handphone 1</label>
                                                                <input type="text" wire:model="customer_phone1" class="form-control @error('customer_phone1') is-invalid @enderror"
                                                                    placeholder="No Handphone 1">
                                                                @error('customer_phone1')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">No Handphone 2</label>
                                                                <input type="text" wire:model="customer_phone2" class="form-control @error('customer_phone2') is-invalid @enderror"
                                                                    placeholder="No Handphone 1">
                                                                @error('customer_phone2')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Tanggal Lahir</label>
                                                                <input type="date" wire:model="customer_birthdate" class="form-control @error('customer_birthdate') is-invalid @enderror"
                                                                    placeholder="Tanggal Lahir">
                                                                @error('customer_birthdate')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Sales Philips</label>
                                                                <select wire:model="sales_philips_name" class="form-control @error('sales_philips_name') is-invalid @enderror">
                                                                    <option selected>-- Pilih Nama Sales Philips --</option>
                                                                    <option value="Imam Sudadi">Imam Sudadi</option>
                                                                    <option value="Slamet Widiono">Slamet Widiono</option>
                                                                </select>
                                                                @error('sales_philips_name')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Sales Supow</label>
                                                                <select wire:model="sales_supow_name" class="form-control @error('sales_supow_name') is-invalid @enderror">
                                                                    <option selected>-- Pilih Sales Supow --</option>
                                                                    <option value="Imam Sudadi">Imam Sudadi</option>
                                                                    <option value="Slamet Widiono">Slamet Widiono</option>
                                                                </select>
                                                                @error('sales_supow_name')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Sales Pengaju</label>
                                                                <select wire:model="sales_pengaju" class="form-control @error('sales_pengaju') is-invalid @enderror">
                                                                    <option selected>-- Pilih Sales Pengaju --</option>
                                                                    <option value="Imam Sudadi">Imam Sudadi</option>
                                                                    <option value="Slamet Widiono">Slamet Widiono</option>
                                                                </select>
                                                                @error('sales_pengaju')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">DA PIC</label>
                                                                <select wire:model="pic_sas" class="form-control @error('pic_sas') is-invalid @enderror">
                                                                    <option selected>-- Pilih DA PIC --</option>
                                                                    <option value="Imam Sudadi">Imam Sudadi</option>
                                                                    <option value="Slamet Widiono">Slamet Widiono</option>
                                                                </select>
                                                                @error('pic_sas')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                                                                                
                                                        <div class="form-inline">
                                                            <div class="col-md-12">
                                                                <label class="font-weight-bold">Foto KTP</label>
                                                                <div class="form-group">
                                                                    
                                                                    <img width="100px" height="70" src=" /storage/photos/{{$customers->customer_ktp_image}} " alt="" srcset="">
                                                                    
                                                                    <div class="input-group mb-3 ml-5">
                                                                        <input name="customer_ktp_image" type="file" wire:model="customer_ktp_image" class="form-control" id="inputGroupFile02"">
                                                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                                    </div>                                                                  
                                                                    @error('customer_ktp_image')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="form-inline">
                                                            <div class="col-md-12">
                                                                <label class="font-weight-bold">Foto NPWP</label>
                                                                <div class="form-group">

                                                                    <img width="100px" height="70" src=" /storage/photos/{{$customers->customer_npwp_image}} " alt="" srcset="">
                                                                    
                                                                    <div class="input-group mb-3 ml-5">
                                                                        <input name="customer_npwp_image" type="file" wire:model="customer_npwp_image" class="form-control" id="inputGroupFile02">
                                                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                                    </div>                                                                  
                                                                    @error('customer_npwp_image')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-inline">
                                                            <div class="col-md-12">
                                                                <label class="font-weight-bold">Foto SPPKP</label>
                                                                <div class="form-group">
                                                                    
                                                                    <img width="100px" height="70" src=" /storage/photos/{{$customers->customer_sppkp_image}} " alt="" srcset="">
                                                                    
                                                                    <div class="input-group mb-3 ml-5">
                                                                        <input type="file" wire:model="customer_sppkp_image" class="form-control" id="inputGroupFile02">
                                                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                                    </div>                                                                  
                                                                    @error('customer_sppkp_image')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-inline">
                                                            <div class="col-md-12">
                                                                <label class="font-weight-bold">Foto STORE1</label>
                                                                <div class="form-group">
                                                                    
                                                                    <img width="100px" height="70" src=" /storage/photos/{{$customers->customer_store1_image}} " alt="" srcset="">
                                                                    
                                                                    <div class="input-group mb-3 ml-5">
                                                                        <input type="file" wire:model="customer_store1_image" class="form-control" id="inputGroupFile02">
                                                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                                    </div>                                                                  
                                                                    @error('customer_store1_image')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-inline mb-4">
                                                            <div class="col-md-12">
                                                                <label class="font-weight-bold">Foto STORE2</label>
                                                                <div class="form-group">
                                                                    
                                                                    <img width="100px" height="70" src=" /storage/photos/{{$customers->customer_store2_image}} " alt="" srcset="">
                                                                    
                                                                    <div class="input-group mb-3 ml-5">
                                                                        <input type="file" wire:model="customer_store2_image" class="form-control" id="inputGroupFile02">
                                                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                                    </div>                                                                  
                                                                    @error('customer_store2_image')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                        <button type="submit" class="btn btn-primary btn-block">CONFIRM DATA</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

