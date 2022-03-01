<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogfacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogfacilities', function (Blueprint $table) {
            //カラム追加
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->unsignedBigInteger('category_id');
            $table->string('price');
            $table->string('opening hours');
            $table->string('summary');
            $table->string('url');
            $table->timestamps();
            $table->softDeletes();

            //外部キー制約カラム追加
            $table->foreign('user_id')->references('id')->on('users')->OnDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dogfacilities');
    }
}
