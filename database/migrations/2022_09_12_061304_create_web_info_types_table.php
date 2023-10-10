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
        Schema::create('web_info_types', function (Blueprint $table) {
            $table->id();
            $table->string('type_name');
            $table->string('title');
            $table->string('language');
            $table->boolean('defaults')->default(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::statement('ALTER TABLE `web_info_types` DROP PRIMARY KEY, ADD PRIMARY KEY (`id`, `language`) USING BTREE');

        DB::table('web_info_types')->insert([
            [ 'id' => 1, 'type_name' => 'detail', 'title' => 'ข้อมูลเว็บไซต์', 'language' => 'fr', 'defaults' => true],
            [ 'id' => 2, 'type_name' => 'contact', 'title' => 'ข้อมูลติดต่อ', 'language' => 'fr', 'defaults' => true],
            [ 'id' => 3, 'type_name' => 'location', 'title' => 'ข้อมูลที่อยู่', 'language' => 'fr', 'defaults' => true],
            [ 'id' => 4, 'type_name' => 'footer', 'title' => 'ข้อมูลส่วนท้าย', 'language' => 'fr', 'defaults' => true],

            [ 'id' => 1, 'type_name' => 'detail', 'title' => 'Web Info', 'language' => 'en', 'defaults' => false],
            [ 'id' => 2, 'type_name' => 'contact', 'title' => 'Contact', 'language' => 'en', 'defaults' => false],
            [ 'id' => 3, 'type_name' => 'location', 'title' => 'Address', 'language' => 'en', 'defaults' => false],
            [ 'id' => 4, 'type_name' => 'footer', 'title' => 'Footer', 'language' => 'en', 'defaults' => false],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_info_types');
    }
};
