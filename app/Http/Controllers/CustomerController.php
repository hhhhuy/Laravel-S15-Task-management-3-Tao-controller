<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showListCustomer()
    {
        return view('modules.customer.index');
    }

    public function createCustomer()
    {
        return view('modules.customer.createCustomer');
    }

    public function showCustomer()
    {
        return view('modules.customer.showCustomer');
    }

    public function editCustomer()
    {
        return view('modules.customer.editCustomer');
    }

    public function deleteCustomer()
    {
        return view('modules.customer.deleteCustomer');
    }
}
