<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('name', 85);
            $table->string('small_image1');
            $table->string('small_image2');
            $table->string('small_image3');
            $table->string('large_image1');
            $table->string('large_image2');
            $table->string('large_image3');
            $table->text('description');
            $table->unsignedInteger('sequence');
            $table->unsignedInteger('owner');
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
        Schema::dropIfExists('albums');
    }
}
