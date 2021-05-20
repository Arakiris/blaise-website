<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 85);
            $table->string('image', 85);
            $table->string('audio', 85);
            $table->string('artist', 85);
            $table->string('note');
            $table->text('abstract');
            $table->text('description');
            $table->unsignedInteger('sequence');
            $table->boolean('visible');
            $table->dateTimeTz('publish_date', $precision = 0);
            $table->unsignedInteger('count_view');
            $table->unsignedInteger('count_download');
            $table->unsignedBigInteger('album_id');
            $table->timestamps();

            $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
