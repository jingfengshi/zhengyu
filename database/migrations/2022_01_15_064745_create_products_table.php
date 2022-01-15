<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->text('sub_image');
            $table->boolean('on_sale')->default(false);
            $table->boolean('is_new')->default(false);
            $table->boolean('is_authentication')->default(false);
            $table->boolean('is_recommend')->default(false);
            $table->text('apply_area');
            $table->text('sharp');
            $table->string('file');
            $table->string('video');
            $table->text('install');
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
        Schema::dropIfExists('products');
    }
}
