<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_type');
            $table->integer('product_dm_number');
            $table->string('product_name');
            $table->string('product_imgsrc');
            $table->string('product_attr');
            $table->integer('product_price');
            $table->integer('product_qty');
            $table->text('product_content', 65535);
            $table->boolean('product_show');
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
        //
    }
}
