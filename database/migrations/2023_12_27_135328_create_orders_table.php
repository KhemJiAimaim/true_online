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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('district')->nullable();
            $table->string('subdistrict')->nullable();
            $table->string('province')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('address')->nullable();

            $table->string('order_status')->comment('pending,success');
            $table->dateTime('order_date')->nullable()->comment('วันที่สั่งซื้อ');
            $table->dateTime('shipping_date')->nullable()->comment('วันที่จัดส่ง');
            $table->string('order_carrier')->nullable()->default(null)->comment('ประเภทขนส่ง');
            $table->string('tracking_number')->nullable()->comment('เลขติดตามพัสดุ');
            $table->float('total_price')->comment('ราคารวม');
            $table->float('shipping_cost')->nullable('ค่าจัดส่ง');
            $table->float('discount')->nullable()->comment('ส่วนลด');
            $table->integer('update_by')->nullable()->comment('เก็บไอดีบัญชีที่ update');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        // DB::table('orders')->insert([
        //     [

        //     ],
        // ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
