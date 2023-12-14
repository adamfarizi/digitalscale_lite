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
        Schema::create('truck', function (Blueprint $table) {
            $table->id('id_truck');
            $table->string('plat_nomor');
            $table->string('jenis_truck');
            $table->integer('beban_kosong');
            $table->integer('beban_max');
            $table->unsignedBigInteger('id_muatan');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            $table->foreign('id_muatan')->references('id_muatan')->on('muatan');
            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('truck');
    }
};
