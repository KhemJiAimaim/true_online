<?php

use App\Models\test;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Calculation\Logical\Boolean;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prepaid_netwoeks', function (Blueprint $table) {
            $table->id();
            $table->string('network_name', 10);
            $table->string('thumbnail');
            $table->boolean('display')->default(true);
            $table->boolean('delete_status')->default(false);
            $table->timestamps();
        });

        DB::table('prepaid_netwoeks')->insert([
            [
                'id' => '1',
                'network_name' => 'TRUE',
                'thumbnail' => '/upload/2024/02/05/Ellipse 6.png',
                'display' => 'yes'
            ],
            [
                'id' => '2',
                'network_name' => 'DTAC',
                'thumbnail' => '/upload/2024/02/05/DTAC_Logo.jpg',
                'display' => 'yes'
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
        Schema::dropIfExists('perpaid_netwoeks');
    }
};
