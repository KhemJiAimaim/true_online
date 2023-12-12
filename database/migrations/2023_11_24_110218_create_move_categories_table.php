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
        Schema::create('move_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('details')->nullable();
            $table->string('description')->nullable();
            $table->string('language')->default('th');
            $table->integer('priority')->nullable();
            $table->boolean('pin')->default(false);
            $table->boolean('display')->default(true);
            $table->boolean('delete_status')->default(false);
            $table->boolean('defaults')->default(false);
            $table->unique(['language', 'id']);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::statement('ALTER TABLE `move_categories` DROP PRIMARY KEY, ADD PRIMARY KEY (`id`, `language`) USING BTREE');


        DB::table('move_categories')->insert([
            [
                'title' => 'Fixxy No Limit',
                'details' => 'ซิมเติมเงิน พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ',
                'priority' => 1,
                'language' => 'th',
            ],
            [
                'title' => '5G Together+',
                'details' => 'ซิมเติมเงิน พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ',
                'priority' => 2,
                'language' => 'th',
            ],
            [
                'title' => '5G Super Smart',
                'details' => 'ซิมเติมเงิน พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ',
                'priority' => 3,
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
        Schema::dropIfExists('move_categories');
    }
};
