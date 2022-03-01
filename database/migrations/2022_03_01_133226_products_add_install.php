<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsAddInstall extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('install1')->nullable();
            $table->string('install2')->nullable();
            $table->string('install3')->nullable();
            $table->string('install1_desc')->nullable();
            $table->string('install2_desc')->nullable();
            $table->string('install3_desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('install1');
            $table->dropColumn('install2');
            $table->dropColumn('install3');
            $table->dropColumn('install1_desc');
            $table->dropColumn('install2_desc');
            $table->dropColumn('install3_desc');
        });
    }
}
