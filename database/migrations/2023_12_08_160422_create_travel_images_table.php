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
        Schema::create('travel_images', function (Blueprint $table) {
            $table->id();
            $table->integer('travel_id')->nullable();
            $table->string('image_link');
            $table->string('image_alt')->nullable();
            $table->string('image_title')->nullable();
            $table->string('language')->nullable();
            $table->string('defaults')->default(0);

            $table->timestamps();
        });

        DB::table('travel_images')->insert([
            [
                'travel_id' => 1,
                'image_link' => 'images/Rectangle1282.png',
                'image_alt' => 'travel_img1',
                'image_title' => 'travel_img1',
                'language' => 'th',
            ],
            [
                'travel_id' => 2,
                'image_link' => 'images/Rectangle1282.png',
                'image_alt' => 'travel_img1',
                'image_title' => 'travel_img1',
                'language' => 'th',
            ],
            [
                'travel_id' => 3,
                'image_link' => 'images/Rectangle1282.png',
                'image_alt' => 'travel_img1',
                'image_title' => 'travel_img1',
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
        Schema::dropIfExists('travel_images');
    }
};
