<?php

namespace App\Http\Livewire\Data\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ListUsers extends Component
{   
    use WithPagination;

    public function render()
    {
        return view('livewire.data.users.list-users', [
            'users' => User::latest()->paginate(10)
        ]);
    }
}
