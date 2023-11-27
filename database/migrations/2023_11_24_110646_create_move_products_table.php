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
        Schema::create('move_products', function (Blueprint $table) {
            $table->id();
            $table->integer('move_cate_id');
            $table->string('benefit_ids')->nullable()->comment('สิทธิประโยชน์');
            $table->string('title');
            $table->string('details')->nullable();
            $table->string('more_details')->nullable();
            $table->string('description')->nullable();
            $table->integer('price')->default(0)->comment('ราคาขาย/บาท');
            $table->integer('discount')->default(0)->comment('ส่วนลด/บาท');
            $table->string('call_minutes')->comment('นาทีการโทร/นาที,ไม่จำกัด');
            $table->string('internet_volume')->comment('ปริมาณอินเทอร์เน็ต/GB,ไม่จำกัด');
            $table->string('sim_gen')->nullable()->comment('4G,5G');
            $table->string('package_options')->nullable()->comment('ตัวเลือกแพ็คเกจ');
            $table->string('thumbnail_link')->nullable();
            $table->string('thumbnail_title')->nullable();
            $table->string('thumbnail_alt')->nullable();
            $table->text('details_content')->nullable();
            $table->text('terms_conditions')->nullable()->comment('ข้อกำหนดและเงือนไข');
            $table->boolean('unlimited_wifi')->default(true);
            $table->boolean('voice_hd')->default(true);
            $table->boolean('recommended')->default(false);

            $table->boolean('delete_status')->default(false);
            $table->boolean('display')->default(true);
            $table->integer('priority')->nullable();
            $table->boolean('defaults')->default(false);
            $table->string('language')->default('th');
            $table->unique(['language', 'id']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::table('move_products')->insert([
            [
                'move_cate_id' => 1,
                'title' => 'ย้ายค่ายเบอร์เดิมแพ็กแกจ Fixxy Nolimit 399',
                'details' => 'ย้ายค่ายเบอร์เดิมแพ็กแกจ Fixxy Nolimit 399',
                'benefit_ids' => ',4,',
                'price' => 99,
                'discount' => 0,
                'call_minutes' => '100',  // นาที
                'internet_volume' => '40', // GB
                'sim_gen' => '5G',
                'package_options' => 'Fixxy No Limited:399, Fixxy No Limited:499', // package option 1:price, package option 2:price
                'thumbnail_link' => '',
                'thumbnail_title' => '',
                'thumbnail_alt' => '',
                'details_content' => '',
                'terms_conditions' => '',
                'unlimited_wifi' => true,
                'voice_hd' => true,
                'recommended' => true,

                'priority' => 1,
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
        Schema::dropIfExists('move_products');
    }
};
