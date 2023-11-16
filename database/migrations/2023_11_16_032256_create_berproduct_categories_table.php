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
        Schema::create('berproduct_categories', function (Blueprint $table) {
            $table->id('bercate_id');
            $table->string('bercate_name');
            $table->string('bercate_title', 100);
            $table->string('thumbnail');
            $table->string('bercate_needful')->comment('เลขที่ต้องการ');
            $table->string('bercate_needless')->comment('เลขที่ไม่ต้องการ');
            $table->integer('priority')->length(10);
            $table->integer('bercate_total')->length(10);
            $table->integer('bercate_discount')->length(3);
            $table->datetime('discount_begin');
            $table->datetime('discount_expire');
            $table->boolean('status')->default(true)->comment('ตั้งค่าให้เพิ่ม product_category อัตโนมัติ');
            $table->boolean('bercate_pin')->default(true);
            $table->boolean('allow_edit')->default(true)->comment('อนุญาตให้ปรับเปลี่ยนข้อมูล');
            $table->boolean('bercate_display')->default(true);
            $table->integer('update_by')->length(5);
            $table->string('bercate_h1')->nullable();
            $table->string('bercate_h2')->nullable();
            $table->text('bercate_content')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
        });

        DB::table('berproduct_categories')->insert([
            [
                'bercate_id' =>  '1',
                'bercate_name' =>  'เบอร์มงคลแนะนำ',
                'bercate_title' =>  'แนะนำ',
                'thumbnail' =>  '/icons/category/icon-money.png',
                'bercate_needful' =>  '',
                'bercate_needless' =>  '',
                'priority' =>  '3',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00 ',
                'discount_expire' =>  '0000-00-00 00:00:00 ',
                'status' =>  'false ',
                'bercate_pin' =>  'true',
                'allow_edit' =>  'true',
                'bercate_display' =>  'true',
                'update_by' =>  '0',
                'bercate_h1' =>  '',
                'bercate_h2' =>  '',
                'bercate_content' =>  '',
                'meta_title' =>  '',
                'meta_description' =>  '',
            ],
            [
                'bercate_id' =>  '2',
                'bercate_name' =>  'เบอร์หงส์ เสริมโชคลาภ เงินทอง',
                'bercate_title' =>  'เบอร์หงส์ ',
                'thumbnail' =>  '/icons/category/icon-swarn.png',
                'bercate_needful' =>  '289,982,782,287',
                'bercate_needless' =>  '',
                'priority' =>  '4',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00',
                'discount_expire' =>  '0000-00-00 00:00:00',
                'status' =>  'true',
                'bercate_pin' =>  'true',
                'allow_edit' =>  'true',
                'bercate_display' =>  'true',
                'update_by' =>  '0',
                'bercate_h1' =>  '',
                'bercate_h2' =>  '',
                'bercate_content' =>  '',
                'meta_title' =>  '',
                'meta_description' =>  '',
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
        Schema::dropIfExists('berprocut_categories');
    }
};
