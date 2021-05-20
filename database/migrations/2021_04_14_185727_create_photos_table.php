<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 85);
            $table->string('small_image', 85);
            $table->string('large_image', 85);
            $table->text('description');
            $table->boolean('visible');
            $table->date('photo_date');
            $table->dateTimeTz('publish_date', $precision = 0);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('author_id');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('photo_categories')->onDelete('cascade');
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
