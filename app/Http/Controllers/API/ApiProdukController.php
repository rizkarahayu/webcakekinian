<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiProdukController extends Controller
{
    public function getById(Request $request, $id) {
        $produk  = app('produk')->getWithbyId(['toko'], $id);
        return $this->responseJson($produk);
    }
}
