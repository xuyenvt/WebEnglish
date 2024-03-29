<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('storytitle');
            $table->longText('content');
            $table->string('image');
            //$table->integer('type')->unsigned();
            $table->unsignedInteger('catestory_id');
            $table->foreign('catestory_id')->references('id')->on('catestory')->onDelete('cascade');
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
        Schema::dropIfExists('stories');
    }}
