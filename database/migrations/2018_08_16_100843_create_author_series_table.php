<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('product')->create('author_series', function (Blueprint $table) {
            $table->unsignedInteger('author_id');
            $table->unsignedInteger('series_id');

            // foreigh keys
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->foreign('series_id')->references('id')->on('series')->onDelete('cascade');

            // index
            $table->primary(['author_id', 'series_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('product')->dropIfExists('author_series');
    }
}
