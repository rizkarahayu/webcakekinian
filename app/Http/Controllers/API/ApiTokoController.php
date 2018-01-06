<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiTokoController extends Controller
{
    public function getById(Request $request, $id) {
        $user   = app('toko')->getWithbyId(['produk', 'users'], $id);
        return $this->responseJson($user);
    }
}
