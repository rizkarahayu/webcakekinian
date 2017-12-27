<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetailPengiriman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pengiriman_transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaksi_id')->foreign('transaksi_id')->references('id')
                ->on('transaksi')->onDelete('cascade');
            $table->string('nama_pembeli');
            $table->string('no_telp');
            $table->text('alamat');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('kode_pos');
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
        Schema::dropIfExists('detail_pengiriman_transaksi');
    }
}
