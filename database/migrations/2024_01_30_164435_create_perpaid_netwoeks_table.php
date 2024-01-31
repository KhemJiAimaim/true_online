<?php

use App\Models\test;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
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
