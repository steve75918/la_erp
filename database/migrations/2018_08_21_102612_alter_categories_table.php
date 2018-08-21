<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('product')->table('categories', function (Blueprint $table) {
            $table->unsignedInteger('parent_id');
            $table->tinyInteger('level');
            $table->tinyInteger('order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('product')->table('categories', function (Blueprint $table) {
            $table->dropColumn('parent_id');
            $table->dropColumn('level');
            $table->dropColumn('order');
        });
    }
}
