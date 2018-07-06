<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('series')->unique();
            $table->unsignedInteger('author')->index();
            $table->unsignedInteger('brand')->index();
            $table->string('name', 255);
            $table->string('origin_name', 255);
            $table->text('desc');
            $table->string('type', 100);
            $table->string('categories', 255);
            $table->string('tags', 255);
            $table->boolean('is_adult_only');
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
        Schema::dropIfExists('series');
    }
}
