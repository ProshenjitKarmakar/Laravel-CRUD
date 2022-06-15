<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            
            $table->increments('id');
            $table->string('productName');
            $table->text('productDescription');
            $table->string('productCategory');
            $table->string('productSize');
            $table->string('productPic')->nullable();
            $table->integer('productCostPrice');
            $table->integer('productSalePrice');
            $table->integer('productQuantity')->nullable();
            $table->integer('productStatus')->default(1)->comment('1. for Active 2. for Inactive');

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
