<?php

namespace App\Http\Controllers\Admin\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Master\Customer;

class CustomerController extends Controller
{
    public function index(){
        $customers= Customer::all();
        return view('admin.customer.customer', compact('customers'));
    }

    public function edit(){
        return view('admin.customer.customer_edit');
    }

    public function changeStatus(Request $request, $status, $id){
        $customer   = app('customer')->changeStatus($status, $id);
        return $customer;
    }
}
