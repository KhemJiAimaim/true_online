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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('cate_name')->nullable();
            $table->string('cate_title')->nullable();
            $table->string('cate_keyword')->nullable();
            $table->string('cate_description')->nullable();
            $table->string('cate_thumbnail')->nullable();
            $table->string('cate_thumbnail_title')->nullable();
            $table->string('cate_thumbnail_alt')->nullable();
            $table->string('cate_url')->nullable();
            $table->string('cate_topic')->nullable();
            $table->string('cate_h1')->nullable();
            $table->string('cate_h2')->nullable();
            $table->string('cate_freetag')->nullable();
            $table->string('cate_attr')->nullable();
            $table->string('cate_redirect')->nullable();
            $table->integer('cate_parent_id')->default(0);
            $table->integer('cate_root_id')->default(0);
            $table->integer('cate_level')->default(0);
            $table->boolean('cate_status_display')->default(true);
            $table->boolean('is_menu')->default(false);
            $table->boolean('is_topside')->default(false);
            $table->boolean('is_leftside')->default(false);
            $table->boolean('is_rightside')->default(false);
            $table->boolean('is_bottomside')->default(false);
            $table->integer('cate_priority')->default(1);
            $table->integer('cate_position')->default(1);
            $table->boolean('on_product')->default(false); //('ถ้าเป็น false จะใช้สำหรับ content category');
            $table->boolean('is_main_page')->default(true);
            $table->dateTime('cate_date_display')->nullable();
            $table->dateTime('cate_date_hidden')->nullable();
            $table->string('language');
            $table->boolean('defaults')->default(false);
            $table->timestamps();
            $table->unique(['language','cate_url']);
        });
        DB::statement('ALTER TABLE `categories` DROP PRIMARY KEY, ADD PRIMARY KEY (`id`, `language`) USING BTREE');


        #flook mockup
        DB::table('categories')->insert([
            [
                'id' => 1,
                'cate_url' => 'home',
                'cate_title' => 'Home',
                'cate_keyword' => 'home',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'cate_position' => 1,
                'language' => 'fr',
                'defaults' => true
            ],
            [
                'id' => 2,
                'cate_url' => 'menu',
                'cate_title' => 'Menu',
                'cate_keyword' => 'menu',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'cate_position' => 1,
                'language' => 'fr',
                'defaults' => true
            ],
            [
                'id' => 3,
                'cate_url' => 'catering',
                'cate_title' => 'Catering',
                'cate_keyword' => 'catering',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'cate_position' => 1,
                'language' => 'fr',
                'defaults' => true
            ],
            [
                'id' => 4,
                'cate_url' => 'gallery',
                'cate_title' => 'Gallery',
                'cate_keyword' => 'gallery',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'cate_position' => 1,
                'language' => 'fr',
                'defaults' => true
            ],
            [
                'id' => 5,
                'cate_url' => 'delivery',
                'cate_title' => 'Delivery',
                'cate_keyword' => 'delivery',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'cate_position' => 1,
                'language' => 'fr',
                'defaults' => true
            ],
            [
                'id' => 6,
                'cate_url' => 'aboutus',
                'cate_title' => 'About us',
                'cate_keyword' => 'aboutus',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'cate_position' => 2,
                'language' => 'fr',
                'defaults' => true
            ],
            [
                'id' => 7,
                'cate_url' => 'ourlocation',
                'cate_title' => 'Our location',
                'cate_keyword' => 'ourlocation',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'cate_position' => 2,
                'language' => 'fr',
                'defaults' => true
            ],
            [
                'id' => 8,
                'cate_url' => 'contactus',
                'cate_title' => 'Contact us',
                'cate_keyword' => 'contactus',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'cate_position' => 2,
                'language' => 'fr',
                'defaults' => true
            ],
            [
                'id' => 9,
                'cate_url' => 'book',
                'cate_title' => 'Book',
                'cate_keyword' => 'book',
                'is_menu' => true,
                'is_topside' => true,
                'is_bottomside' => true,
                'cate_position' => 2,
                'language' => 'fr',
                'defaults' => true
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
        Schema::dropIfExists('categories');
    }
};
