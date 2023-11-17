<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berproduct_monthlies', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_phone', 10);
            $table->string('product_sumber', 10);
            $table->float('product_price');
            $table->string('product_category');
            $table->text('product_improve');
            $table->enum('product_pin', ['yes', 'no'])->default('no');
            $table->enum('product_sold', ['yes', 'no'])->default('no');
            $table->enum('product_new', ['yes', 'no'])->default('no');
            $table->text('product_comment');
            $table->string('product_package');
            $table->enum('product_hot', ['yes', 'no']);
            $table->integer('product_discount')->length(4);
            $table->string('product_grade', 4);
            $table->string('default_cate',100);
            $table->enum('product_display', ['yes', 'no'])->default('yes');
            $table->timestamps();
        });

        DB::table('berproduct_monthlies')->insert([
            [
                'product_id' => 1,
                'product_phone' => '0968965444',
                'product_sumber' => '55',
                'product_price' => 1999,
                'product_category' => ',1,2,3,',
                'product_improve' => ',1,100,101,106,',
                'product_pin' => 'no',
                'product_sold' => 'no',
                'product_new' => 'yes',
                'product_comment' => 'เน็ต Unlimited + โทร 1700 Mins',
                'product_package' => ',1,2,3,4,5',
                'product_hot' => 'yes',
                'product_discount' => 0,
                'product_grade' => 'A+',
                'default_cate' => '1,2',
                'product_display' => 'yes'
            ],
            [
                'product_id' => 2,
                'product_phone' => '0968964949',
                'product_sumber' => '64',
                'product_price' => 1999,
                'product_category' => ',1,5,4,',
                'product_improve' => ',1,100,101,106,',
                'product_pin' => 'no',
                'product_sold' => 'no',
                'product_new' => 'yes',
                'product_comment' => 'เน็ต Unlimited + โทร 1700 Mins',
                'product_package' => ',1,2,3,4,5',
                'product_hot' => 'yes',
                'product_discount' => 0,
                'product_grade' => 'A+',
                'default_cate' => '1,2',
                'product_display' => 'yes'
            ],
            [
                'product_id' => 3,
                'product_phone' => '0968961444',
                'product_sumber' => '51',
                'product_price' => 3999,
                'product_category' => ',1,2,3,',
                'product_improve' => ',1,100,101,106,',
                'product_pin' => 'no',
                'product_sold' => 'no',
                'product_new' => 'yes',
                'product_comment' => 'เน็ต Unlimited + โทร 1700 Mins',
                'product_package' => ',1,2,3,4,5',
                'product_hot' => 'yes',
                'product_discount' => 0,
                'product_grade' => 'A+',
                'default_cate' => '1',
                'product_display' => 'yes'
            ],
            [
                'product_id' => 4,
                'product_phone' => '0966895944',
                'product_sumber' => '58',
                'product_price' => 50000,
                'product_category' => ',1,5,6,7,',
                'product_improve' => ',1,100,101,106,',
                'product_pin' => 'no',
                'product_sold' => 'no',
                'product_new' => 'yes',
                'product_comment' => 'แพ็กเกจนี้ใช้ฟรี 3 เดือน',
                'product_package' => ',1,2,3,4,5',
                'product_hot' => 'yes',
                'product_discount' => 0,
                'product_grade' => 'A+',
                'default_cate' => '1,2',
                'product_display' => 'yes'
            ],
            [
                'product_id' => 5,
                'product_phone' => '0968956966',
                'product_sumber' => '64',
                'product_price' => 60000,
                'product_category' => ',1,5,6,8,',
                'product_improve' => ',1,100,101,106,',
                'product_pin' => 'no',
                'product_sold' => 'no',
                'product_new' => 'yes',
                'product_comment' => 'พลังแห่งปัญญา การสนับสนุนค้ำจุน สติปัญญา นำพาสู่ความสำเร็จ ( แพ็กเกจนี้ใช้ฟรี 3 เดือน )',
                'product_package' => ',1,2,3,4,5',
                'product_hot' => 'yes',
                'product_discount' => 0,
                'product_grade' => 'A+',
                'default_cate' => '1',
                'product_display' => 'yes'
            ],
            [
                'product_id' => 6,
                'product_phone' => '0933501625',
                'product_sumber' => '34',
                'product_price' => 25000,
                'product_category' => ',1,5,6,8,',
                'product_improve' => ',1,100,101,106,',
                'product_pin' => 'no',
                'product_sold' => 'no',
                'product_new' => 'yes',
                'product_comment' => 'พลังแห่งปัญญา การสนับสนุนค้ำจุน สติปัญญา นำพาสู่ความสำเร็จ ( แพ็กเกจนี้ใช้ฟรี 3 เดือน )',
                'product_package' => ',1,2,3,4,5',
                'product_hot' => 'yes',
                'product_discount' => 0,
                'product_grade' => 'C',
                'default_cate' => '1',
                'product_display' => 'no'
            ],
            [
                'product_id' => 7,
                'product_phone' => '0615757352',
                'product_sumber' => '41',
                'product_price' => 25000,
                'product_category' => ',1,5,6,8,',
                'product_improve' => ',1,100,101,106,',
                'product_pin' => 'no',
                'product_sold' => 'no',
                'product_new' => 'yes',
                'product_comment' => 'พลังแห่งปัญญา การสนับสนุนค้ำจุน สติปัญญา นำพาสู่ความสำเร็จ ( แพ็กเกจนี้ใช้ฟรี 3 เดือน )',
                'product_package' => ',1,2,3,4,5',
                'product_hot' => 'yes',
                'product_discount' => 0,
                'product_grade' => 'F',
                'default_cate' => '1',
                'product_display' => 'yes'
            ]
            // เพิ่มข้อมูลของรายการอื่น ๆ ที่ต้องการเพิ่ม
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berproduct_monthlies');
    }
};
