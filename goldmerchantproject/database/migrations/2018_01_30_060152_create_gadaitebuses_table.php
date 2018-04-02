<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGadaitebusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gadaitebuses', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggalgadai')->nullable();
            $table->date('tanggaltebus')->nullable();
            $table->string('namapenggadai')->nullable();
            $table->string('namabarang')->nullable();
            $table->float('berat', 10, 2)->nullable();;
            $table->float('totalpinjam', 10, 2);
            $table->string('alamat')->nullable();
            $table->string('notelp')->nullable();
            $table->string('status')->nullable();
            $table->string('salesgadai')->nullable();
            $table->string('salestebus')->nullable();
            $table->float('bunga', 10, 2)->nullable();
            $table->boolean('statusvalidasi');
            $table->float('totalpengembalian', 10, 2)->nullable();
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
        Schema::dropIfExists('gadaitebuses');
    }
}
