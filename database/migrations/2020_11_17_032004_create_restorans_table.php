<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestoransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restorans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lokasi');          
            $table->string('tgl_pendataan');
            $table->string('nama_pemilik');
            $table->integer('no_ktp');
            $table->integer('no_npwp');
            $table->string('alamat_pemilik');
            $table->string('bidang_pajak');
            $table->string('nama_usaha');
            $table->string('alamat_usaha');
            $table->integer('no_npwpd');
            $table->string('file');
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
        Schema::dropIfExists('restorans');
    }
}
