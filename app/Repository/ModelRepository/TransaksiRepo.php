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
use App\Model\Transaksi\DetailPengirimanTransaksi;
use App\Model\Transaksi\DetailTransaksi;
use App\Model\Transaksi\Transaksi;
use App\Repository\BaseRepo;

class TransaksiRepo extends BaseRepo
{
    public function __construct(Transaksi $transaksi)
    {
        $this->model = $transaksi;
    }
}