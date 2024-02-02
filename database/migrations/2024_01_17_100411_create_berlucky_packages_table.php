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
        Schema::create('berlucky_packages', function (Blueprint $table) {
            $table->id('id');
            $table->string('title');
            $table->text('details')->nullable();
            $table->text('more_details')->nullable();
            $table->integer('duration')->default(0)->comment('ระยะสัญญา/เดือน');
            $table->string('benefit_ids')->nullable()->comment('สิทธิประโยชน์');
            $table->string('privilege_ids')->nullable()->comment('สิทธิพิเศษ');
            $table->string('internet_volume')->nullable()->comment('ปริมาณอินเทอร์เน็ต (GB, ไม่จำกัด)');
            $table->string('internet_speed')->default(0)->comment('ความเร็วหลังเน็ตเติมสปีดหมด');
            $table->integer('call_credit')->default(0)->comment('เครดิตการโทร/นาที');
            $table->integer('price_per_month')->default(0)->comment('ค่าบริการ/บาท');
            $table->integer('price_per_year')->default(0)->comment('ค่าบริการ/บาท');
            $table->boolean('display')->default(true);
            $table->boolean('delete_status')->default(false);
            $table->integer('priority')->default(0);
            $table->boolean('defaults')->default(false);
            $table->string('language');
            $table->unique(['language', 'id']);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::statement('ALTER TABLE `berlucky_packages` DROP PRIMARY KEY, ADD PRIMARY KEY (`id`, `language`) USING BTREE');

        DB::table('berlucky_packages')->insert([
            [
                'id' =>  1,
                'price_per_month' =>  1999,
                'title' => "แพ็กเกจ 399 เล่นเน็ต 5G/4G ไม่จำกัด (20GB) โทรฟรีทุกเครือข่าย 300 นาที รับชม True Vision Now Go Plus ฟรี 12 เดือน",
                'details' => "แพ็กเกจ 399 เล่นเน็ต 5G/4G ไม่จำกัด (20GB)",
                'benefit_ids' => ',5,6,7,',
                'internet_volume' => 'ไม่จำกัด',
                'internet_speed' => '',
                'call_credit' => 1000,
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
        Schema::dropIfExists('berlucky_packages');
    }
};
