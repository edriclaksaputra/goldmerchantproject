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
            $table->integer('kondisibarangs_id')->unsigned();
            $table->string('namapenjual');
            $table->string('alamatpenjual');
            $table->string('jenis');
            $table->string('namajenis');
            $table->string('ukuran')->nullable();
            $table->float('beratasli', 10, 2);
            $table->float('beratpembulatan', 10, 2)->nullable();
            $table->integer('hargagram');
            $table->float('totalharga', 20, 2);
            $table->float('totalongkos', 20, 2)->nullable();
            $table->string('kadar')->nullable();
            $table->date('tanggalmasuk');
            $table->date('tanggalkeluar')->nullable();
            $table->string('namasales');
            $table->boolean('statusvalidasi');
            $table->timestamps();

            $table->foreign('kondisibarangs_id')->references('id')->on('kondisibarangs')->onDelete('cascade');
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
