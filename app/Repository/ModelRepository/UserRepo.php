<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29/12/17
 * Time: 22:44
 */

namespace App\Repository\ModelRepository;

use App\Repository\BaseRepo;
use App\User;

class UserRepo extends BaseRepo
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }
}