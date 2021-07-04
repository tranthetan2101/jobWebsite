<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateungvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ungvien', function (Blueprint $table) {
            $table->Increments('id');
            $table->text('fullname');
            $table->string('namsinh');
            $table->string('cmnd');
            $table->string('phone');
            $table->text('email');
            $table->text('diachi');
            $table->text('gioitinh');
            $table->text('giadinh');
            $table->text('gioithieu');
            $table->string('image_cv');
            $table->string('CV');
            $table->string('bangcap');
            $table->integer('id_post');
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
        Schema::dropIfExists('ungvien');
    }
}
