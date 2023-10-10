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
        Schema::create('post_images', function (Blueprint $table) {
            $table->id();
            $table->integer('post_id')->nullable();
            $table->string('image_link');
            $table->string('alt')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->integer('position')->default(1);
            $table->string('language')->nullable();
            $table->string('defaults')->default(0);
            $table->integer('update_by')->nullable();
            $table->timestamps();
        });

        DB::table('post_images')->insert([
            [
                'post_id' => 3,
                'image_link' => 'images/food-col1.png',
                'alt' => '',
                'title' => 'Tom yum goong',
                'description' => '',
                'position' => 1,
                'language' => 'fr',
            ],
            [
                'post_id' => 3,
                'image_link' => 'images/food-col4.png',
                'alt' => '',
                'title' => 'Tamarind Signature',
                'description' => 'Explore More Dishes',
                'position' => 2,
                'language' => 'fr',
            ],
            [
                'post_id' => 3,
                'image_link' => 'images/food-col2.png',
                'alt' => '',
                'title' => 'Tom yum goong',
                'description' => '',
                'position' => 3,
                'language' => 'fr',
            ],
            [
                'post_id' => 3,
                'image_link' => 'images/food-col1.png',
                'alt' => '',
                'title' => 'Tom yum goong',
                'description' => '',
                'position' => 4,
                'language' => 'fr',
            ],
            [
                'post_id' => 3,
                'image_link' => 'images/food-col3.png',
                'alt' => '',
                'title' => 'Tom yum goong',
                'description' => '',
                'position' => 5,
                'language' => 'fr',
            ],
            [
                'post_id' => 7,
                'image_link' => 'images/catering-img1.png',
                'alt' => '',
                'title' => 'Yam mamuang pou nim',
                'description' => '',
                'position' => 1,
                'language' => 'fr',
            ],
            [
                'post_id' => 7,
                'image_link' => 'images/catering-img2.png',
                'alt' => '',
                'title' => 'Yam mamuang pou nim',
                'description' => '',
                'position' => 2,
                'language' => 'fr',
            ],
            [
                'post_id' => 7,
                'image_link' => 'images/catering-img3.png',
                'alt' => '',
                'title' => 'Yam mamuang pou nim',
                'description' => '',
                'position' => 3,
                'language' => 'fr',
            ],
            [
                'post_id' => 7,
                'image_link' => 'images/catering-img4.png',
                'alt' => '',
                'title' => 'Yam mamuang pou nim',
                'description' => '',
                'position' => 4,
                'language' => 'fr',
            ],
            [
                'post_id' => 9,
                'image_link' => 'images/img-swiper.png',
                'alt' => '',
                'title' => '',
                'description' => '',
                'position' => 1,
                'language' => 'fr',
            ],
            [
                'post_id' => 9,
                'image_link' => 'images/bg-food.png',
                'alt' => '',
                'title' => '',
                'description' => '',
                'position' => 2,
                'language' => 'fr',
            ],
            [
                'post_id' => 9,
                'image_link' => 'images/bg-story.png',
                'alt' => '',
                'title' => '',
                'description' => '',
                'position' => 3,
                'language' => 'fr',
            ],
            [
                'post_id' => 9,
                'image_link' => 'https://swiperjs.com/demosimages/nature-4.jpg',
                'alt' => '',
                'title' => '',
                'description' => '',
                'position' => 4,
                'language' => 'fr',
            ],
            [
                'post_id' => 9,
                'image_link' => 'https://swiperjs.com/demosimages/nature-5.jpg',
                'alt' => '',
                'title' => '',
                'description' => '',
                'position' => 5,
                'language' => 'fr',
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
        Schema::dropIfExists('post_images');
    }
};
