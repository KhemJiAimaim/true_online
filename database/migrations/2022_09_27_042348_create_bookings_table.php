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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('surname')->nullable();
            $table->string('email');
            $table->string('specific_request')->nullable();
            $table->string('forgroup')->nullable();
            $table->integer('people_number')->nullable();
            $table->string('phone')->nullable();
            $table->dateTime('time_booking')->nullable();
            $table->string('status');
            $table->timestamps();
        });

        DB::table('bookings')->insert([
            [
                'firstname' => 'Nantachai',
                'surname' => 'Ruecha',
                'email' => 'nantachai.ru@gmail.com',
                'people_number' => 2,
                'phone' => '0900000999',
                'time_booking' => '2023-11-14 14:20:00',
                'status' => 'reserve',
            ],
            [
                'firstname' => 'Nantachai',
                'surname' => 'Ruecha',
                'email' => 'nantachai.ru@gmail.com',
                'people_number' => 2,
                'phone' => '0900000999',
                'time_booking' => '2023-11-14 14:20:00',
                'status' => 'reserve',
            ],
            [
                'firstname' => 'Nantachai',
                'surname' => 'Ruecha',
                'email' => 'nantachai.ru@gmail.com',
                'people_number' => 2,
                'phone' => '0900000999',
                'time_booking' => '2023-11-14 14:20:00',
                'status' => 'reserve',
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
        Schema::dropIfExists('bookings');
    }
};
