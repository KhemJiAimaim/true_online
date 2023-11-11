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
        Schema::create('berproduct_grades', function (Blueprint $table) {
            $table->id('grade_id');
            $table->string('grade_name');
            $table->string('grade_description');
            $table->unsignedBigInteger('grade_max')->length(5);
            $table->unsignedBigInteger('grade_min')->length(5);
            $table->unsignedBigInteger('grade_priority')->length(2);
            $table->enum('grade_display', ['yes', 'no']);
            $table->timestamps();
        });

        DB::statement("
            INSERT INTO `berproduct_grades` (`grade_id`, `grade_name`, `grade_description`, `grade_max`, `grade_min`, `grade_priority`, `grade_display`) VALUES
            (1, 'A+', 'ดีเยี่ยม', 1000, 900, 1, 'yes'),
            (2, 'A', 'ดีมาก', 899, 800, 2, 'yes'),
            (3, 'B', 'ดี', 799, 700, 3, 'yes'),
            (4, 'C', 'ปานกลาง', 699, 600, 4, 'yes'),
            (5, 'D', 'พอใช้', 599, 500, 5, 'yes'),
            (6, 'F', 'แย่', 499, 0, 6, 'yes');
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berproduct_grades');
    }
};
