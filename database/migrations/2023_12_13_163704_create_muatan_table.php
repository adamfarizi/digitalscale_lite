<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muatan', function (Blueprint $table) {
            $table->id('id_muatan');
            $table->enum('jenis_muatan',['Batu Bara','Biji Besi','Biji Emas'])->nullable();
            $table->integer('berat_muatan')->nullable();
            $table->integer('beban_seluruh')->nullable();
            $table->enum('verifikasi_1',['belum','sudah'])->default('belum');
            $table->enum('verifikasi_2',['belum','sudah'])->default('belum');
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
        Schema::dropIfExists('muatan');
    }
};
