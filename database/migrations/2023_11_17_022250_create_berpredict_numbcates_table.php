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
        Schema::create('berpredict_numbcates', function (Blueprint $table) {
            $table->id('numbcate_id');
            $table->string('numbcate_name');
            $table->string('numbcate_title', 100);
            $table->string('numbcate_want', 300);
            $table->string('numbcate_unwant', 300);
            $table->boolean('numbcate_pin')->default(false);
            $table->boolean('numbcate_display')->default(true);
            $table->text('thumbnail');
            $table->integer('numbcate_priority')->length(5);
            $table->timestamps();
        });

        DB::table('berpredict_numbcates')->insert([
            [
                'numbcate_id' => "1",
                'numbcate_name' => "การเงิน",
                'numbcate_title' => "การเงิน",
                'numbcate_want' => "789,987,978,879,782,287,878,828,289,982",
                'numbcate_unwant' => "00,01,02,03,07,08,10,11,12,13,18,20,21,27,30,31,33,34,37,38,43,48,57,67,70,72,73,75,76,77,80,81,83,84",
                'numbcate_pin' => "1",
                'numbcate_display' => "1",
                'thumbnail' => "icons/category/icon-money.png",
                'numbcate_priority' => "1",
            ],
            [
                'numbcate_id' => "2",
                'numbcate_name' => "วาจา",
                'numbcate_title' => "วาจา",
                'numbcate_want' => "44,424,46,64,242",
                'numbcate_unwant' => "00,01,02,03,07,08,10,11,12,13,18,20,21,27,30,31,33,34,37,38,43,48,57,67,70,72,73,75,76,77,80,81,83,84",
                'numbcate_pin' => "1",
                'numbcate_display' => "1",
                'thumbnail' => "icons/category/icon-speak.png",
                'numbcate_priority' => "2",
            ],
            [
                'numbcate_id' => "3",
                'numbcate_name' => "จิตใจ",
                'numbcate_title' => "จิตใจ",
                'numbcate_want' => "59,95,99,55",
                'numbcate_unwant' => "00,01,02,03,06,07,08,10,11,12,13,18,20,21,27,30,31,33,34,37,38,43,48,57,58,60,67,68,70,72,73,75,76,77,80,81,83,84,85,86,88",
                'numbcate_pin' => "1",
                'numbcate_display' => "1",
                'thumbnail' => "icons/category/icon-heart.png",
                'numbcate_priority' => "3",
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berpredict_numbcates');
    }
};
