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
        Schema::create('move_products', function (Blueprint $table) {
            $table->id();
            $table->integer('move_cate_id');
            $table->string('benefit_ids')->nullable()->comment('สิทธิประโยชน์');
            $table->string('title');
            $table->string('details')->nullable();
            $table->string('more_details')->nullable();
            $table->string('description')->nullable();
            $table->integer('price')->default(0)->comment('ราคาขาย/บาท');
            $table->integer('discount')->nullable()->default(0)->comment('ส่วนลด/บาท');
            $table->string('call_minutes')->comment('นาทีการโทร/นาที,ไม่จำกัด');
            $table->string('internet_volume')->comment('ปริมาณอินเทอร์เน็ต/GB,ไม่จำกัด');
            $table->string('sim_gen')->nullable()->comment('4G,5G');
            $table->string('package_options')->nullable()->comment('ตัวเลือกแพ็คเกจ');
            $table->string('thumbnail_link')->nullable();
            $table->string('thumbnail_title')->nullable();
            $table->string('thumbnail_alt')->nullable();
            $table->text('details_content')->nullable();
            $table->text('terms_content')->nullable()->comment('ข้อกำหนดและเงื่อนไข');
            $table->boolean('unlimited_wifi')->default(true);
            $table->boolean('voice_hd')->default(true);
            $table->boolean('recommended')->default(false);

            $table->boolean('delete_status')->default(false);
            $table->boolean('display')->default(true);
            $table->integer('priority')->nullable();
            $table->boolean('defaults')->default(false);
            $table->string('language')->default('th');
            $table->unique(['language', 'id']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        DB::table('move_products')->insert([
            [
                'move_cate_id' => 1,
                'title' => 'ย้ายค่ายเบอร์เดิมแพ็กแกจ Fixxy Nolimit 399',
                'details' => 'ย้ายค่ายเบอร์เดิมแพ็กแกจ Fixxy Nolimit 399',
                'benefit_ids' => ',4,',
                'price' => 99,
                'discount' => 0,
                'call_minutes' => '100',  // นาที
                'internet_volume' => '40', // GB
                'sim_gen' => '5G',
                'package_options' => 'Fixxy No Limited:399, Fixxy No Limited:499', // package option 1:price, package option 2:price
                'thumbnail_link' => 'images/Rectangle1282.png',
                'thumbnail_title' => '',
                'thumbnail_alt' => '',
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
                'terms_content' => '<p><strong>ข้อกำหนดและเงื่อนไขรายการส่งเสริมการขาย Fixxy No Limit สำหรับย้ายค่ายแบบรายเดือน</strong></p>

                                        <p>1.รายการส่งเสริมการขายนี้ สำหรับผู้สมัครใช้บริการย้ายค่ายเบอร์เดิมมาใช้ ทรูมูฟ เอช (&ldquo;ผู้ใช้บริการ&rdquo;) ของบริษัท ทรู มูฟ เอช ยูนิเวอร์แซล คอมมิวนิเคชั่น จำกัด (&ldquo;บริษัท&rdquo;) แบบระบบรายเดือน ในนามบุคคลธรรมดา ตั้งแต่วันที่ 22 กันยายน 2566 &nbsp;ถึง 30 พฤศจิกายน 2566 หรือจนกว่าจะมีการเปลี่ยนแปลง</p>

                                        <p>2.รายละเอียดรายการส่งเสริมการขาย: อัตราค่าบริการยังไม่รวมภาษีมูลค่าเพิ่ม</p>

                                        <p>2.1 รายการส่งเสริมการขาย Fixxy No Limit 399<br />
                                        สิทธิตามแพ็กเกจปกติ:<br />
                                        คิดอัตราค่าใช้บริการเหมาจ่ายขั้นต่ำรายเดือน 399 บาท ต่อเดือน ผู้ใช้บริการจะได้รับสิทธิใช้บริการ ดังนี้<br />
                                        (1)โทรทุกเครือข่ายเดือนละ 150 นาทีต่อรอบค่าบริการ&nbsp;<br />
                                        (2)บริการ 5G ที่ความเร็วสูงสุด 20 เมกะบิตต่อวินาที (Mbps) เป็นจำนวน 70 กิกะไบต์ (GB)หลังจากนั้น จะใช้ได้ไม่จำกัดปริมาณที่ความเร็วสูงสุด 1 เมกะบิตต่อวินาที (Mbps)<br />
                                        (3)บริการ Wi-Fi ที่ความเร็วสูงสุด 1 กิกกะบิตต่อวินาที (Gbps) ไม่จำกัดปริมาณการใช้งาน<br />
                                        (4)บริการ Voice Mail และ Miss Call Alert</p>

                                        <p><br />
                                        เงื่อนไขการใช้รายการส่งเสริมการขาย<br />
                                        (1)บริษัทมีสิทธิในการจำกัดการใช้งานเน็ตไม่จำกัดปริมาณการใช้งานตามแพ็กเกจที่ผู้ใช้บริการได้สมัครใช้บริการควบคู่ไปกับเลขหมายโทรศัพท์เคลื่อนที่ และโทรศัพท์เคลื่อนที่ประเภท Smart phone และ Tablet หากบริษัทตรวจพบ หรือมีการแจ้งมายังบริษัท ว่าผู้ใช้บริการ มีการใช้งานในลักษณะของการกระจายสัญญาณโมบายอินเตอร์เน็ตให้กับโทรศัพท์เคลื่อนที่ และ/หรืออุปกรณ์อื่นเพื่อร่วมใช้งานด้วย และ/หรือการกระทำอื่นๆ ในลักษณะเดียวกัน หรือคล้ายคลึงกันทุกกรณี<br />
                                        <br />
                                        (2)บริษัทมีสิทธิในการจัดการบริหารเครือข่ายตามความเหมาะสมเพื่อรักษามาตรฐานคุณภาพของบริการ และเพื่อช่วยให้ผู้ใช้บริการโดยรวมสามารถใช้งานได้อย่างมีประสิทธิภาพ โดยการจำกัดปริมาณการใช้งานของผู้ใช้บริการและความเร็วของโมบายอินเตอร์เน็ตตามความเหมาะสมในรอบบิลถัดไป ในกรณีที่บริษัทพบหรือสันนิษฐานได้ว่าผู้ใช้บริการมีการดาวน์โหลด และ/หรือ อัพโหลดไฟล์ขนาดใหญ่ หรือ การใช้งานใดๆ ที่มีการรับส่งข้อมูลในปริมาณสูงมากอย่างต่อเนื่อง ในลักษณะไม่เป็นปกติดังเช่นบุคคลทั่วไปพึงใช้งาน หรือผู้ใช้บริการมีพฤฒิกรรมการใช้งานที่มีผลต่อการใช้บริการหรือเกิดความไม่เป็นธรรม ก่อหรืออาจก่อให้เกิดความเสียหาย หรือกระทบ หรืออาจจะกระทบต่อการใช้บริการผู้ใช้บริการรายอื่น และ/หรือต่อเครือข่าย หรือการให้บริการโดยรวมของบริษัท ทั้งนี้การลดความเร็วอาจลดต่ำกว่าที่ระบุในแพ็กเกจได้<br />
                                        <br />
                                        (3)บริษัทมีสิทธิ์จำกัดการใช้งานในลักษณะ BitTorrent, การแชร์เน็ตผ่าน Hotspot, การรับส่งไฟล์ระหว่างเครื่องลูกข่ายกับเครื่องลูกข่าย (Peer 2 Peer) เช่น แอปพลิเคชั่นกล้องวงจรปิด, เกมแบบหลายผู้เล่นบางเกม หรือการรับส่งข้อมูลในปริมาณสูงผิดปกติเกินบุคคลทั่วไปพึงใช้งาน หรือมีการใช้งานที่อาจส่งผลกระทบต่อการใช้งานโดยรวม<br />
                                        <br />
                                        เงื่อนไขการใช้บริการ TrueID: สามารถใช้บริการTrueID เฉพาะบริการภายในแอปพลิเคชั่น TrueID บนโทรศัพท์เคลื่อนที่หรือแท๊บเล็ต ในกรณีที่ผู้ใช้บริการใช้ website อื่นหรือลิงค์หรือการแชร์ที่ปรากฏบนหน้าแอปพลิเคชั่นTrueID ผู้ใช้บริการจะต้องชำระค่าใช้บริการเพิ่มเติม (ถ้ามี)ตามอัตราที่ระบุในแพ็กเกจที่ผู้ใช้บริการเลือกใช้งานอยู่ ณ ขณะนั้น หรือหากในแพ็กเกจที่เลือกใช้ ไม่ได้ระบุไว้ ให้คิดค่าบริการตามเงื่อนไขที่บริษัทกำหนด<br />
                                        <br />
                                        บริการที่รวมอยู่ในแพ็กเกจ TrueID ผู้ใช้สามารถใช้งาน login และ logout สามารถใช้บริการดูทีวีสตรีมมิ่ง, หนัง, เพลง, บทความ ผ่านเมนู Exclusive, Movie, TV, Soccer, Music, Sport, Travel, Food, Game, Men, Women และ Entertainment ไม่นับรวมในการใช้งานในเมนู Privileges, Cloud และ Payment<br />
                                        <br />
                                        3. ค่าบริการส่วนเกินเหมาจ่าย คิดเพิ่มเติมจากค่าใช้บริการเหมาจ่ายรายเดือน ในอัตราดังนี้<br />
                                        3.1 โทรทุกเครือข่าย นาทีละ 1.50 บาท คิดค่าบริการเป็นรายนาที เศษของนาทีนับเป็นหนึ่งนาที<br />
                                        3.2 บริการส่งข้อความสั้น (SMS) ระหว่างโทรศัพท์เคลื่อนที่ที่ใช้และจดทะเบียนภายในประเทศ ข้อความละ 2.50 บาท<br />
                                        3.3 บริการส่งข้อความมัลติมีเดีย (MMS) ระหว่างโทรศัพท์เคลื่อนทีที่ใช้และจดทะเบียนภายในประเทศ ครั้งละ 4.50 บาท</p>',
                'unlimited_wifi' => true,
                'voice_hd' => true,
                'recommended' => true,

                'priority' => 1,
                'language' => 'th',
            ],
            [
                'move_cate_id' => 2,
                'title' => 'ย้ายค่ายเบอร์เดิมแพ็กแกจ Fixxy Nolimit 399',
                'details' => 'ย้ายค่ายเบอร์เดิมแพ็กแกจ Fixxy Nolimit 399',
                'benefit_ids' => ',4,7,',
                'price' => 99,
                'discount' => 0,
                'call_minutes' => '100',  // นาที
                'internet_volume' => '40', // GB
                'sim_gen' => '5G',
                'package_options' => 'Fixxy No Limited:399, Fixxy No Limited:499', // package option 1:price, package option 2:price
                'thumbnail_link' => 'images/Rectangle1282.png',
                'thumbnail_title' => '',
                'thumbnail_alt' => '',
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
                'terms_content' => '',
                'unlimited_wifi' => true,
                'voice_hd' => true,
                'recommended' => false,

                'priority' => 2,
                'language' => 'th',
            ],
            [
                'move_cate_id' => 3,
                'title' => 'ย้ายค่ายเบอร์เดิมแพ็กแกจ Fixxy Nolimit 399',
                'details' => 'ย้ายค่ายเบอร์เดิมแพ็กแกจ Fixxy Nolimit 399',
                'benefit_ids' => ',5,',
                'price' => 99,
                'discount' => 0,
                'call_minutes' => '100',  // นาที
                'internet_volume' => '40', // GB
                'sim_gen' => '5G',
                'package_options' => 'Fixxy No Limited:399, Fixxy No Limited:499', // package option 1:price, package option 2:price
                'thumbnail_link' => 'images/Rectangle1282.png',
                'thumbnail_title' => '',
                'thumbnail_alt' => '',
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
                'terms_content' => '',
                'unlimited_wifi' => true,
                'voice_hd' => true,
                'recommended' => false,

                'priority' => 3,
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
        Schema::dropIfExists('move_products');
    }
};
