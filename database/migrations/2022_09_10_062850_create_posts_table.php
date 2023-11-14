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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->string('slug');
            $table->string('title');
            $table->string('keyword')->nullable();
            $table->string('description')->nullable();
            $table->text('freetag')->nullable();
            $table->string('h1')->nullable();
            $table->string('h2')->nullable()->nullable();
            $table->text('short_url')->nullable()->nullable();
            $table->string('thumbnail_title')->nullable();
            $table->string('thumbnail_link')->nullable();
            $table->string('thumbnail_size')->nullable();
            $table->string('thumbnail_alt')->nullable();
            $table->string('topic')->nullable();
            $table->text('content')->nullable();
            $table->text('iframe')->nullable();
            $table->text('category');
            $table->text('tags')->nullable();
            $table->text('redirect')->nullable();
            $table->text('link_facebook')->nullable();
            $table->text('link_twitter')->nullable();
            $table->text('link_instagram')->nullable();
            $table->text('link_youtube')->nullable();
            $table->text('link_line')->nullable();
            $table->dateTime('date_begin_display')->nullable();
            $table->dateTime('date_end_display')->nullable();
            $table->boolean('status_display')->default(false);
            $table->boolean('pin')->default(false);
            $table->boolean('defaults')->default(false);
            $table->integer('post_view')->default(0);
            $table->integer('priority')->default(1);
            $table->string('meta_tag')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->boolean('allow_delete')->default(false)->comment("ถ้าเป็น true ลบได้เฉพาะ SuperAdmin");
            $table->boolean('is_maincontent')->default(false)->comment("ถ้าเป็น false = dynamic content");
            $table->integer('last_update_by')->nullable();
            $table->timestamps();
            $table->unique(['language','slug']);
        });
        DB::statement('ALTER TABLE `posts` DROP PRIMARY KEY, ADD PRIMARY KEY (`id`, `language`) USING BTREE');
        DB::table('posts')->insert([
            [
                'id' => 1,
                'language' => 'th',
                'slug' => 'อินเตอร์เน็ตไฟเบอร์',
                'title' => 'อินเตอร์เน็ตไฟเบอร์',
                'keyword' => '',
                'description' => '',
                'content' => '<p>เต็มที่กับการท่องเว็บและสตรีมมิ่งอย่างราบรื่น เร็วสุด แรงสุด</p>',
                'category' => ',1,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => true,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/Rectangle 20.png',
                'priority' => 1,
                'iframe' => '',
                'redirect' => null,
                'freetag' => '',
                'date_begin_display' => '2023-11-11 08:30:00',
                'date_end_display' => '2032-11-11 08:30:00',
            ],
            [
                'id' => 2,
                'language' => 'th',
                'slug' => 'เบอร์มงคลรายเดือน',
                'title' => 'เบอร์มงคลรายเดือน',
                'keyword' => '',
                'description' => '',
                'content' => '<p>เต็มที่กับการท่องเว็บและสตรีมมิ่งอย่างราบรื่น เร็วสุด แรงสุด</p>',
                'category' => ',1,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => true,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/Rectangle 22.png',
                'priority' => 2,
                'iframe' => '',
                'redirect' => null,
                'freetag' => '',
                'date_begin_display' => '2023-11-11 08:30:00',
                'date_end_display' => '2032-11-11 08:30:00',
            ],
            [
                'id' => 3,
                'language' => 'th',
                'slug' => 'แพ็กเกจเสริม',
                'title' => 'แพ็กเกจเสริม',
                'keyword' => '',
                'description' => '',
                'content' => '<p>เต็มที่กับการท่องเว็บและสตรีมมิ่งอย่างราบรื่น เร็วสุด แรงสุด</p>',
                'category' => ',1,',
                'status_display' => true,
                'defaults' => true,
                'pin' => true,
                'is_maincontent' => true,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/Rectangle 21.png',
                'priority' => 3,
                'iframe' => '',
                'redirect' => null,
                'freetag' => '',
                'date_begin_display' => '2023-11-11 08:30:00',
                'date_end_display' => '2032-11-11 08:30:00',
            ],


//////////////////////////////////////// Benefit Items /////////////////////////////////////////////////////////////////////
            [
                'id' => 4,
                'language' => 'th',
                'slug' => 'benefit_1',
                'title' => 'กล่องทรูไอดีทีวี +True ID Basic HD',
                'keyword' => '',
                'description' => '',
                'content' => '',
                'category' => ',8,',
                'status_display' => true,
                'defaults' => true,
                'pin' => false,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/benefits/b_truebox.png',
                'priority' => 4,
                'iframe' => '',
                'redirect' => null,
                'freetag' => '',
                'date_begin_display' => '2023-11-11 08:30:00',
                'date_end_display' => '2032-11-11 08:30:00',
            ],
            [
                'id' => 5,
                'language' => 'th',
                'slug' => 'benefit_2',
                'title' => 'True Gigatex Fiber Router WiFi6',
                'keyword' => '',
                'description' => '',
                'content' => '',
                'category' => ',8,',
                'status_display' => true,
                'defaults' => true,
                'pin' => false,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/benefits/b_gigatex_router.png',
                'priority' => 5,
                'iframe' => '',
                'redirect' => null,
                'freetag' => '',
                'date_begin_display' => '2023-11-11 08:30:00',
                'date_end_display' => '2032-11-11 08:30:00',
            ],
            [
                'id' => 6,
                'language' => 'th',
                'slug' => 'benefit_3',
                'title' => 'EPL ฤดูกาล 2023/24 สด ครบทุกแมตช์',
                'keyword' => '',
                'description' => '',
                'content' => '',
                'category' => ',8,',
                'status_display' => true,
                'defaults' => true,
                'pin' => false,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/benefits/b_premier.png',
                'priority' => 6,
                'iframe' => '',
                'redirect' => null,
                'freetag' => '',
                'date_begin_display' => '2023-11-11 08:30:00',
                'date_end_display' => '2032-11-11 08:30:00',
            ],
            [
                'id' => 7,
                'language' => 'th',
                'slug' => 'benefit_4',
                'title' => 'VIU Premium นาน 24 เดือน',
                'keyword' => '',
                'description' => '',
                'content' => '',
                'category' => ',8,',
                'status_display' => true,
                'defaults' => true,
                'pin' => false,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/benefits/b_viu.png',
                'priority' => 7,
                'iframe' => '',
                'redirect' => null,
                'freetag' => '',
                'date_begin_display' => '2023-11-11 08:30:00',
                'date_end_display' => '2032-11-11 08:30:00',
            ],
            [
                'id' => 8,
                'language' => 'th',
                'slug' => 'benefit_5',
                'title' => 'อุปกรณ์กระจายสัญญาณ Mesh WiFi 6',
                'keyword' => '',
                'description' => '',
                'content' => '',
                'category' => ',8,',
                'status_display' => true,
                'defaults' => true,
                'pin' => false,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/benefits/b_gigatext_amp.png',
                'priority' => 8,
                'iframe' => '',
                'redirect' => null,
                'freetag' => '',
                'date_begin_display' => '2023-11-11 08:30:00',
                'date_end_display' => '2032-11-11 08:30:00',
            ],
            [
                'id' => 9,
                'language' => 'th',
                'slug' => 'benefit_6',
                'title' => 'ชำระค่าแรกเข้า 890 บาท รับกล้อง CCTV',
                'keyword' => '',
                'description' => '',
                'content' => '',
                'category' => ',8,',
                'status_display' => true,
                'defaults' => true,
                'pin' => false,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/benefits/b_cam.png',
                'priority' => 9,
                'iframe' => '',
                'redirect' => null,
                'freetag' => '',
                'date_begin_display' => '2023-11-11 08:30:00',
                'date_end_display' => '2032-11-11 08:30:00',
            ],
            [
                'id' => 10,
                'language' => 'th',
                'slug' => 'benefit_7',
                'title' => 'รับสิทธิ์ True Blue card นาน 12 เดือน',
                'keyword' => '',
                'description' => '',
                'content' => '',
                'category' => ',8,',
                'status_display' => true,
                'defaults' => true,
                'pin' => false,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/benefits/b_bluecard.png',
                'priority' => 10,
                'iframe' => '',
                'redirect' => null,
                'freetag' => '',
                'date_begin_display' => '2023-11-11 08:30:00',
                'date_end_display' => '2032-11-11 08:30:00',
            ],
            [
                'id' => 11,
                'language' => 'th',
                'slug' => 'benefit_8',
                'title' => 'รับสิทธิ์ True Red card นาน 12 เดือน',
                'keyword' => '',
                'description' => '',
                'content' => '',
                'category' => ',8,',
                'status_display' => true,
                'defaults' => true,
                'pin' => false,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/benefits/b_redcard.png',
                'priority' => 11,
                'iframe' => '',
                'redirect' => null,
                'freetag' => '',
                'date_begin_display' => '2023-11-11 08:30:00',
                'date_end_display' => '2032-11-11 08:30:00',
            ],
            [
                'id' => 12,
                'language' => 'th',
                'slug' => 'benefit_9',
                'title' => 'รับชมพรีเมียร์ ฟุตบอล (EPL) ได้ตลอดฤดูกาล 2023-2024',
                'keyword' => '',
                'description' => '',
                'content' => '',
                'category' => ',8,',
                'status_display' => true,
                'defaults' => true,
                'pin' => false,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/benefits/b_epl.png',
                'priority' => 12,
                'iframe' => '',
                'redirect' => null,
                'freetag' => '',
                'date_begin_display' => '2023-11-11 08:30:00',
                'date_end_display' => '2032-11-11 08:30:00',
            ],
            [
                'id' => 13,
                'language' => 'th',
                'slug' => 'benefit_10',
                'title' => 'รับสิทธิ์ True Black card นาน 12 เดือน',
                'keyword' => '',
                'description' => '',
                'content' => '',
                'category' => ',8,',
                'status_display' => true,
                'defaults' => true,
                'pin' => false,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/benefits/b_blackcard.png',
                'priority' => 13,
                'iframe' => '',
                'redirect' => null,
                'freetag' => '',
                'date_begin_display' => '2023-11-11 08:30:00',
                'date_end_display' => '2032-11-11 08:30:00',
            ],
            [
                'id' => 14,
                'language' => 'th',
                'slug' => 'benefit_11',
                'title' => 'รับชมความบันเทิงซีรีย์ดัง และ EPL FanPack ฤดูกาล 2023/24 (เลือกชมทีมโปรด 1 ทีม) รับสิทธิ์กด *555*56# โทรออก',
                'keyword' => '',
                'description' => '',
                'content' => '',
                'category' => ',8,',
                'status_display' => true,
                'defaults' => true,
                'pin' => false,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => 'images/benefits/b_true_unlock.png',
                'priority' => 14,
                'iframe' => '',
                'redirect' => null,
                'freetag' => '',
                'date_begin_display' => '2023-11-11 08:30:00',
                'date_end_display' => '2032-11-11 08:30:00',
            ],

            /////////////////////////////////////// Privileges ///////////////////////////////////////////////////////
            [
                'id' => 15,
                'language' => 'th',
                'slug' => 'privilege_1',
                'title' => 'สิทธิยืม True Gigatex Fiber Router Pro รองรับ WiFi6',
                'keyword' => '',
                'description' => 'ฟรี! สิทธิยืม True Gigatex Fiber Router Pro รองรับ WiFi6',
                'content' => '<p><span style="color:#ec1f25"><span style="font-size:16px"><strong>ฟรี!</strong></span></span> สิทธิยืม True Gigatex Fiber Router Pro รองรับ WiFi6</p>',
                'category' => ',9,',
                'status_display' => true,
                'defaults' => true,
                'pin' => false,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => '',
                'priority' => 15,
                'iframe' => '',
                'redirect' => null,
                'freetag' => '',
                'date_begin_display' => '2023-11-11 08:30:00',
                'date_end_display' => '2032-11-11 08:30:00',
            ],
            [
                'id' => 16,
                'language' => 'th',
                'slug' => 'privilege_2',
                'title' => 'ค่าติดตั้งและค่าเดินสายอินเทอร์เน็ต',
                'keyword' => '',
                'description' => 'ฟรี! ค่าติดตั้งและค่าเดินสายอินเทอร์เน็ต',
                'content' => '<p><strong><span style="color:#ec1f25"><span style="font-size:16px">ฟรี!</span></span></strong> ค่าติดตั้งและค่าเดินสายอินเทอร์เน็ต</p>',
                'category' => ',9,',
                'status_display' => true,
                'defaults' => true,
                'pin' => false,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => '',
                'priority' => 16,
                'iframe' => '',
                'redirect' => null,
                'freetag' => '',
                'date_begin_display' => '2023-11-11 08:30:00',
                'date_end_display' => '2032-11-11 08:30:00',
            ],
            [
                'id' => 17,
                'language' => 'th',
                'slug' => 'privilege_3',
                'title' => 'ชำระค่าแรกเข้าเพียง 890 บาท (จากปกติ 2,000 บาท)',
                'keyword' => '',
                'description' => 'พิเศษ! ชำระค่าแรกเข้าเพียง 890 บาท (จากปกติ 2,000 บาท) รับทันที! กล้อง CCTV Full HD 1080p พร้อมดูย้อนหลัง 7 วัน (รวมมูลค่า 3,666 บาท)',
                'content' => '<p><strong><span style="color:#ec1f25"><span style="font-size:16px">พิเศษ!</span></span></strong> ชำระค่าแรกเข้าเพียง 890 บาท (จากปกติ 2,000 บาท) รับทันที!<br />
                              กล้อง CCTV Full HD 1080p พร้อมดูย้อนหลัง 7 วัน (รวมมูลค่า 3,666 บาท)</p>',
                'category' => ',9,',
                'status_display' => true,
                'defaults' => true,
                'pin' => false,
                'is_maincontent' => false,
                'thumbnail_title' => '',
                'thumbnail_link' => '',
                'priority' => 17,
                'iframe' => '',
                'redirect' => null,
                'freetag' => '',
                'date_begin_display' => '2023-11-11 08:30:00',
                'date_end_display' => '2032-11-11 08:30:00',
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
        Schema::dropIfExists('posts');
    }
};
