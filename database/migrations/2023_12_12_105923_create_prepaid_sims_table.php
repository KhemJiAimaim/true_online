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
        Schema::create('prepaid_sims', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('details')->nullable();
            $table->string('description')->nullable();
            $table->integer('price')->default(0)->comment('ราคาขาย/บาท');
            $table->integer('lifetime')->default(0)->comment('อายุการใช้งาน/วัน');
            $table->string('internet_details')->nullable();
            $table->string('call_credit')->default(0)->comment('เครดิตการโทร/บาท');
            $table->string('call_credit_details')->nullable();
            $table->string('free_call')->nullable()->comment('Free,Unlimited call');
            $table->string('free_call_details')->nullable();
            $table->string('free_tiktok_details')->nullable();

            $table->boolean('unlimited_5g')->default(false);
            $table->boolean('free_wifi')->default(false);
            $table->boolean('free_tiktok')->default(false);
            $table->boolean('free_socials')->default(false);

            $table->string('package_options')->nullable()->comment('ตัวเลือกแพ็คเกจ');
            $table->string('thumbnail_link')->nullable();
            $table->string('thumbnail_title')->nullable();
            $table->string('thumbnail_alt')->nullable();
            $table->text('details_content')->nullable();
            $table->text('terms_content')->nullable()->comment('ข้อกำหนดและเงื่อนไข');
            $table->integer('priority')->nullable();
            $table->boolean('recommended')->default(false);
            $table->boolean('display')->default(true);
            $table->string('benefit_ids')->nullable()->comment('สิทธิประโยชน์');
            $table->boolean('delete_status')->default(false);
            $table->string('language')->default('th');
            $table->unique(['language', 'id']);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::statement('ALTER TABLE `prepaid_sims` DROP PRIMARY KEY, ADD PRIMARY KEY (`id`, `language`) USING BTREE');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prepaid_sims');
    }
};
