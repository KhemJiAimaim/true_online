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
            $table->integer('prepaid_cate_id');
            $table->string('title');
            $table->string('details')->nullable();
            $table->string('description')->nullable();
            $table->integer('price')->default(0)->comment('ราคาขาย/บาท');
            $table->string('thumbnail_link')->nullable();
            $table->string('thumbnail_title')->nullable();
            $table->string('thumbnail_alt')->nullable();
            $table->integer('priority')->nullable();
            $table->boolean('recommended')->default(false);
            $table->boolean('display')->default(true);

            $table->boolean('delete_status')->default(false);
            $table->string('language')->default('th');
            $table->unique(['language', 'id']);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::statement('ALTER TABLE `prepaid_sims` DROP PRIMARY KEY, ADD PRIMARY KEY (`id`, `language`) USING BTREE');

        DB::table('prepaid_sims')->insert([
            [
                'prepaid_cate_id' => 1,
                'title' => '4Mbps',
                'details' => '4Mbps',
                'price' => 150,
                'thumbnail_link' => 'images/Rectangle 98.png',
                'thumbnail_title' => '',
                'thumbnail_alt' => '',
                'recommended' => false,
                'priority' => 1,
                'language' => 'th',
            ],
            [
                'prepaid_cate_id' => 1,
                'title' => '15Mbps+โทรฟรี(30GB)',
                'details' => '15Mbps+โทรฟรี(30GB)',
                'price' => 200,
                'thumbnail_link' => 'images/Rectangle 1283.png',
                'thumbnail_title' => '',
                'thumbnail_alt' => '',
                'recommended' => false,
                'priority' => 2,
                'language' => 'th',
            ],
            [
                'prepaid_cate_id' => 2,
                'title' => '15Mbps+โทรฟรี(55GB) Free Wifi 100min call',
                'details' => '15Mbps+โทรฟรี(55GB) Free Wifi 100min call',
                'price' => 250,
                'thumbnail_link' => 'images/Rectangle 125.png',
                'thumbnail_title' => '',
                'thumbnail_alt' => '',
                'recommended' => false,
                'priority' => 3,
                'language' => 'th',
            ],
            [
                'prepaid_cate_id' => 2,
                'title' => '100Mbps',
                'details' => '100Mbps',
                'price' => 300,
                'thumbnail_link' => 'images/Rectangle 107.png',
                'thumbnail_title' => '',
                'thumbnail_alt' => '',
                'recommended' => false,
                'priority' => 4,
                'language' => 'th',
            ],
            [
                'prepaid_cate_id' => 3,
                'title' => '10Mbps ไม่ลดสปีด',
                'details' => '10Mbps ไม่ลดสปีด',
                'price' => 210,
                'thumbnail_link' => 'images/Rectangle 1297.png',
                'thumbnail_title' => '',
                'thumbnail_alt' => '',
                'recommended' => false,
                'priority' => 5,
                'language' => 'th',
            ],
            [
                'prepaid_cate_id' => 3,
                'title' => '15Mbps+โทรฟรี (55GB) Free Wifi 100min call',
                'details' => '15Mbps+โทรฟรี (55GB) Free Wifi 100min call',
                'price' => 250,
                'thumbnail_link' => 'images/Rectangle 107.png',
                'thumbnail_title' => '',
                'thumbnail_alt' => '',
                'recommended' => false,
                'priority' => 6,
                'language' => 'th',
            ],
            [
                'prepaid_cate_id' => 4,
                'title' => '10Mbps ไม่ลดสปีด',
                'details' => '10Mbps ไม่ลดสปีด',
                'price' => 199,
                'thumbnail_link' => 'images/Rectangle 1297.png',
                'thumbnail_title' => '',
                'thumbnail_alt' => '',
                'recommended' => false,
                'priority' => 7,
                'language' => 'th',
            ],
            [
                'prepaid_cate_id' => 4,
                'title' => '15Mbps+โทรฟรี (55GB) Free Wifi 100min call',
                'details' => '15Mbps+โทรฟรี (55GB) Free Wifi 100min call',
                'price' => 299,
                'thumbnail_link' => 'images/Rectangle 107.png',
                'thumbnail_title' => '',
                'thumbnail_alt' => '',
                'recommended' => false,
                'priority' => 8,
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
        Schema::dropIfExists('prepaid_sims');
    }
};
