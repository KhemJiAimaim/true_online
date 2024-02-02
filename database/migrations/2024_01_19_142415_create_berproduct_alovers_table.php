<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berproduct_alovers', function (Blueprint $table) {
            $table->id('lover_id');
            $table->string('category', 100);
            $table->integer('func_id');
            $table->integer('lover_group');
            $table->integer('sort');
            $table->integer('love_priority');
            $table->integer('group_price');
            $table->string('status', 255);
            $table->integer('product_id');
            $table->string('product_phone', 255);
            $table->string('product_improve', 300);
            $table->float('product_price');
            $table->integer('product_sumber')->default(0);
            $table->string('product_network', 5)->default('');
            $table->string('product_grade', 5)->nullable();
            $table->integer('product_discount')->default(0);
            $table->enum('product_sold', ['yes', 'no'])->default('no');
            $table->text('product_comment');
            $table->integer('product_package');
            $table->string('monthly_status', 10);
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
        Schema::dropIfExists('berproduct_alovers');
    }
};
