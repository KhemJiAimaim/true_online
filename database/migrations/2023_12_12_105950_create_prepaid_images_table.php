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
        Schema::create('prepaid_images', function (Blueprint $table) {
            $table->id();
            $table->integer('prepaid_id')->nullable();
            $table->string('image_link');
            $table->string('image_alt')->nullable();
            $table->string('image_title')->nullable();
            $table->string('language')->nullable();
            $table->string('defaults')->default(0);

            $table->timestamps();
        });

        DB::statement('ALTER TABLE `prepaid_images` DROP PRIMARY KEY, ADD PRIMARY KEY (`id`, `language`) USING BTREE');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prepaid_images');
    }
};
