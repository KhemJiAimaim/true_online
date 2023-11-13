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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('cate_name')->nullable();
            $table->string('cate_title')->nullable();
            $table->string('cate_keyword')->nullable();
            $table->string('cate_description')->nullable();
            $table->string('cate_thumbnail')->nullable();
            $table->string('cate_thumbnail_title')->nullable();
            $table->string('cate_thumbnail_alt')->nullable();
            $table->string('cate_url')->nullable();
            $table->string('cate_topic')->nullable();
            $table->string('cate_h1')->nullable();
            $table->string('cate_h2')->nullable();
            $table->string('cate_freetag')->nullable();
            $table->string('cate_attr')->nullable();
            $table->string('cate_redirect')->nullable();
            $table->integer('cate_parent_id')->default(0);
            $table->integer('cate_root_id')->default(0);
            $table->integer('cate_level')->default(0);
            $table->boolean('cate_status_display')->default(true);
            $table->boolean('is_menu')->default(false);
            $table->boolean('is_topside')->default(false);
            $table->boolean('is_leftside')->default(false);
            $table->boolean('is_rightside')->default(false);
            $table->boolean('is_bottomside')->default(false);
            $table->integer('cate_priority')->default(1);
            $table->integer('cate_position')->default(1);
            $table->boolean('on_product')->default(false); //('ถ้าเป็น false จะใช้สำหรับ content category');
            $table->boolean('is_main_page')->default(true);
            $table->dateTime('cate_date_display')->nullable();
            $table->dateTime('cate_date_hidden')->nullable();
            $table->string('language');
            $table->boolean('defaults')->default(false);
            $table->timestamps();
            $table->unique(['language','cate_url']);
        });
        DB::statement('ALTER TABLE `categories` DROP PRIMARY KEY, ADD PRIMARY KEY (`id`, `language`) USING BTREE');


        #flook mockup
        DB::table('categories')->insert([
            [
                'id' => 1,
                'cate_url' => 'หน้าหลัก',
                'cate_title' => 'หน้าหลัก',
                'cate_keyword' => 'home',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => true,
                'cate_position' => 1,
                'cate_parent_id' => 0,
                'cate_level' => 0,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 1,
            ],
            [
                'id' => 2,
                'cate_url' => 'อินเตอร์เน็ตไฟเบอร์',
                'cate_title' => 'อินเตอร์เน็ตไฟเบอร์',
                'cate_keyword' => 'internet_fiber',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => true,
                'cate_position' => 1,
                'cate_parent_id' => 0,
                'cate_level' => 0,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 2,
            ],
            [
                'id' => 3,
                'cate_url' => 'เบอร์มงคล',
                'cate_title' => 'เบอร์มงคล',
                'cate_keyword' => 'lucky_number',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => true,
                'cate_position' => 1,
                'cate_parent_id' => 0,
                'cate_level' => 0,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 3,
            ],
            [
                'id' => 4,
                'cate_url' => 'เติมเงิน',
                'cate_title' => 'เติมเงิน',
                'cate_keyword' => 'prepaid',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => true,
                'cate_position' => 1,
                'cate_parent_id' => 0,
                'cate_level' => 0,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 4,
            ],
            [
                'id' => 5,
                'cate_url' => 'ย้ายค่าย',
                'cate_title' => 'ย้ายค่าย',
                'cate_keyword' => 'move',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => true,
                'cate_position' => 1,
                'cate_parent_id' => 0,
                'cate_level' => 0,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 5,
            ],
            [
                'id' => 6,
                'cate_url' => 'ซิมท่องเที่ยว',
                'cate_title' => 'ซิมท่องเที่ยว',
                'cate_keyword' => 'travel',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => true,
                'cate_position' => 1,
                'cate_parent_id' => 0,
                'cate_level' => 0,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 6,
            ],
            [
                'id' => 7,
                'cate_url' => 'วิธีการสั่งซื้อ',
                'cate_title' => 'วิธีการสั่งซื้อ',
                'cate_keyword' => 'how_to_order',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => true,
                'cate_position' => 1,
                'cate_parent_id' => 0,
                'cate_level' => 0,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 7,
            ],
            [
                'id' => 8,
                'cate_url' => 'สิทธิประโยชน์',
                'cate_title' => 'สิทธิประโยชน์',
                'cate_keyword' => 'benefit_items',
                'is_menu' => true,
                'is_topside' => false,
                'is_bottomside' => false,
                'is_main_page' => false,
                'cate_position' => 1,
                'cate_parent_id' => 0,
                'cate_level' => 0,
                'language' => 'th',
                'defaults' => true,
                'on_product' => true, // สำหรับ product
                'cate_priority' => 8,
            ],
            [
                'id' => 9,
                'cate_url' => 'สิทธิพิเศษ',
                'cate_title' => 'สิทธิพิเศษ',
                'cate_keyword' => 'privileges',
                'is_menu' => true,
                'is_topside' => false,
                'is_bottomside' => false,
                'is_main_page' => false,
                'cate_position' => 1,
                'cate_parent_id' => 0,
                'cate_level' => 0,
                'language' => 'th',
                'defaults' => true,
                'on_product' => true, // สำหรับ product
                'cate_priority' => 9,
            ],
            [
                'id' => 10,
                'cate_url' => 'เน็ตบ้านทรู&ดีแทค',
                'cate_title' => 'เน็ตบ้าน สำหรับทรูและดีแทค',
                'cate_keyword' => 'ihome_true&dtac',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => false,
                'cate_position' => 1,
                'cate_parent_id' => 2, // อินเตอร์เน็ตไฟเบอร์
                'cate_level' => 1,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 10,
            ],
            [
                'id' => 11,
                'cate_url' => 'เน็ตบ้านพื้นฐาน',
                'cate_title' => 'เน็ตบ้าน สำหรับใช้งานพื้นฐาน',
                'cate_keyword' => 'ihome_basic_use',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => false,
                'cate_position' => 1,
                'cate_parent_id' => 2, // อินเตอร์เน็ตไฟเบอร์
                'cate_level' => 1,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 11,
            ],
            [
                'id' => 12,
                'cate_url' => 'เน็ตบ้านพร้อมประกัน',
                'cate_title' => 'เน็ตบ้าน พร้อมประกัน',
                'cate_keyword' => 'ihome_with_warranty',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => false,
                'cate_position' => 1,
                'cate_parent_id' => 2, // อินเตอร์เน็ตไฟเบอร์
                'cate_level' => 1,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 12,
            ],
            [
                'id' => 13,
                'cate_url' => 'เน็ตบ้านพร้อมทรูวิชั่นส์',
                'cate_title' => 'เน็ตบ้าน พร้อมทรูวิชั่นส์',
                'cate_keyword' => 'ihome_with_truevisions',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => false,
                'cate_position' => 1,
                'cate_parent_id' => 2, // อินเตอร์เน็ตไฟเบอร์
                'cate_level' => 1,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 13,
            ],
            [
                'id' => 14,
                'cate_url' => 'เน็ตบ้านพร้อมเราเตอร์',
                'cate_title' => 'เน็ตบ้าน เลือกเราเตอร์เอง',
                'cate_keyword' => 'ihome_with_router',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => false,
                'cate_position' => 1,
                'cate_parent_id' => 2, // อินเตอร์เน็ตไฟเบอร์
                'cate_level' => 1,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 14,
            ],
            [
                'id' => 15,
                'cate_url' => 'เน็ตบ้านสำหรับเกมเมอร์',
                'cate_title' => 'เน็ตบ้าน สำหรับเกมเมอร์',
                'cate_keyword' => 'ihome_for_gamers',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => false,
                'cate_position' => 1,
                'cate_parent_id' => 2, // อินเตอร์เน็ตไฟเบอร์
                'cate_level' => 1,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 15,
            ],
            [
                'id' => 16,
                'cate_url' => 'เน็ตบ้านสำหรับsme',
                'cate_title' => 'เน็ตบ้าน สำหรับธุรกิจ SME',
                'cate_keyword' => 'ihome_for_sme',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => false,
                'cate_position' => 1,
                'cate_parent_id' => 2, // อินเตอร์เน็ตไฟเบอร์
                'cate_level' => 1,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 16,
            ],
            [
                'id' => 17,
                'cate_url' => 'ซิมเติมเงิน',
                'cate_title' => 'ซิมเติมเงิน',
                'cate_keyword' => 'prepaid_sim',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => false,
                'cate_position' => 1,
                'cate_parent_id' => 4, // เติมเงิน
                'cate_level' => 1,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 17,
            ],
            [
                'id' => 18,
                'cate_url' => 'แพ็กเกจเสริม',
                'cate_title' => 'แพ็กเกจเสริม',
                'cate_keyword' => 'additional_packages',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => false,
                'cate_position' => 1,
                'cate_parent_id' => 4, // เติมเงิน
                'cate_level' => 1,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 18,
            ],
            [
                'id' => 19,
                'cate_url' => 'ย้ายค่าย/FixxyNoLimit',
                'cate_title' => 'Fixxy No Limit',
                'cate_keyword' => 'fixxy_no_limit',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => false,
                'cate_position' => 1,
                'cate_parent_id' => 5, // ย้ายค่าย
                'cate_level' => 1,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 19,
            ],
            [
                'id' => 20,
                'cate_url' => 'ย้ายค่าย/5GTogether+',
                'cate_title' => '5G Together+',
                'cate_keyword' => '5g_together+',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => false,
                'cate_position' => 1,
                'cate_parent_id' => 5, // ย้ายค่าย
                'cate_level' => 1,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 20,
            ],
            [
                'id' => 21,
                'cate_url' => 'ย้ายค่าย/5GSuperSmart',
                'cate_title' => '5G Super Smart',
                'cate_keyword' => '5g_super_smart',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => false,
                'cate_position' => 1,
                'cate_parent_id' => 5, // ย้ายค่าย
                'cate_level' => 1,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 21,
            ],
            [
                'id' => 22,
                'cate_url' => 'เดินทางไปต่างประเทศ',
                'cate_title' => 'เดินทางไปต่างประเทศ',
                'cate_keyword' => 'travel_abroad',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => false,
                'cate_position' => 1,
                'cate_parent_id' => 6, // ซิมท่องเที่ยว
                'cate_level' => 1,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 22,
            ],
            [
                'id' => 23,
                'cate_url' => 'มาเที่ยวในไทย',
                'cate_title' => 'มาเที่ยวในไทย',
                'cate_keyword' => 'travel_in_thailand',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'is_main_page' => false,
                'cate_position' => 1,
                'cate_parent_id' => 6, // ซิมท่องเที่ยว
                'cate_level' => 1,
                'language' => 'th',
                'defaults' => true,
                'on_product' => false,
                'cate_priority' => 23,
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
        Schema::dropIfExists('categories');
    }
};
