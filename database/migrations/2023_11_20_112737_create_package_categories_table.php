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
        Schema::create('package_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('priority')->nullable();
            $table->boolean('pin')->default(false);
            $table->boolean('display')->default(true);
            $table->boolean('defaults')->default(false);
            $table->boolean('delete_status')->default(false);
            $table->string('language')->default('th');
            $table->unique(['language', 'id']);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
        DB::statement('ALTER TABLE `package_categories` DROP PRIMARY KEY, ADD PRIMARY KEY (`id`, `language`) USING BTREE');

        DB::table('package_categories')->insert([
            [
                'title' => 'Flash Sale',
                'priority' => 1,
                'pin' => false,
                'defaults' => true,
                'language' => 'th'
            ],
            [
                'title' => 'เน็ต 5G เต็มสปีด',
                'priority' => 2,
                'pin' => false,
                'defaults' => true,
                'language' => 'th'
            ],
            [
                'title' => 'เพิ่มสปีดเน็ต',
                'priority' => 3,
                'pin' => false,
                'defaults' => true,
                'language' => 'th'
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
        Schema::dropIfExists('package_categories');
    }
};
