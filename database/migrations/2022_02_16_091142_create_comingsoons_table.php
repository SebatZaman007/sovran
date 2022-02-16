<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComingsoonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comingsoons', function (Blueprint $table) {
            $table->id();
            $table->string('comingsoon_title_one');
            $table->string('comingsoon_title_two');
            $table->string('comingsoon_title_three');
            $table->string('comingsoon_image');
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
        Schema::dropIfExists('comingsoons');
    }
}
