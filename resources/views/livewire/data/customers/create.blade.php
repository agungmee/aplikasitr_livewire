@section('title', 'TR APP | Add Customer')


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
                        <h5> <i class="fa fa-user-plus"></i> ADD CUSTOMER</h5>
                        <hr>
                        <div>
                            <div class="container mb-5" style="margin-top: 50px">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card border-0 rounded shadow">
                                            <div class="card-body">
                                                <h5 class="text-center"> <i class="fa fa-user-plus"></i> ADD CUSTOMER</h5>
                                                <hr>
                                                @csrf
                                                <form wire:submit.prevent="store">
                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">KODE</label>
                                                                <input type="text" wire:model.lazy="customer_code" class="form-control @error('code') is-invalid @enderror"
                                                                    placeholder="Kode">
                                                                @error('code')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">NAMA CUSTOMER</label>
                                                                <input type="text" wire:model.lazy="customer_name" class="form-control @error('name') is-invalid @enderror"
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
                                                                <select wire:model.lazy="customer_cabang" class="form-control @error('customer_cabang') is-invalid @enderror">
                                                                    <option selected>-- Pilih Cabang --</option>
                                                                    <option value="Sunter">Sunter</option>
                                                                    <option value="Sunter">Glodok</option>
                                                                    <option value="Sunter">Kenari</option>
                                                                    <option value="Sunter">Tebet</option>
                                                                    <option value="Sunter">Tangerang</option>
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
                                                                <select wire:model.lazy="customer_territory" class="form-control @error('customer_cabang') is-invalid @enderror" id="">
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
                                                                <textarea wire:model.lazy="customer_address" class="form-control @error('customer_address') is-invalid @enderror"
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
                                                                <input type="text" wire:model.lazy="customer_province" class="form-control @error('customer_province') is-invalid @enderror"
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
                                                                <input type="text" wire:model.lazy="customer_city" class="form-control @error('customer_city') is-invalid @enderror"
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
                                                                <input type="text" wire:model.lazy="customer_district" class="form-control @error('customer_district') is-invalid @enderror"
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
                                                                <input type="text" wire:model.lazy="customer_village" class="form-control @error('customer_village') is-invalid @enderror"
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
                                                                <input type="text" wire:model.lazy="customer_postal_code" class="form-control @error('customer_postal_code') is-invalid @enderror"
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
                                                                <input type="text" wire:model.lazy="customer_contact" class="form-control @error('customer_contact') is-invalid @enderror"
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
                                                                <select wire:model.lazy="customer_type" class="form-control @error('customer_type') is-invalid @enderror" id="">
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
                                                                <label class="font-weight-bold">Longitude</label>
                                                                <input type="text" class="form-control" placeholder="Longitude" disabled>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Latitude</label>
                                                                <input type="text" class="form-control" placeholder="Latitude" disabled>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Nama di KTP</label>
                                                                <input type="text" wire:model.lazy="customer_ktp_name" class="form-control @error('customer_ktp_name') is-invalid @enderror"
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
                                                                <input type="text" wire:model.lazy="customer_ktp_no" class="form-control @error('customer_ktp_no') is-invalid @enderror"
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
                                                                <input type="text" wire:model.lazy="customer_npwp_no" class="form-control @error('customer_npwp_no') is-invalid @enderror"
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
                                                                <input type="text" wire:model.lazy="customer_npwp_address" class="form-control @error('customer_npwp_address') is-invalid @enderror"
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
                                                                <input type="text" wire:model.lazy="customer_sppkp_address" class="form-control @error('customer_sppkp_address') is-invalid @enderror"
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
                                                                <select wire:model.lazy="customer_tax_address" class="form-control" id="" @error('customer_tax_address') is-invalid @enderror>
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
                                                                <input type="text" wire:model.lazy="customer_phone1" class="form-control @error('customer_phone1') is-invalid @enderror"
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
                                                                <input type="text" wire:model.lazy="customer_phone2" class="form-control @error('customer_phone2') is-invalid @enderror"
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
                                                                <input type="date" wire:model.lazy="customer_birthdate" class="form-control @error('customer_birthdate') is-invalid @enderror"
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
                                                                <select wire:model.lazy="sales_philips_name" class="form-control" id="" @error('sales_philips_name') is-invalid @enderror>
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
                                                                <select wire:model.lazy="sales_supow_name" class="form-control" id="" @error('sales_supow_name') is-invalid @enderror>
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
                                                                <select wire:model.lazy="sales_pengaju" class="form-control" id="" @error('sales_pengaju') is-invalid @enderror>
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
                                                                <select wire:model.lazy="pic_sas" class="form-control" id="" @error('pic_sas') is-invalid @enderror>
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
                                                         
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Foto KTP</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="">Upload</span>
                                                                        </div>
                                                                        <div class="custom-file">
                                                                        <input wire:model.lazy="customer_ktp_image" type="file" class="custom-file-input" id="" aria-describedby="" @error('customer_ktp_image') is-invalid @enderror>
                                                                        <label class="custom-file-label" for="">Pilih File</label>
                                                                        </div>
                                                                    </div>
                                                                @error('customer_ktp_image')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Foto NPWP</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="">Upload</span>
                                                                        </div>
                                                                        <div class="custom-file">
                                                                        <input wire:model.lazy="customer_npwp_image" type="file" class="custom-file-input" id="" aria-describedby="" @error('customer_npwp_image') is-invalid @enderror>
                                                                        <label class="custom-file-label" for="">Pilih File</label>
                                                                        </div>
                                                                    </div>
                                                                @error('customer_npwp_image')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Foto SPPKP</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="">Upload</span>
                                                                        </div>
                                                                        <div class="custom-file">
                                                                        <input wire:model.lazy="customer_sppkp_image" type="file" class="custom-file-input" id="" aria-describedby="" @error('customer_sppkp_image') is-invalid @enderror>
                                                                        <label class="custom-file-label" for="">Pilih File</label>
                                                                        </div>
                                                                    </div>
                                                                @error('customer_sppkp_image')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Foto Toko1</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="">Upload</span>
                                                                        </div>
                                                                        <div class="custom-file">
                                                                        <input wire:model.lazy="customer_store1_image" type="file" class="custom-file-input" id="" aria-describedby="" @error('customer_store1_image') is-invalid @enderror>
                                                                        <label class="custom-file-label" for="">Pilih File</label>
                                                                        </div>
                                                                    </div>
                                                                @error('customer_store1_image')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">Foto Toko2</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="">Upload</span>
                                                                        </div>
                                                                        <div class="custom-file">
                                                                        <input wire:model.lazy="customer_store2_image" type="file" class="custom-file-input" id="" aria-describedby="" @error('customer_store2_image') is-invalid @enderror>
                                                                        <label class="custom-file-label" for="">Pilih File</label>
                                                                        </div>
                                                                    </div>
                                                                @error('customer_store2_image')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    
                                                    <button type="submit" class="btn btn-primary btn-block">ADD CUSTOMER</button>
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

