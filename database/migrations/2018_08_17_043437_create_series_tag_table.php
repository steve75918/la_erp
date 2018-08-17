<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('product')->create('series_tag', function (Blueprint $table) {
            $table->unsignedInteger('series_id');
            $table->unsignedInteger('tag_id');

            // foreigh keys
            $table->foreign('series_id')->references('id')->on('series')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('categories')->onDelete('cascade');

            // index
            $table->primary(['series_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('product')->dropIfExists('series_tag');
    }
}
