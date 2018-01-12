<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis');
            $table->string('namajenis');
            $table->integer('ukuran')->nullable();
            $table->float('beratasli', 10, 3);
            $table->float('beratpembulatan', 10, 3);
            $table->integer('hargagram');
            $table->float('totalharga', 20, 3);
            $table->string('supplier')->nullable();
            $table->string('kadar')->nullable();
            $table->string('foto')->nullable();
            $table->string('stok');
            $table->string('status')->nullable();
            $table->date('tanggalmasuk');
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('barangs');
    }
}
