<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toko', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('siup')->nullable();
            $table->string('npwp')->nullable();
            $table->string('no_rek')->nullable();
            $table->timestamps();
        });

        Schema::create('produk', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('toko_id')->foreign('toko_id')->references('id')
                ->on('toko')->onDelete('cascade');
            $table->string('nama');
            $table->integer('stock');
            $table->double('harga');
            $table->text('deskripsi');
            $table->timestamps();
        });

        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('toko_id')->foreign('toko_id')->references('id')
                ->on('toko')->onDelete('cascade');
            $table->string('nama');
            $table->text('tempat');
            $table->date('tanggal');
            $table->text('keterangan');
            $table->timestamps();
        });

        Schema::create('cart', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->foreign('users_id')->references('id')
                ->on('users')->onDelete('cascade');
            $table->integer('produk_id')->foreign('produk_id')->references('id')
                ->on('produk')->onDelete('cascade');
            $table->integer('qty');
            $table->timestamps();
        });

        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->foreign('customer_id')->references('id')
                ->on('customer')->onDelete('cascade');
            $table->double('total');
            $table->integer('status_pembayaran');
            $table->string('kode_pembayaran');
            $table->integer('status_pengiriman');
            $table->integer('status_kedatangan');
            $table->timestamps();
        });

        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->integer('transaksi_id')->foreign('transaksi_id')->references('id')
                ->on('transaksi')->onDelete('cascade');
            $table->integer('produk_id')->foreign('produk_id')->references('id')
                ->on('produk')->onDelete('cascade');
            $table->integer('qty');
            $table->double('subtotal');
            $table->timestamps();
        });

        Schema::create('metode_payment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('metode');
            $table->timestamps();
        });

        Schema::create('payment_transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaksi_id')->foreign('transaksi_id')->references('id')
                ->on('transaksi')->onDelete('cascade');
            $table->integer('metode_payment_id')->foreign('metode_payment_id')->references('id')
                ->on('metode_payment')->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toko');
        Schema::dropIfExists('produk');
        Schema::dropIfExists('events');
        Schema::dropIfExists('cart');
        Schema::dropIfExists('transaksi');
        Schema::dropIfExists('detail_transaksi');
        Schema::dropIfExists('metode_payment');
        Schema::dropIfExists('payment_transaksi');
    }
}
