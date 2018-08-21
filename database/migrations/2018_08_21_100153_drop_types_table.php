<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('product')->dropIfExists('types');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('product')->create('types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->string('code_name', 1);
            $table->softDeletes();
            $table->timestamps();
        });
    }
}
