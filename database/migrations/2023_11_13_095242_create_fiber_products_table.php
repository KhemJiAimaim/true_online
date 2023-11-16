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
        Schema::create('fiber_products', function (Blueprint $table) {
            $table->id('id');
            $table->string('title');
            $table->text('details')->nullable();
            $table->text('more_details')->nullable();
            $table->boolean('fixed_ip')->default(false);
            $table->integer('duration')->default(0)->comment('ระยะสัญญา/เดือน');
            $table->integer('fiber_cate_id')->default(0);
            $table->string('benefit_ids')->nullable()->comment('สิทธิประโยชน์');
            $table->string('privilege_ids')->nullable()->comment('สิทธิพิเศษ');
            $table->string('download_speed')->default(0)->comment('ความเร็วดาวน์โหลด Mbps');
            $table->integer('upload_speed')->default(0)->comment('ความเร็วอัพโหลด Mbps');
            $table->integer('price_per_month')->default(0);
            $table->integer('price_per_year')->default(0);
            $table->integer('special_price')->default(0);
            $table->text('special_details')->nullable();
            $table->integer('percen_discount')->default(0);
            $table->integer('page_id')->default(0);
            $table->boolean('display')->default(true);
            $table->string('keyword')->nullable();
            $table->string('thumbnail_title')->nullable();
            $table->string('thumbnail_link')->nullable();
            $table->string('thumbnail_size')->nullable();
            $table->string('thumbnail_alt')->nullable();
            $table->text('redirect')->nullable();
            $table->integer('priority')->default(0);
            $table->boolean('defaults')->default(false);
            $table->string('language');
            $table->integer('last_update_by')->nullable();
            $table->unique(['language', 'id']);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::statement('ALTER TABLE `fiber_products` DROP PRIMARY KEY, ADD PRIMARY KEY (`id`, `language`) USING BTREE');

        DB::table('fiber_products')->insert([
            [
                'title' => 'True Gigatex PRO Special',
                'details' => 'True Gigatex PRO Special+TMH 999',
                'more_details' => 'แพ็กราคาสุดพิเศษ สำหรับลูกค้าดีแทค และ ทรูมูฟเอช รายเดือนเท่านั้น สนใจสมัครด้วยตนเองที่นี่ หรือ โทร 02-700-8000',
                'fixed_ip' => false,
                'duration' => 24,
                'fiber_cate_id' => 10,
                'benefit_ids' => ',4,5,6,7,8,9,10,11,12,13',
                'privilege_ids' => ',17,18,19',
                'download_speed' => 1000,
                'upload_speed' => 1000,
                'price_per_month' => 999,
                'special_price' => 799,
                'special_details' => 'ลด 200 บาท/เดือน นาน 24 เดือน',
                'priority' => 1,
                'defaults' => true,
                'language' => 'th',
            ],
            [
                'title' => 'True Gigatex PRO SME',
                'details' => 'True Gigatex PRO SME 2290',
                'more_details' => 'เน็ตเร็ว แรง เพื่อธุรกิจ ฟรีค่าโทร พร้อมบริการ Public Fixed IP กับ True Gigatex PRO SME',
                'fixed_ip' => true,
                'duration' => 24,
                'fiber_cate_id' => 16,
                'benefit_ids' => ',5,',
                'privilege_ids' => ',17,18,19',
                'download_speed' => 2000,
                'upload_speed' => 5000,
                'price_per_month' => 2290,
                'special_price' => 2061,
                'special_details' => 'ลูกค้าทรูมูฟ เอช แพ็ก 399 ขึ้นไป ลดเหลือเพียง',
                'priority' => 2,
                'defaults' => true,
                'language' => 'th',
            ],
            [
                'title' => 'True Gigatex PRO Security',
                'details' => 'True Gigatex PRO Security',
                'more_details' => 'แพ็กเกจเน็ตบ้าน ครอบคลุมทุกย่าน ด้วยความห่วงใย',
                'fixed_ip' => false,
                'duration' => 24,
                'fiber_cate_id' => 12,
                'benefit_ids' => ',15,16',
                'privilege_ids' => ',17,18,19',
                'download_speed' => 1000,
                'upload_speed' => 1000,
                'price_per_month' => 950,
                'special_price' => 0,
                'special_details' => '',
                'priority' => 3,
                'defaults' => true,
                'language' => 'th',
            ],
            [
                'title' => 'True Gigatex PRO Gamer',
                'details' => 'True Gigatex PRO Gamer 2Gbps',
                'more_details' => 'ลดปิง แยกแบนด์วิดท์ เล่นหรือสตรีมเกม ไม่มีแลค',
                'fixed_ip' => false,
                'duration' => 24,
                'fiber_cate_id' => 15,
                'benefit_ids' => ',4,5,6,7,8,9,10,11,12,13',
                'privilege_ids' => ',17,18,19',
                'download_speed' => 2000,
                'upload_speed' => 500,
                'price_per_month' => 1199,
                'special_price' => 0,
                'special_details' => '',
                'priority' => 4,
                'defaults' => true,
                'language' => 'th',
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
        Schema::dropIfExists('fiber_products');
    }
};
