<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListprintbarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listprintbarangs', function (Blueprint $table) {
            $table->string('id')->nullable();
            $table->string('jenis')->nullable();
            $table->string('namajenis')->nullable();
            $table->string('ukuran')->nullable();
            $table->string('beratasli')->nullable();
            $table->string('beratpembulatan');
            $table->string('hargagram')->nullable();
            $table->string('totalharga')->nullable();
            $table->string('supplier')->nullable();
            $table->string('kadar')->nullable();
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
        Schema::dropIfExists('listprintbarangs');
    }
}
