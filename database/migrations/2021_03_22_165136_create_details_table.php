<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->Increments('id_detail');
            $table->text('noi_lam');
            $table->text('bang_cap');
            $table->text('hinh_thuc');
            $table->text('kinh_nghiem');
            $table->text('thu_nhap');
            $table->integer('so_luong');
            $table->date('han_nop');
            $table->integer('id_post')->unsigned();
            $table->foreign('id_post')->references('id')->on('posts')->onDelete('cascade');
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
        Schema::dropIfExists('details');
    }
}
