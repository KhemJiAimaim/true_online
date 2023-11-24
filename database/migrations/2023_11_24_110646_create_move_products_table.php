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
            $table->integer('sale_price')->default(0)->comment('ราคายังไม่หักส่วนลด(บาท)/เดือน');
            $table->integer('selling_price')->default(0)->comment('ราคาขายจริง(บาท)/เดือน');
            $table->string('benefit_ids')->nullable()->comment('สิทธิประโยชน์');
            $table->string('title');
            $table->string('details')->nullable();
            $table->string('more_details')->nullable();
            $table->string('description')->nullable();
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


            $table->boolean('delete_status')->default(false);
            $table->boolean('display')->default(true);
            $table->integer('priority')->nullable();
            $table->boolean('defaults')->default(false);
            $table->string('language')->default('th');
            $table->unique(['language', 'id']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
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
