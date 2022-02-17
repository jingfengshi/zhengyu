<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsAddCreativeImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('c_f_image')->nullable();
            $table->string('c_s_image')->nullable();
            $table->string('c_l_image')->nullable();
            $table->string('c_video')->nullable();
            $table->string('c_file')->nullable();
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
            $table->dropColumn('c_f_image');
            $table->dropColumn('c_s_image');
            $table->dropColumn('c_l_image');
            $table->dropColumn('c_video');
            $table->dropColumn('c_file');
        });
    }
}
