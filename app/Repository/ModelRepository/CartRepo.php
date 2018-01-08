<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/12/17
 * Time: 12:55
 */

namespace App\Repository\ModelRepository;

use App\Model\Master\Produk;
use App\Model\Master\RoleUsers;
use App\Model\Transaksi\Cart;
use App\Repository\BaseRepo;

class CartRepo extends BaseRepo
{
    public function __construct(Cart $cart)
    {
        $this->model = $cart;
    }

    public function isExists($users_id, $produk_id) {
        $cart   = $this->model
            ->where('users_id', $users_id)
            ->where('produk_id', $produk_id)
            ->first();

        if (!$cart)
            return false;

        return $cart;
    }
}