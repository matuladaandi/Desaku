<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->text('nama');
            $table->text('ttl');
            $table->enum('j_klmn', ['L', 'P']);
            $table->text('alamat');
            $table->string('agama');
            $table->enum('sts_perkawinan', ['S', 'B']);
            $table->string('pekerjaan');
            $table->string('warganegara');
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
        Schema::dropIfExists('wargas');
    }
};
