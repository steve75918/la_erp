<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorySeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('product')->create('category_series', function (Blueprint $table) {
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('series_id');

            // foreigh keys
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('series_id')->references('id')->on('series')->onDelete('cascade');

            // index
            $table->primary(['category_id', 'series_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('product')->dropIfExists('category_series');
    }
}
