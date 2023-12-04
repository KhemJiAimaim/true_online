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
        Schema::create('travel_sims', function (Blueprint $table) {
            $table->id();
            $table->string('benefit_ids')->nullable()->comment('สิทธิประโยชน์');
            $table->string('title');
            $table->string('details')->nullable();
            $table->string('more_details')->nullable();

            $table->integer('price')->default(0)->comment('ราคาขาย/บาท');
            $table->integer('lifetime')->default(0)->comment('อายุการใช้งาน/วัน');
            $table->string('type')->nullable()->comment('เดินทางไปต่างประเทศ,มาเที่ยวไทย');
            $table->string('package_options')->nullable()->comment('ตัวเลือกแพ็คเกจ');
            $table->string('thumbnail_link')->nullable();
            $table->string('thumbnail_title')->nullable();
            $table->string('thumbnail_alt')->nullable();
            $table->text('details_content')->nullable();
            $table->text('terms_content')->nullable()->comment('ข้อกำหนดและเงื่อนไข');

            $table->integer('priority')->nullable();
            $table->boolean('recommended')->default(false);
            $table->boolean('delete_status')->default(false);
            $table->boolean('display')->default(true);
            $table->boolean('defaults')->default(false);
            $table->string('language')->default('th');
            $table->unique(['language', 'id']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::table('travel_sims')->insert([
            [

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
        Schema::dropIfExists('travel_sims');
    }
};
