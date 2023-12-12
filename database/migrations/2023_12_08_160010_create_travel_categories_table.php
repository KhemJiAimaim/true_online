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
        Schema::create('travel_categories', function (Blueprint $table) {
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

        DB::table('travel_categories')->insert([
            [
                'id' => '22',
                'title' => 'เดินทางไปต่างประเทศ',
                'details' => 'Thailand Tourist infinite sim',
                'description' => 'ซิมท่องเที่ยว เดินทางไปต่างประเทศ',
                'priority' => 1,
                'language' => 'th',
            ],
            [
                'id' => '23',
                'title' => 'มาเที่ยวประเทศไทย',
                'details' => 'Thailand Tourist infinite sim',
                'description' => 'ซิมท่องเที่ยว มาเที่ยวประเทศไทย',
                'priority' => 2,
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
        Schema::dropIfExists('travel_categories');
    }
};
