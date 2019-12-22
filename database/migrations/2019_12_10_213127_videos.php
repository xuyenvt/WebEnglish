<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Videos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('videotitle');
            $table->string('desc');
            $table->string('image');
            $table->string('link');
            //$table->integer('type')->unsigned();
            $table->unsignedInteger('catevideo_id');
            $table->foreign('catevideo_id')->references('id')->on('catevideo')->onDelete('cascade');
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
        Schema::dropIfExists('videos');
    }
}
