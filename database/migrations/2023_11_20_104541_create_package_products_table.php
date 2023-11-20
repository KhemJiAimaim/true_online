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
        Schema::create('package_products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('details')->nullable();
            $table->text('details_content')->nullable();
            $table->text('description')->nullable();
            $table->integer('lifetime')->default(0)->comment('อายุการใช้งาน/วัน');
            $table->integer('price')->default(0);
            $table->integer('total_price')->default(0);
            $table->string('type')->nullable()->comment('เติมเงิน,รายเดือน');
            $table->string('package_type')->nullable()->comment('แบบรายครั้ง,ต่ออายุอัตโนมัติ');
            $table->string('package_code')->nullable();
            $table->boolean('pin')->default(false);
            $table->boolean('defaults')->default(false);
            $table->string('language')->default('th');
            $table->unique(['language', 'id']);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::statement('ALTER TABLE `package_products` DROP PRIMARY KEY, ADD PRIMARY KEY (`id`, `language`) USING BTREE');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_products');
    }
};
