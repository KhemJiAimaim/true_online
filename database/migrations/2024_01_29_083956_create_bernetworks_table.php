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
        Schema::create('bernetworks', function (Blueprint $table) {
            $table->id('network_id');
            $table->string('network_name', 10);
            $table->string('thumbnail');
            $table->string('display')->default('yes');
            $table->string('monthly', 10);
            $table->timestamps();
        });

        DB::table('bernetworks')->insert([
            [
                'network_id' => '1',
                'network_name' => 'true',
                'thumbnail' => 'upload/2024/01/30/true.png',
                'display' => 'yes',
                'monthly' => 'no',
            ],
            [
                'network_id' => '2',
                'network_name' => 'dtac',
                'thumbnail' => 'upload/2024/01/30/dtac.png',
                'display' => 'yes',
                'monthly' => 'no',
            ],
            [
                'network_id' => '3',
                'network_name' => 'true',
                'thumbnail' => 'upload/2024/01/30/trueM.png',
                'display' => 'yes',
                'monthly' => 'yes',
            ],
            [
                'network_id' => '4',
                'network_name' => 'dtac',
                'thumbnail' => 'upload/2024/01/30/dtacM.png',
                'display' => 'yes',
                'monthly' => 'yes',
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
        Schema::dropIfExists('bernetworks');
    }
};
