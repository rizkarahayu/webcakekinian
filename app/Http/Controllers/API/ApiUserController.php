<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiUserController extends Controller
{
    public function getById(Request $request, $id) {
        $user   = app('users')->getWithbyId(['role_users'], $id);
        return $this->responseJson($user);
    }
}
