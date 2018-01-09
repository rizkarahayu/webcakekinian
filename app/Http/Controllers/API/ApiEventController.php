<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiEventController extends Controller
{
    public function getById(Request $request, $id) {
        $event  = app('event')->getWithbyId(['toko'], $id);
        return $this->responseJson($event);
    }
}
g