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
            $table->text('bercate_needful')->nullable()->comment('เลขที่ต้องการ');
            $table->text('bercate_needless')->nullable()->comment('เลขที่ไม่ต้องการ');
            $table->integer('priority')->length(10);
            $table->integer('bercate_total')->length(10);
            $table->integer('bercate_discount')->length(3);
            $table->datetime('discount_begin');
            $table->datetime('discount_expire');
            $table->boolean('status')->default(true)->comment('ตั้งค่าให้เพิ่ม product_category อัตโนมัติ');
            $table->boolean('bercate_pin')->default(true);
            $table->boolean('allow_edit')->default(true)->comment('อนุญาตให้ปรับเปลี่ยนข้อมูล');
            $table->boolean('recommended')->default(false);
            $table->boolean('bercate_display')->default(true);
            $table->integer('update_by')->length(5);
            $table->string('bercate_h1')->nullable();
            $table->string('bercate_h2')->nullable();
            $table->text('bercate_content')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->boolean('delete_status')->default(false);
            $table->timestamps();
        });

        DB::table('berproduct_categories')->insert([
            [
                'bercate_id' =>  '1',
                'bercate_name' =>  'เบอร์ทั้งหมด',
                'bercate_title' =>  'เบอร์ทั้งหมด',
                'thumbnail' =>  '',
                'bercate_needful' =>  '',
                'bercate_needless' =>  '',
                'priority' =>  '1',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00 ',
                'discount_expire' =>  '0000-00-00 00:00:00 ',
                'status' =>  'false',
                'bercate_pin' =>  '0',
                'allow_edit' =>  '1',
                'bercate_display' =>  '1',
                'update_by' =>  '0',
                'bercate_h1' =>  '',
                'bercate_h2' =>  '',
                'bercate_content' =>  '',
                'meta_title' =>  '',
                'meta_description' =>  '',
            ],
            [
                'bercate_id' =>  '2',
                'bercate_name' =>  'เบอร์มงคลแนะนำ',
                'bercate_title' =>  'แนะนำ',
                'thumbnail' =>  'upload/2024/01/19/1705634584.svg',
                'bercate_needful' =>  '',
                'bercate_needless' =>  '',
                'priority' =>  '2',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00 ',
                'discount_expire' =>  '0000-00-00 00:00:00 ',
                'status' =>  'false ',
                'bercate_pin' =>  '1',
                'allow_edit' =>  '1',
                'bercate_display' =>  '1',
                'update_by' =>  '0',
                'bercate_h1' =>  '',
                'bercate_h2' =>  '',
                'bercate_content' =>  '',
                'meta_title' =>  '',
                'meta_description' =>  '',
            ],
            [
                'bercate_id' =>  '3',
                'bercate_name' =>  'เบอร์เหมือน เบอร์รัก',
                'bercate_title' =>  'เบอร์เหมือน เบอร์รัก',
                'thumbnail' =>  'upload/2024/01/19/1705635555.svg',
                'bercate_needful' =>  '',
                'bercate_needless' =>  '',
                'priority' =>  '3',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00',
                'discount_expire' =>  '0000-00-00 00:00:00',
                'status' =>  '1',
                'bercate_pin' =>  '1',
                'allow_edit' =>  '1',
                'bercate_display' =>  '1',
                'update_by' =>  '0',
                'bercate_h1' =>  '',
                'bercate_h2' =>  '',
                'bercate_content' =>  '',
                'meta_title' =>  '',
                'meta_description' =>  '',
            ],
            [
                'bercate_id' =>  '4',
                'bercate_name' =>  'เบอร์ห่าม xxxy',
                'bercate_title' =>  'เบอร์เหมือน เบอร์รัก',
                'thumbnail' =>  'upload/2024/01/19/1705635555.svg',
                'bercate_needful' =>  '',
                'bercate_needless' =>  '',
                'priority' =>  '4',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00',
                'discount_expire' =>  '0000-00-00 00:00:00',
                'status' =>  '1',
                'bercate_pin' =>  '1',
                'allow_edit' =>  '1',
                'bercate_display' =>  '1',
                'update_by' =>  '0',
                'bercate_h1' =>  '',
                'bercate_h2' =>  '',
                'bercate_content' =>  '',
                'meta_title' =>  '',
                'meta_description' =>  '',
            ],
            [
                'bercate_id' =>  '5',
                'bercate_name' =>  'เบอร์หงส์ เสริมโชคลาภ เงินทอง',
                'bercate_title' =>  'เบอร์หงส์ ',
                'thumbnail' =>  'upload/2024/01/19/1705635555.svg',
                'bercate_needful' =>  '289,982,782,287',
                'bercate_needless' =>  '',
                'priority' =>  '5',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00',
                'discount_expire' =>  '0000-00-00 00:00:00',
                'status' =>  '1',
                'bercate_pin' =>  '1',
                'allow_edit' =>  '1',
                'bercate_display' =>  '1',
                'update_by' =>  '0',
                'bercate_h1' =>  '',
                'bercate_h2' =>  '',
                'bercate_content' =>  '',
                'meta_title' =>  '',
                'meta_description' =>  '',
            ],
            [
                'bercate_id' =>  '6',
                'bercate_name' =>  'เบอร์มังกร',
                'bercate_title' =>  'เบอร์มังกร ',
                'thumbnail' =>  'upload/2024/01/19/1705635599.svg',
                'bercate_needful' =>  '289,982,782,287',
                'bercate_needless' =>  '',
                'priority' =>  '6',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00',
                'discount_expire' =>  '0000-00-00 00:00:00',
                'status' =>  '1',
                'bercate_pin' =>  '1',
                'allow_edit' =>  '1',
                'bercate_display' =>  '1',
                'update_by' =>  '0',
                'bercate_h1' =>  '',
                'bercate_h2' =>  '',
                'bercate_content' =>  '',
                'meta_title' =>  '',
                'meta_description' =>  '',
            ],
            [
                'bercate_id' =>  '7',
                'bercate_name' =>  'เบอร์กวนอู',
                'bercate_title' =>  'เบอร์กวนอู ',
                'thumbnail' =>  'upload/2024/01/19/1705635748.svg',
                'bercate_needful' =>  '289,982,782,287',
                'bercate_needless' =>  '',
                'priority' =>  '7',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00',
                'discount_expire' =>  '0000-00-00 00:00:00',
                'status' =>  '1',
                'bercate_pin' =>  '1',
                'allow_edit' =>  '1',
                'bercate_display' =>  '1',
                'update_by' =>  '0',
                'bercate_h1' =>  '',
                'bercate_h2' =>  '',
                'bercate_content' =>  '',
                'meta_title' =>  '',
                'meta_description' =>  '',
            ],
            [
                'bercate_id' =>  '8',
                'bercate_name' =>  'เจ้าของกิจการ',
                'bercate_title' =>  'เจ้าของกิจการ ',
                'thumbnail' =>  'upload/2024/01/19/1705638485.svg',
                'bercate_needful' =>  '289,982,782,287',
                'bercate_needless' =>  '',
                'priority' =>  '8',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00',
                'discount_expire' =>  '0000-00-00 00:00:00',
                'status' =>  '1',
                'bercate_pin' =>  '1',
                'allow_edit' =>  '1',
                'bercate_display' =>  '1',
                'update_by' =>  '0',
                'bercate_h1' =>  '',
                'bercate_h2' =>  '',
                'bercate_content' =>  '',
                'meta_title' =>  '',
                'meta_description' =>  '',
            ],
            [
                'bercate_id' =>  '9',
                'bercate_name' =>  'เศรษฐี 4569',
                'bercate_title' =>  'เศรษฐี 4569 ',
                'thumbnail' =>  'upload/2024/01/19/1705638667.svg',
                'bercate_needful' =>  '289,982,782,287',
                'bercate_needless' =>  '',
                'priority' =>  '9',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00',
                'discount_expire' =>  '0000-00-00 00:00:00',
                'status' =>  '1',
                'bercate_pin' =>  '1',
                'allow_edit' =>  '1',
                'bercate_display' =>  '1',
                'update_by' =>  '0',
                'bercate_h1' =>  '',
                'bercate_h2' =>  '',
                'bercate_content' =>  '',
                'meta_title' =>  '',
                'meta_description' =>  '',
            ],
            [
                'bercate_id' =>  '10',
                'bercate_name' =>  'รักสุขสมหวัง',
                'bercate_title' =>  'รักสุขสมหวัง ',
                'thumbnail' =>  'upload/2024/01/19/1705638819.svg',
                'bercate_needful' =>  '289,982,782,287',
                'bercate_needless' =>  '',
                'priority' =>  '10',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00',
                'discount_expire' =>  '0000-00-00 00:00:00',
                'status' =>  '1',
                'bercate_pin' =>  '1',
                'allow_edit' =>  '1',
                'bercate_display' =>  '1',
                'update_by' =>  '0',
                'bercate_h1' =>  '',
                'bercate_h2' =>  '',
                'bercate_content' =>  '',
                'meta_title' =>  '',
                'meta_description' =>  '',
            ],
            [
                'bercate_id' =>  '16',
                'bercate_name' =>  'สุขภาพดี',
                'bercate_title' =>  'สุขภาพดี ',
                'thumbnail' =>  'upload/2024/01/19/1705639274.svg',
                'bercate_needful' =>  '289,982,782,287',
                'bercate_needless' =>  '',
                'priority' =>  '10',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00',
                'discount_expire' =>  '0000-00-00 00:00:00',
                'status' =>  '1',
                'bercate_pin' =>  '1',
                'allow_edit' =>  '1',
                'bercate_display' =>  '1',
                'update_by' =>  '0',
                'bercate_h1' =>  '',
                'bercate_h2' =>  '',
                'bercate_content' =>  '',
                'meta_title' =>  '',
                'meta_description' =>  '',
            ],
            [
                'bercate_id' =>  '11',
                'bercate_name' =>  'งานประมูลแข่งขัน',
                'bercate_title' =>  'งานประมูลแข่งขัน ',
                'thumbnail' =>  'upload/2024/01/19/1705645023.svg',
                'bercate_needful' =>  '289,982,782,287',
                'bercate_needless' =>  '',
                'priority' =>  '11',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00',
                'discount_expire' =>  '0000-00-00 00:00:00',
                'status' =>  '1',
                'bercate_pin' =>  '1',
                'allow_edit' =>  '1',
                'bercate_display' =>  '1',
                'update_by' =>  '0',
                'bercate_h1' =>  '',
                'bercate_h2' =>  '',
                'bercate_content' =>  '',
                'meta_title' =>  '',
                'meta_description' =>  '',
            ],
            [
                'bercate_id' =>  '12',
                'bercate_name' =>  'งานประมูลแข่งขัน',
                'bercate_title' =>  'งานประมูลแข่งขัน ',
                'thumbnail' =>  'upload/2024/01/19/1705645023.svg',
                'bercate_needful' =>  '289,982,782,287',
                'bercate_needless' =>  '',
                'priority' =>  '12',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00',
                'discount_expire' =>  '0000-00-00 00:00:00',
                'status' =>  '1',
                'bercate_pin' =>  '1',
                'allow_edit' =>  '1',
                'bercate_display' =>  '1',
                'update_by' =>  '0',
                'bercate_h1' =>  '',
                'bercate_h2' =>  '',
                'bercate_content' =>  '',
                'meta_title' =>  '',
                'meta_description' =>  '',
            ],
            [
                'bercate_id' =>  '13',
                'bercate_name' =>  'งานประมูลแข่งขัน',
                'bercate_title' =>  'งานประมูลแข่งขัน ',
                'thumbnail' =>  'upload/2024/01/19/1705645023.svg',
                'bercate_needful' =>  '289,982,782,287',
                'bercate_needless' =>  '',
                'priority' =>  '13',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00',
                'discount_expire' =>  '0000-00-00 00:00:00',
                'status' =>  '1',
                'bercate_pin' =>  '1',
                'allow_edit' =>  '1',
                'bercate_display' =>  '1',
                'update_by' =>  '0',
                'bercate_h1' =>  '',
                'bercate_h2' =>  '',
                'bercate_content' =>  '',
                'meta_title' =>  '',
                'meta_description' =>  '',
            ],
            [
                'bercate_id' =>  '14',
                'bercate_name' =>  'งานประมูลแข่งขัน',
                'bercate_title' =>  'งานประมูลแข่งขัน ',
                'thumbnail' =>  'upload/2024/01/19/1705645023.svg',
                'bercate_needful' =>  '289,982,782,287',
                'bercate_needless' =>  '',
                'priority' =>  '14',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00',
                'discount_expire' =>  '0000-00-00 00:00:00',
                'status' =>  '1',
                'bercate_pin' =>  '1',
                'allow_edit' =>  '1',
                'bercate_display' =>  '1',
                'update_by' =>  '0',
                'bercate_h1' =>  '',
                'bercate_h2' =>  '',
                'bercate_content' =>  '',
                'meta_title' =>  '',
                'meta_description' =>  '',
            ],
            [
                'bercate_id' =>  '15',
                'bercate_name' =>  'งานประมูลแข่งขัน',
                'bercate_title' =>  'งานประมูลแข่งขัน ',
                'thumbnail' =>  'upload/2024/01/19/1705645023.svg',
                'bercate_needful' =>  '289,982,782,287',
                'bercate_needless' =>  '',
                'priority' =>  '15',
                'bercate_total' =>  '0',
                'bercate_discount' =>  '0',
                'discount_begin' =>  '0000-00-00 00:00:00',
                'discount_expire' =>  '0000-00-00 00:00:00',
                'status' =>  '1',
                'bercate_pin' =>  '1',
                'allow_edit' =>  '1',
                'bercate_display' =>  '1',
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
