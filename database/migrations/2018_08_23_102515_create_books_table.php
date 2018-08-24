<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('product')->create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('book_id')->unique();
            $table->unsignedInteger('series_id')->index();
            $table->string('name', 255);
            $table->string('origin_name', 255)->nullable();
            $table->text('desc');
            $table->integer('cost_48hr');
            $table->integer('cost_limitless');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('product')->dropIfExists('books');
    }
}
