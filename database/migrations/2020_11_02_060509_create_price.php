<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price', function (Blueprint $table) {
            $table->id();
            $table->integer("b_k");
            $table->integer("b_po");
            $table->integer("b_pa");
            $table->integer("b_l");
            $table->integer("t_b");
            $table->integer("vol_dl")->nullable();
            $table->integer("vol_u")->nullValue();
            $table->integer("weight");
            $table->integer("amount");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price');
    }
}
