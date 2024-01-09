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
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');

            $table->integer('type_id');
            $table->string('travel_option')->nullable();
            $table->integer('product_cate_id')->nullable();
            $table->integer('product_id');
            $table->float('product_price');
            $table->integer('quantity');
            $table->float('discount')->nullable()->default(0);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::table('order_items')->insert([
            [
                'order_id' =>  1,
                'type_id' => 3,
                'travel_option' => null,
                'product_cate_id' => null,
                'product_id' => 1,
                'product_price' => 1999.00,
                'quantity' => 1,
                'discount' => null,

            ],
            [
                'order_id' =>  1,
                'type_id' => 4,
                'travel_option' => null,
                'product_cate_id' => 1,
                'product_id' => 2,
                'product_price' => 200.00,
                'quantity' => 1,
                'discount' => null,

            ],
            [
                'order_id' =>  2,
                'type_id' => 4,
                'travel_option' => null,
                'product_cate_id' => 1,
                'product_id' => 2,
                'product_price' => 200.00,
                'quantity' => 1,
                'discount' => null,

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
