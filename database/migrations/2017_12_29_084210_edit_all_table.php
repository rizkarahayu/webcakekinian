<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customer', function (Blueprint $table) {
            $table->string('nama_bank');
        });

        Schema::table('toko', function (Blueprint $table) {
            $table->string('kota');
        });

        Schema::table('produk', function (Blueprint $table) {
            $table->string('gambar');
        });

        Schema::table('events', function (Blueprint $table) {
            $table->string('gambar');
            $table->renameColumn('tanggal', 'tanggal_mulai');
            $table->renameColumn('keterangan', 'deskripsi');
            $table->date('tanggal_selesai');
            $table->dropColumn('tempat');
        });


        Schema::table('transaksi', function (Blueprint $table) {
            $table->date('tanggal_transaksi');
            $table->string('deskripsi_pemesanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
