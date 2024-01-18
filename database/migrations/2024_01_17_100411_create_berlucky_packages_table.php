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
