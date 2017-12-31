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
use App\Repository\BaseRepo;

class DetailPengirimanTransaksiRepo extends BaseRepo
{
    public function __construct(DetailPengirimanTransaksi $detailPengirimanTransaksi)
    {
        $this->model = $detailPengirimanTransaksi;
    }
}