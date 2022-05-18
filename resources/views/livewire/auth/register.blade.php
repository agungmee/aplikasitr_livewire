@section('title', 'TR APP | Register')


<div>
    <div class="container-fluid" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-3">
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
                        <h5> <i class="fa fa-user-plus"></i> REGISTER</h5>
                        <hr>
                        <div>
                            <div class="container mb-5" style="margin-top: 50px">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="card border-0 rounded shadow">
                                            <div class="card-body">
                                                <h5 class="text-center"> <i class="fa fa-user-plus"></i> REGISTER</h5>
                                                <hr>
                                                <form wire:submit.prevent="store">
                        
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">NAMA LENGKAP</label>
                                                                <input type="text" wire:model.lazy="name" class="form-control @error('name') is-invalid @enderror"
                                                                    placeholder="Nama lengkap">
                                                                @error('name')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">ALAMAT EMAIL</label>
                                                                <input type="text" wire:model.lazy="email" class="form-control @error('email') is-invalid @enderror"
                                                                    placeholder="Alamat Email">
                                                                @error('email')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                        
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">PASSWORD</label>
                                                                <input type="password" wire:model.lazy="password"
                                                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                                                @error('password')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="font-weight-bold">KONFIRMASI PASSWORD</label>
                                                                <input type="password" wire:model.lazy="password_confirmation"
                                                                    class="form-control" placeholder="Konfirmasi Password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <button type="submit" class="btn btn-primary btn-block">REGISTER</button>
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

