<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('fiber_products', function (Blueprint $table) {
            $table->id('id');
            $table->string('title');
            $table->integer('cate_id')->default(0);
            $table->string('benefit_id')->nullable();
            $table->string('privilege_id')->nullable();
            $table->text('details')->nullable();
            $table->integer('price')->default(0);
            $table->integer('page_id')->default(0);
            $table->boolean('display')->default(true);
            $table->string('keyword')->nullable();
            $table->string('description')->nullable();
            $table->string('thumbnail_title')->nullable();
            $table->string('thumbnail_link')->nullable();
            $table->string('thumbnail_size')->nullable();
            $table->string('thumbnail_alt')->nullable();
            $table->text('redirect')->nullable();
            $table->integer('priority')->default(0);
            $table->boolean('defaults')->default(false);
            $table->string('language');
            $table->integer('last_update_by')->nullable();
            $table->unique(['language', 'id']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiber_products');
    }
};
