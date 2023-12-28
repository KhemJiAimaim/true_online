<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id')->index();

            $table->integer('type_id');
            $table->string('travel_option')->nullable();
            $table->integer('product_cate_id')->nullable();
            $table->integer('product_id');
            $table->float('product_price');
            $table->float('discount')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::table('order_items')->insert([
            [
                'order_id' => 1,
                'type_id' => 3,
                'travel_option' => '',
                'product_cate_id' => null,
                'product_id' => 1,
                'product_price' => 1999.00,
                'discount' => 0.0,

            ],
            [
                'order_id' => 2,
                'type_id' => 4,
                'travel_option' => '',
                'product_cate_id' => 1,
                'product_id' => 1,
                'product_price' => 150.00,
                'discount' => 0.0,

            ],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
};
