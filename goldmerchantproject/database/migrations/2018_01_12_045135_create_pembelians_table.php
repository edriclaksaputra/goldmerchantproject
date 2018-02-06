<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('penjualans_id')->unsigned()->nullable();
            $table->string('namapenjual');
            $table->string('alamatpenjual');
            $table->string('jenis');
            $table->string('namajenis');
            $table->integer('ukuran')->nullable();
            $table->float('beratasli', 10, 3);
            $table->float('beratpembulatan', 10, 3)->nullable();
            $table->integer('hargagram');
            $table->float('totalharga', 20, 3);
            $table->float('totalongkos', 20, 3)->nullable();
            $table->string('kadar')->nullable();
            $table->string('kondisi')->nullable();
            $table->date('tanggalmasuk');
            $table->date('tanggalkeluar')->nullable();
            $table->string('namasales');
            $table->boolean('statusvalidasi');
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
        Schema::dropIfExists('pembelians');
    }
}
