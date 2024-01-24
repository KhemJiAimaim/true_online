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
        Schema::create('berproduct_category_approves', function (Blueprint $table) {
            $table->id('func_id'); // Primary Key
            $table->integer('func_cate_id');
            $table->string('func_name');
            $table->string('func_desc');
            $table->enum('func_display', ['yes', 'no']);
            $table->timestamps();
        });


        DB::table('berproduct_category_approves')->insert([
            [
                'func_id' => '1',
                'func_cate_id' => '3',
                'func_name' => 'xxxxxxxx1 | xxxxxxxx2',
                'func_desc' => 'หลักสุดท้ายไม่เหมือนกัน',
                'func_display' => 'yes',
            ],
            [
                'func_id' => '2',
                'func_cate_id' => '3',
                'func_name' => '1xxxxxx | 2xxxxxx',
                'func_desc' => 'หลักแรกไม่เหมือนกัน',
                'func_display' => 'yes',
            ],
            [
                'func_id' => '3',
                'func_cate_id' => '3',
                'func_name' => '12xxxxx | 21xxxxx',
                'func_desc' => 'สลับตำแหน่งสองหลักแรก ',
                'func_display' => 'yes',
            ],
            [
                'func_id' => '4',
                'func_cate_id' => '3',
                'func_name' => 'xxxxxxx21 | xxxxxxx12',
                'func_desc' => 'สลับตำแหน่งสองหลักหลัง',
                'func_display' => 'yes',
            ],
            [
                'func_id' => '5',
                'func_cate_id' => '3',
                'func_name' => 'xxxxxxx | xxxxxxx',
                'func_desc' => 'เหมือนกันทุกตำแหน่ง',
                'func_display' => 'yes',
            ],
            [
                'func_id' => '6',
                'func_cate_id' => '4',
                'func_name' => 'xxx1212 ',
                'func_desc' => 'เบอร์ xyxy เลขสลับเหมือนกัน 2ชุด',
                'func_display' => 'yes',
            ],
            [
                'func_id' => '7',
                'func_cate_id' => '4',
                'func_name' => 'xxx1122',
                'func_desc' => 'เบอร์ xxyy เลขคู่เหมือนกัน 2 ชุด',
                'func_display' => 'yes',
            ],
            [
                'func_id' => '8',
                'func_cate_id' => '4',
                'func_name' => '123x123',
                'func_desc' => 'เบอร์ห่าม เลข 3 ตัว 2 ชุด',
                'func_display' => 'yes',
            ],
            [
                'func_id' => '11',
                'func_cate_id' => '4',
                'func_name' => 'xxx1221',
                'func_desc' => 'หน้าหลังเหมือนกัน คู่กลางเหมือนกัน ',
                'func_display' => 'yes',
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
        Schema::dropIfExists('berproduct_category_approves');
    }
};
