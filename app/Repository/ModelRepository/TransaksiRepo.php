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
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class TransaksiRepo extends BaseRepo
{
    public function __construct(Transaksi $transaksi)
    {
        $this->model = $transaksi;
    }

    public function create($input, $rules) {
        $validate    = Validator::make($input, $rules);

        if ($validate->fails()) {
            return $this->data_return = [
                'status'    => parent::$FAILED_STATUS,
                'message'   => parent::$FAILED_VALIDATE_MESSAGE
            ];
        }

        $input['created_at']    = Carbon::now()->toDateTimeString();
        $input['updated_at']    = Carbon::now()->toDateTimeString();

        unset($input['_token']);

        $action     = new Transaksi();
        $action->customer_id            = $input['customer_id'];
        $action->total                  = $input['total'];
        $action->status_pembayaran      = $input['status_pembayaran'];
        $action->kode_pembayaran        = $input['kode_pembayaran'];
        $action->status_pengiriman      = $input['status_pengiriman'];
        $action->status_kedatangan      = $input['status_kedatangan'];
        $action->status_transaksi       = $input['status_transaksi'];
        $action->tanggal_transaksi      = $input['tanggal_transaksi'];
        $action->deskripsi_pemesanan    = $input['deskripsi_pemesanan'];
        $action->save();

        if ($action) {
            $this->data_return = [
                'data'      => $action,
                'status'    => parent::$SUCCESS_STATUS,
                'message'   => parent::$SUCCESS_SAVING_MESSAGE
            ];
        } else {
            $this->data_return = [
                'status'    => parent::$FAILED_STATUS,
                'message'   => parent::$FAILED_SAVING_MESSAGE
            ];
        }

        return $this->data_return;
    }
}