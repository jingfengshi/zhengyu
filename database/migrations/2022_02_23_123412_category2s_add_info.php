<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Category2sAddInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category2s', function (Blueprint $table) {
            $table->string('desc')->nullable();
            $table->string('f_icon')->nullable();
            $table->string('f_icon_desc')->nullable();
            $table->string('s_icon')->nullable();
            $table->string('s_icon_desc')->nullable();
            $table->string('l_icon')->nullable();
            $table->string('l_icon_desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category2s', function (Blueprint $table) {
            $table->dropColumn('desc');
            $table->dropColumn('f_icon');
            $table->dropColumn('f_icon_desc');
            $table->dropColumn('s_icon');
            $table->dropColumn('s_icon_desc');
            $table->dropColumn('l_icon');
            $table->dropColumn('l_icon_desc');
        });
    }
}
