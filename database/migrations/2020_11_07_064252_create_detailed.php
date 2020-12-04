<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailed', function (Blueprint $table) {
            $table->id();
            $table->string("sender_name");
            $table->string("sender_tlp");
            $table->string("sender_addr");
            $table->string("receiver_name");
            $table->string("receiver_tlp");
            $table->string("receiver_addr");
            $table->string("office_tlp")->nullable();
            $table->string("office_addr")->nullable();
            $table->string("office_pst")->nullable();
            $table->string("note")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailed');
    }
}
