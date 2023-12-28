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

        DB::table('orders')->insert([
            [
                'order_number' => 'TRUEONLINE-1',
                'firstname' => 'Customer1',
                'lastname' => 'Customer1',
                'phone_number' => '0909900999',
                'email' => 'cus1@gmail.com',
                'district' => 'เมือง',
                'subdistrict' => 'ในเมือง',
                'province' => 'ขอนแก่น',
                'zip_code' => '40000',
                'address' => '123/12 xxx xxxx',
                'order_status' => 'success',
                'order_date' => '2023-12-28 13:00:00',
                'shipping_date' => '2023-12-29 13:00:00',
                'order_carrier' => 'Kerry',
                'tracking_number' => 'TH-1231231231',
                'total_price' => 1999.00,
                'shipping_cost' => 100,
            ],
            [
                'order_number' => 'TRUEONLINE-2',
                'firstname' => 'Customer2',
                'lastname' => 'Customer2',
                'phone_number' => '0908800888',
                'email' => 'cus2@gmail.com',
                'district' => 'เมือง',
                'subdistrict' => 'ในเมือง',
                'province' => 'ขอนแก่น',
                'zip_code' => '40000',
                'address' => '123/13 xxx xxxx',
                'order_status' => 'pending',
                'order_date' => '2023-12-28 13:00:00',
                'shipping_date' => '',
                'order_carrier' => '',
                'tracking_number' => '',
                'total_price' => 150.00,
                'shipping_cost' => 100,
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
        Schema::dropIfExists('orders');
    }
};
