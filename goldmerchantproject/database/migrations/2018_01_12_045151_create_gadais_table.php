<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGadaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gadais', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('penjualans_id')->unsigned();;
            $table->date('tanggal');
            $table->string('namapenggadai');
            $table->string('namabarang');
            $table->float('totalpinjam', 10, 3);
            $table->string('alamat');
            $table->string('status');
            $table->float('totalpengembalian', 10, 3);
            $table->timestamps();

            $table->foreign('penjualans_id')->references('id')->on('penjualans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gadais');
    }
}
