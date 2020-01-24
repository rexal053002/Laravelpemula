<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Toko extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokoSeeder', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nama_barang');
            $table->string('jenis_barang');
            $table->integer('jumlah_barang');
            $table->integer('harga_barang');
            $table->text('alamat');
            $table->date('tgl_beli');
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
        Schema::dropIfExists('tokoSeeder');
    }
}
