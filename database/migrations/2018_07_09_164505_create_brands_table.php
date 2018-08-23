<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('product')->create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('publisher_id')->index();
            $table->string('name', 255);
            $table->string('origin_name', 255)->nullable();
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
        Schema::connection('product')->dropIfExists('brands');
    }
}
