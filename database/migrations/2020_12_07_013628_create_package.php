<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Paket', function (Blueprint $table) {
            $table->id();
            $table->enum('tipe', ['Paket', 'Tart', 'Makanan']);
            $table->bigInteger('berat_pertama');
            $table->bigInteger('berat_berikut');
            $table->string('wilayah_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Paket');
    }
}
