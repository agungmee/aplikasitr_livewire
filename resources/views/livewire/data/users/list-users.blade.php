@section('title', 'TR APP | List Users')


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
                        <h5> <i class="fa-solid fa-user-check"></i> USERS</h5>
                        <hr>
                        <div>
                            <a href="/register" class="btn btn-md btn-success mb-3">TAMBAH USER</a>
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">NAMA</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">CREATED_AT</th>
                                        <th scope="col">UPDATED_AT</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->updated_at }}</td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-sm btn-primary">EDIT</a>
                                            <button class="btn btn-sm btn-danger">DELETE</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

