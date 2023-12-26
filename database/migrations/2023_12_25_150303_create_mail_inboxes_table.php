<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

use function PHPSTORM_META\map;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_inboxes', function (Blueprint $table) {
            $table->id();
            $table->integer('type_id')->nullable()->comment('1 คือ fiber, 2 คือ ย้ายค่าย');
            $table->integer('fiber_id')->nullable();
            $table->integer('move_id')->nullable();
            $table->string('move_option')->nullable()->comment('option เสริมของย้ายค่าย');
            $table->string('phone_move')->nullable()->comment('เบอร์ที่ต้องการย้าย');

            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('line_id')->nullable();
            $table->string('district')->nullable();
            $table->string('subdistrict')->nullable();
            $table->string('province')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('address')->nullable();
            $table->string('lat_lng')->nullable()->comment('ละติจูด,ลองจิจูด');
            $table->boolean('readed')->nullable()->default(false);
            $table->boolean('pin')->nullable()->default(false);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::table('mail_inboxes')->insert([
            [
                'type_id' => 1,
                'fiber_id' => 1,
                'move_id' => NULL,
                'move_option' => '',
                'phone_move' => NULL,
                'firstname' => 'First1',
                'lastname' => 'Last1',
                'phone_number' => '0999900999',
                'email' => 'first1@gmail.com',
                'line_id' => '',
                'district' => 'เมืองขอนแก่น',
                'subdistrict' => 'ในเมือง',
                'province' => 'ขอนแก่น',
                'zip_code' => '40000',
                'address' => '179/50 ศรีจันทร์29 หมู่บ้านพิมานธานี',
                'lat_lng' => '16.424986029718152,102.8703928491232',
                'readed' => false,
                'pin' => false,
            ],
            [
                'type_id' => 2,
                'fiber_id' => NULL,
                'move_id' => 1,
                'phone_move' => '0888899888',
                'move_option' => '399',
                'firstname' => 'First2',
                'lastname' => 'Last2',
                'phone_number' => '0888899888',
                'email' => 'first2@gmail.com',
                'line_id' => '',
                'district' => 'เมืองขอนแก่น',
                'subdistrict' => 'ในเมือง',
                'province' => 'ขอนแก่น',
                'zip_code' => '40000',
                'address' => '170/40 ศรีจันทร์39 หมู่บ้านพิมานธานี',
                'lat_lng' => '16.424323270421283,102.86971282201124',
                'readed' => false,
                'pin' => false,
            ],
            [
                'type_id' => 1,
                'fiber_id' => 2,
                'move_id' => NULL,
                'move_option' => '',
                'phone_move' => NULL,
                'firstname' => 'First3',
                'lastname' => 'Last3',
                'phone_number' => '0966685588',
                'email' => 'first3@gmail.com',
                'line_id' => '',
                'district' => 'เมืองขอนแก่น',
                'subdistrict' => 'ในเมือง',
                'province' => 'ขอนแก่น',
                'zip_code' => '40000',
                'address' => '170/40 ศรีจันทร์30 หมู่บ้านพิมานธานี',
                'lat_lng' => '16.423536057437367,102.87052784018265',
                'readed' => false,
                'pin' => false,
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
        Schema::dropIfExists('mail_inboxes');
    }
};
