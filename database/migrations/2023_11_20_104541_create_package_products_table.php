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
        Schema::create('package_products', function (Blueprint $table) {
            $table->id();
            $table->integer('package_cate_id');
            $table->string('title');
            $table->text('details')->nullable();
            $table->text('details_content')->nullable();
            $table->text('description')->nullable();
            $table->string('speed')->nullable();
            $table->integer('lifetime')->default(0)->comment('อายุการใช้งาน/วัน');
            $table->integer('price')->default(0);
            $table->double('vat')->default(0);
            $table->double('total_price')->default(0);
            $table->string('type')->nullable()->comment('เติมเงิน,รายเดือน');
            $table->string('package_type')->nullable()->comment('แบบรายครั้ง,ต่ออายุอัตโนมัติ');
            $table->string('package_code')->nullable();
            $table->boolean('display')->default(true);
            $table->boolean('pin')->default(false);
            $table->boolean('recommended')->default(false);
            $table->boolean('defaults')->default(false);
            $table->string('language')->default('th');
            $table->boolean('delete_status')->default(false);
            $table->unique(['language', 'id']);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::statement('ALTER TABLE `package_products` DROP PRIMARY KEY, ADD PRIMARY KEY (`id`, `language`) USING BTREE');


        DB::table('package_products')->insert([
            [
                'package_cate_id' => 1,
                'title' => 'เน็ต 1GB',
                'details' => 'ประกันอุบัติเหตุ 100,000 บ.',
                'details_content' => '<p><strong>เน็ต 1GB<br />
                                        ประกันอุบัติเหตุ 100,000 บ.</strong></p>

                                        <ul>
                                            <li>เปิดเบอร์ใหม่ ใช้ฟรีทันที 5 วัน</li>
                                            <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                            <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                            <li>WiFi ไม่อั้น</li>
                                        </ul>

                                        <p>จากนั้น ทุกๆ 5 วัน ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ<br />
                                        49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)<br />
                                        <br />
                                        เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66</p>',
                'lifetime' => 30,
                'price' => 99,
                'vat' => 6.93,
                'total_price' => 105.93,
                'package_type' => 'ต่ออายุอัตโนมัติ',
                'type' => 'เติมเงิน',
                'package_code' => '*900*7430#',
                'pin' => false,
                'recommended' => false,
                'defaults' => false,
                'language' => 'th',
            ],
            [
                'package_cate_id' => 1,
                'title' => 'เน็ต 1GB',
                'details' => 'ประกันอุบัติเหตุ 100,000 บ.',
                'details_content' => '<p><strong>เน็ต 1GB<br />
                                        ประกันอุบัติเหตุ 100,000 บ.</strong></p>

                                        <ul>
                                            <li>เปิดเบอร์ใหม่ ใช้ฟรีทันที 5 วัน</li>
                                            <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                            <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                            <li>WiFi ไม่อั้น</li>
                                        </ul>

                                        <p>จากนั้น ทุกๆ 5 วัน ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ<br />
                                        49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)<br />
                                        <br />
                                        เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66</p>',
                'lifetime' => 30,
                'price' => 99,
                'vat' => 6.93,
                'total_price' => 105.93,
                'package_type' => 'แบบรายครั้ง',
                'type' => 'เติมเงิน',
                'package_code' => '*900*7430#',
                'pin' => false,
                'recommended' => true,
                'defaults' => false,
                'language' => 'th',
            ],
            [
                'package_cate_id' => 1,
                'title' => 'เน็ต 1GB',
                'details' => 'ประกันอุบัติเหตุ 100,000 บ.',
                'details_content' => '<p><strong>เน็ต 1GB<br />
                                        ประกันอุบัติเหตุ 100,000 บ.</strong></p>

                                        <ul>
                                            <li>เปิดเบอร์ใหม่ ใช้ฟรีทันที 5 วัน</li>
                                            <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                            <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                            <li>WiFi ไม่อั้น</li>
                                        </ul>

                                        <p>จากนั้น ทุกๆ 5 วัน ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ<br />
                                        49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)<br />
                                        <br />
                                        เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66</p>',
                'lifetime' => 30,
                'price' => 99,
                'vat' => 6.93,
                'total_price' => 105.93,
                'package_type' => 'ต่ออายุอัตโนมัติ',
                'type' => 'รายเดือน',
                'package_code' => '*900*7430#',
                'pin' => false,
                'recommended' => false,
                'defaults' => false,
                'language' => 'th',
            ],
            [
                'package_cate_id' => 2,
                'title' => 'เน็ต 1GB',
                'details' => 'ประกันอุบัติเหตุ 100,000 บ.',
                'details_content' => '<p><strong>เน็ต 1GB<br />
                                        ประกันอุบัติเหตุ 100,000 บ.</strong></p>

                                        <ul>
                                            <li>เปิดเบอร์ใหม่ ใช้ฟรีทันที 5 วัน</li>
                                            <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                            <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                            <li>WiFi ไม่อั้น</li>
                                        </ul>

                                        <p>จากนั้น ทุกๆ 5 วัน ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ<br />
                                        49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)<br />
                                        <br />
                                        เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66</p>',
                'lifetime' => 30,
                'price' => 99,
                'vat' => 6.93,
                'total_price' => 105.93,
                'package_type' => 'ต่ออายุอัตโนมัติ',
                'type' => 'รายเดือน',
                'package_code' => '*900*7430#',
                'pin' => false,
                'recommended' => true,
                'defaults' => false,
                'language' => 'th',
            ],
            [
                'package_cate_id' => 2,
                'title' => 'เน็ต 1GB',
                'details' => 'ประกันอุบัติเหตุ 100,000 บ.',
                'details_content' => '<p><strong>เน็ต 1GB<br />
                                        ประกันอุบัติเหตุ 100,000 บ.</strong></p>

                                        <ul>
                                            <li>เปิดเบอร์ใหม่ ใช้ฟรีทันที 5 วัน</li>
                                            <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                            <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                            <li>WiFi ไม่อั้น</li>
                                        </ul>

                                        <p>จากนั้น ทุกๆ 5 วัน ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ<br />
                                        49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)<br />
                                        <br />
                                        เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66</p>',
                'lifetime' => 30,
                'price' => 99,
                'vat' => 6.93,
                'total_price' => 105.93,
                'package_type' => 'ต่ออายุอัตโนมัติ',
                'type' => 'รายเดือน',
                'package_code' => '*900*7430#',
                'pin' => false,
                'recommended' => true,
                'defaults' => false,
                'language' => 'th',
            ],
            [
                'package_cate_id' => 2,
                'title' => 'เน็ต 1GB',
                'details' => 'ประกันอุบัติเหตุ 100,000 บ.',
                'details_content' => '<p><strong>เน็ต 1GB<br />
                                        ประกันอุบัติเหตุ 100,000 บ.</strong></p>

                                        <ul>
                                            <li>เปิดเบอร์ใหม่ ใช้ฟรีทันที 5 วัน</li>
                                            <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                            <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                            <li>WiFi ไม่อั้น</li>
                                        </ul>

                                        <p>จากนั้น ทุกๆ 5 วัน ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ<br />
                                        49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)<br />
                                        <br />
                                        เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66</p>',
                'lifetime' => 30,
                'price' => 99,
                'vat' => 6.93,
                'total_price' => 105.93,
                'package_type' => 'ต่ออายุอัตโนมัติ',
                'type' => 'รายเดือน',
                'package_code' => '*900*7430#',
                'pin' => false,
                'recommended' => true,
                'defaults' => false,
                'language' => 'th',
            ],
            [
                'package_cate_id' => 3,
                'title' => 'เน็ต 1GB',
                'details' => 'ประกันอุบัติเหตุ 100,000 บ.',
                'details_content' => '<p><strong>เน็ต 1GB<br />
                                        ประกันอุบัติเหตุ 100,000 บ.</strong></p>

                                        <ul>
                                            <li>เปิดเบอร์ใหม่ ใช้ฟรีทันที 5 วัน</li>
                                            <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                            <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                            <li>WiFi ไม่อั้น</li>
                                        </ul>

                                        <p>จากนั้น ทุกๆ 5 วัน ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ<br />
                                        49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)<br />
                                        <br />
                                        เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66</p>',
                'lifetime' => 30,
                'price' => 99,
                'vat' => 6.93,
                'total_price' => 105.93,
                'package_type' => 'ต่ออายุอัตโนมัติ',
                'type' => 'รายเดือน',
                'package_code' => '*900*7430#',
                'pin' => false,
                'recommended' => true,
                'defaults' => false,
                'language' => 'th',
            ],
            [
                'package_cate_id' => 3,
                'title' => 'เน็ต 1GB',
                'details' => 'ประกันอุบัติเหตุ 100,000 บ.',
                'details_content' => '<p><strong>เน็ต 1GB<br />
                                        ประกันอุบัติเหตุ 100,000 บ.</strong></p>

                                        <ul>
                                            <li>เปิดเบอร์ใหม่ ใช้ฟรีทันที 5 วัน</li>
                                            <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                            <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                            <li>WiFi ไม่อั้น</li>
                                        </ul>

                                        <p>จากนั้น ทุกๆ 5 วัน ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ<br />
                                        49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)<br />
                                        <br />
                                        เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66</p>',
                'lifetime' => 30,
                'price' => 99,
                'vat' => 6.93,
                'total_price' => 105.93,
                'package_type' => 'ต่ออายุอัตโนมัติ',
                'type' => 'รายเดือน',
                'package_code' => '*900*7430#',
                'pin' => false,
                'recommended' => false,
                'defaults' => false,
                'language' => 'th',
            ],
            [
                'package_cate_id' => 3,
                'title' => 'เน็ต 1GB',
                'details' => 'ประกันอุบัติเหตุ 100,000 บ.',
                'details_content' => '<p><strong>เน็ต 1GB<br />
                                        ประกันอุบัติเหตุ 100,000 บ.</strong></p>

                                        <ul>
                                            <li>เปิดเบอร์ใหม่ ใช้ฟรีทันที 5 วัน</li>
                                            <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                            <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                            <li>WiFi ไม่อั้น</li>
                                        </ul>

                                        <p>จากนั้น ทุกๆ 5 วัน ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ<br />
                                        49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)<br />
                                        <br />
                                        เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66</p>',
                'lifetime' => 30,
                'price' => 99,
                'vat' => 6.93,
                'total_price' => 105.93,
                'package_type' => 'ต่ออายุอัตโนมัติ',
                'type' => 'รายเดือน',
                'package_code' => '*900*7430#',
                'pin' => false,
                'recommended' => false,
                'defaults' => false,
                'language' => 'th',
            ],
            [
                'package_cate_id' => 3,
                'title' => 'เน็ต 1GB',
                'details' => 'ประกันอุบัติเหตุ 100,000 บ.',
                'details_content' => '<p><strong>เน็ต 1GB<br />
                                        ประกันอุบัติเหตุ 100,000 บ.</strong></p>

                                        <ul>
                                            <li>เปิดเบอร์ใหม่ ใช้ฟรีทันที 5 วัน</li>
                                            <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                            <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                            <li>WiFi ไม่อั้น</li>
                                        </ul>

                                        <p>จากนั้น ทุกๆ 5 วัน ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ<br />
                                        49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)<br />
                                        <br />
                                        เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66</p>',
                'lifetime' => 30,
                'price' => 99,
                'vat' => 6.93,
                'total_price' => 105.93,
                'package_type' => 'ต่ออายุอัตโนมัติ',
                'type' => 'รายเดือน',
                'package_code' => '*900*7430#',
                'pin' => false,
                'recommended' => false,
                'defaults' => false,
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
        Schema::dropIfExists('package_products');
    }
};
