<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Facades\DB;
use App\Models\BerproductMonthly;
use App\Models\BerproductGrade;

class BerMonthlyImportClass implements ToModel, WithStartRow
{
    /**
    * @return int
    */
    public function startRow(): int
    {
        return 2; // กำหนดให้เริ่มต้นที่บรรทัดที่ 2
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        // เตรียมข้อมูล
        $improve = "";
        $vip = ($row[5] == "")?"no":$row[5];
        $sold = ($row[6] == "")?"no":$row[6];
        $grade = ($row[9] == "")?$this->generate_grade($row[0]):$row[9];

        if($row[1] == "") {
            $telArray = str_split($row[0]);
            $telArray = array_map('intval', $telArray);
            $sum = array_sum($telArray); 
        } else {
            $sum = $row[1];
        }

        return new BerproductMonthly([
            // 'product_id' => $row, 
            'product_phone' => $row[0], 
            'product_sumber' => $sum, 
            'product_price' => $row[2], 
            'product_category' => $row[4], 
            'product_improve' => $improve, 
            'product_pin' => $vip,
            'product_sold' => $sold, 
            'product_new' => $row[7], 
            'product_comment' => $row[8], 
            'product_package' => "1,2,5,4", 
            'product_hot' => "no", 
            'product_discount' => $row[10], 
            'product_grade' => $grade, 
            'product_display' => "yes",
        ]);
    }

    public function generate_grade($tel) {
        $sub_tel = substr($tel, 3, 7);
        if (strlen($sub_tel) == 7) {
            $pos[1] = substr($sub_tel, 0, 2);
            $pos[2] = substr($sub_tel, 1, 2);
            $pos[3] = substr($sub_tel, 2, 2);
            $pos[4] = substr($sub_tel, 3, 2);
            $pos[5] = substr($sub_tel, 4, 2);
            $pos[6] = substr($sub_tel, 5, 2);

            $prophecies = DB::select("
                    SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[1] UNION ALL 
                    SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[2] UNION ALL 
                    SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[3] UNION ALL 
                    SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[4] UNION ALL 
                    SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[5] UNION ALL 
                    SELECT * FROM `berpredict_prophecies` WHERE `prophecy_numb` = $pos[6] ");
        }

        $total_percet = 0;
        foreach ($prophecies as $prophe) {
            $total_percet += $prophe->prophecy_percent;
        }

        if($total_percet > 0) {
            $grade = BerproductGrade::where('grade_display', 'yes')
                ->where('grade_min', '<=', $total_percet)
                ->where('grade_max', '>=', $total_percet)
                ->orderBy('grade_max', 'desc')
                ->first();
        } else {
            $grade = new \stdClass();
            $grade->grade_name = 'F';
        }

        return $grade;
    }


}
