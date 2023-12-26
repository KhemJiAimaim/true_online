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
        Schema::create('provinces', function (Blueprint $table) {
            $table->id('code');
            $table->string('name_th', 150);
            $table->string('name_en', 150);
            $table->string('name_th_short', 10);
            $table->timestamps();
        });

        $sql = "
        INSERT INTO `provinces` (`code`, `name_th`, `name_th_short`, `name_en`) VALUES
        (10, 'กรุงเทพมหานคร', 'กทม', 'Bangkok'),
        (11, 'สมุทรปราการ', 'สป', 'Samut Prakan'),
        (12, 'นนทบุรี', 'นบ', 'Nonthaburi'),
        (13, 'ปทุมธานี', 'ปท', 'Pathum Thani'),
        (14, 'พระนครศรีอยุธยา', 'อย', 'Phra Nakhon Si Ayutthaya'),
        (15, 'อ่างทอง', 'อท', 'Ang Thong'),
        (16, 'ลพบุรี', 'ลบ', 'Loburi'),
        (17, 'สิงห์บุรี', 'สห', 'Sing Buri'),
        (18, 'ชัยนาท', 'ชน', 'Chai Nat'),
        (19, 'สระบุรี', 'สบ', 'Saraburi'),
        (20, 'ชลบุรี', 'ชบ', 'Chon Buri'),
        (21, 'ระยอง', 'รย', 'Rayong'),
        (22, 'จันทบุรี', 'จบ', 'Chanthaburi'),
        (23, 'ตราด', 'ตร', 'Trat'),
        (24, 'ฉะเชิงเทรา', 'ฉท', 'Chachoengsao'),
        (25, 'ปราจีนบุรี', 'ปจ', 'Prachin Buri'),
        (26, 'นครนายก', 'นย', 'Nakhon Nayok'),
        (27, 'สระแก้ว', 'สก', 'Sa Kaeo'),
        (30, 'นครราชสีมา', 'นม', 'Nakhon Ratchasima'),
        (31, 'บุรีรัมย์', 'บร', 'Buri Ram'),
        (32, 'สุรินทร์', 'สร', 'Surin'),
        (33, 'ศรีสะเกษ', 'ศก', 'Si Sa Ket'),
        (34, 'อุบลราชธานี', 'อบ', 'Ubon Ratchathani'),
        (35, 'ยโสธร', 'ยส', 'Yasothon'),
        (36, 'ชัยภูมิ', 'ชย', 'Chaiyaphum'),
        (37, 'อำนาจเจริญ', 'อจ', 'Amnat Charoen'),
        (39, 'หนองบัวลำภู', 'นภ', 'Nong Bua Lam Phu'),
        (40, 'ขอนแก่น', 'ขก', 'Khon Kaen'),
        (41, 'อุดรธานี', 'อธ', 'Udon Thani'),
        (42, 'เลย', 'เลย', 'Loei'),
        (43, 'หนองคาย', 'นค', 'Nong Khai'),
        (44, 'มหาสารคาม', 'มค', 'Maha Sarakham'),
        (45, 'ร้อยเอ็ด', 'รอ', 'Roi Et'),
        (46, 'กาฬสินธุ์', 'กส', 'Kalasin'),
        (47, 'สกลนคร', 'สน', 'Sakon Nakhon'),
        (48, 'นครพนม', 'นพ', 'Nakhon Phanom'),
        (49, 'มุกดาหาร', 'มห', 'Mukdahan'),
        (50, 'เชียงใหม่', 'ชม', 'Chiang Mai'),
        (51, 'ลำพูน', 'ลพ', 'Lamphun'),
        (52, 'ลำปาง', 'ลป', 'Lampang'),
        (53, 'อุตรดิตถ์', 'อด', 'Uttaradit'),
        (54, 'แพร่', 'พร', 'Phrae'),
        (55, 'น่าน', 'นน', 'Nan'),
        (56, 'พะเยา', 'พย', 'Phayao'),
        (57, 'เชียงราย', 'ชร', 'Chiang Rai'),
        (58, 'แม่ฮ่องสอน', 'มส', 'Mae Hong Son'),
        (60, 'นครสวรรค์', 'นว', 'Nakhon Sawan'),
        (61, 'อุทัยธานี', 'อน', 'Uthai Thani'),
        (62, 'กำแพงเพชร', 'กพ', 'Kamphaeng Phet'),
        (63, 'ตาก', 'ตก', 'Tak'),
        (64, 'สุโขทัย', 'สท', 'Sukhothai'),
        (65, 'พิษณุโลก', 'พล', 'Phitsanulok'),
        (66, 'พิจิตร', 'พจ', 'Phichit'),
        (67, 'เพชรบูรณ์', 'พช', 'Phetchabun'),
        (70, 'ราชบุรี', 'รบ', 'Ratchaburi'),
        (71, 'กาญจนบุรี', 'กจ', 'Kanchanaburi'),
        (72, 'สุพรรณบุรี', 'สพ', 'Suphan Buri'),
        (73, 'นครปฐม', 'นป', 'Nakhon Pathom'),
        (74, 'สมุทรสาคร', 'สค', 'Samut Sakhon'),
        (75, 'สมุทรสงคราม', 'สส', 'Samut Songkhram'),
        (76, 'เพชรบุรี', 'พบ', 'Phetchaburi'),
        (77, 'ประจวบคีรีขันธ์', 'ปข', 'Prachuap Khiri Khan'),
        (80, 'นครศรีธรรมราช', 'นศ', 'Nakhon Si Thammarat'),
        (81, 'กระบี่', 'กบ', 'Krabi'),
        (82, 'พังงา', 'พง', 'Phangnga'),
        (83, 'ภูเก็ต', 'ภก', 'Phuket'),
        (84, 'สุราษฎร์ธานี', 'สฎ', 'Surat Thani'),
        (85, 'ระนอง', 'รน', 'Ranong'),
        (86, 'ชุมพร', 'ชพ', 'Chumphon'),
        (90, 'สงขลา', 'สข', 'Songkhla'),
        (91, 'สตูล', 'สต', 'Satun'),
        (92, 'ตรัง', 'ตง', 'Trang'),
        (93, 'พัทลุง', 'พท', 'Phatthalung'),
        (94, 'ปัตตานี', 'ปน', 'Pattani'),
        (95, 'ยะลา', 'ยล', 'Yala'),
        (96, 'นราธิวาส', 'นธ', 'Narathiwat'),
        (38, 'บึงกาฬ', 'บก', 'buogkan')
        ";

        DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
};
