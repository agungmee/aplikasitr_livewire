<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    if(Auth::check()) {
        return redirect()->route('admin.dashboard');
    }else {
        return redirect()->route('auth.login');
    }
});

//Login Customer
Route::livewire('/customer/login/{id}', 'customer.login')->layout('layouts.app')->name('customer.login');

//Confirm Customer
Route::livewire('/customer/confirm/{id}', 'customer.confirm')->layout('layouts.app')->name('customer.confirm');


Route::group(['middleware' => 'guest'], function(){

    //Login
    Route::livewire('/login', 'auth.login')->layout('layouts.app')->name('auth.login');    

});

Route::group(['middleware' => 'auth'], function(){

    //Proses Register
    Route::livewire('/register', 'auth.register')->layout('layouts.app')->name('auth.register');

    //Dashboard
    Route::livewire('/admin/dashboard', 'admin.dashboard')->layout('layouts.app')->name('admin.dashboard');

    //List User
    Route::livewire('/admin/userlist', 'data.users.list-users')->name('data.users.listusers');

    //List Customer
    Route::livewire('/admin/customerlist', 'data.customers.list-customers')->name('data.customers.listcustomers');

    //Create Customer
    Route::livewire('/admin/createcustomer', 'data.customers.create')->name('data.customers.createcustomer');

    //Edit Customer
    Route::livewire('/admin/editcustomer/{id}', 'data.customers.edit')->name('data.customers.editcustomer');

});