<?php

namespace App\Providers;

use App\Model\Master\Customer;
use App\Model\Master\Event;
use App\Model\Master\Produk;
use App\Model\Master\RoleUsers;
use App\Model\Master\Toko;
use App\Model\Transaksi\Cart;
use App\Model\Transaksi\DetailPengirimanTransaksi;
use App\Model\Transaksi\DetailTransaksi;
use App\Model\Transaksi\PaymentMethod;
use App\Model\Transaksi\PaymentTransaksi;
use App\Model\Transaksi\Transaksi;
use App\Repository\ModelRepository\CartRepo;
use App\Repository\ModelRepository\CustomerRepo;
use App\Repository\ModelRepository\DetailPengirimanTransaksiRepo;
use App\Repository\ModelRepository\DetailTransaksiRepo;
use App\Repository\ModelRepository\EventRepo;
use App\Repository\ModelRepository\PaymentMethodRepo;
use App\Repository\ModelRepository\PaymentTransaksiRepo;
use App\Repository\ModelRepository\ProdukRepo;
use App\Repository\ModelRepository\RoleUserRepo;
use App\Repository\ModelRepository\TokoRepo;
use App\Repository\ModelRepository\TransaksiRepo;
use App\Repository\ModelRepository\UserRepo;
use App\User;
use Illuminate\Support\ServiceProvider;

class BaseRepoProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('user', function () {
            return new UserRepo(new User());
        });

        $this->app->bind('role_user', function () {
            return new RoleUserRepo(new RoleUsers());
        });

        $this->app->bind('customer', function () {
            return new CustomerRepo(new Customer());
        });

        $this->app->bind('toko', function () {
            return new TokoRepo(new Toko());
        });

        $this->app->bind('produk', function () {
            return new ProdukRepo(new Produk());
        });

        $this->app->bind('event', function () {
            return new EventRepo(new Event());
        });

        $this->app->bind('cart', function () {
            return new CartRepo(new Cart());
        });

        $this->app->bind('transaksi', function () {
            return new TransaksiRepo(new Transaksi());
        });

        $this->app->bind('detail_transaksi', function () {
            return new DetailTransaksiRepo(new DetailTransaksi());
        });

        $this->app->bind('detail_pengiriman_transaksi', function () {
            return new DetailPengirimanTransaksiRepo(new DetailPengirimanTransaksi());
        });

        $this->app->bind('payment_transaksi', function () {
            return new PaymentTransaksiRepo(new PaymentTransaksi());
        });

        $this->app->bind('payment_method', function () {
            return new PaymentMethodRepo(new PaymentMethod());
        });


    }
}
