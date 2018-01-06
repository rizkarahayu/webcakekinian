<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiCustomerController extends Controller
{
    public function getById(Request $request, $id) {
        $customer  = app('customer')->getWithbyId(['users'], $id);
        if ($customer['jklm'] == 'L')
            $customer['jklm'] = 'Laki laki';
        else
            $customer['jklm'] = 'Perempuan';

        return $this->responseJson($customer);
    }
}
