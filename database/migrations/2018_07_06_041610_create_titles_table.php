<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('title')->unique();
            $table->unsignedInteger('series')->index();
            $table->unsignedInteger('author')->index();
            $table->unsignedInteger('brand')->index();
            $table->string('name', 255);
            $table->string('origin_name', 255);
            $table->text('desc');
            $table->integer('cost_48hr');
            $table->integer('cost_limitless');
            $table->boolean('is_lunched');
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
        Schema::dropIfExists('titles');
    }
}
