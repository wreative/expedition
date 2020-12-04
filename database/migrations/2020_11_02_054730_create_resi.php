<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resi', function (Blueprint $table) {
            $table->id();
            $table->string("nomor");
            $table->string("detailed");
            $table->integer("jb");
            $table->string("service");
            $table->string("payment");
            $table->string("destination");
            $table->string("price");
            $table->string("agen");
            $table->string("transaction");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resi');
    }
}
