<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Facades\DB;
use App\Models\BerproductMonthly;
use App\Models\BerproductGrade;

class BerMonthlyImportClass implements ToModel, WithStartRow
{
    private $list_ber = []; // สร้างอาร์เรย์เพื่อเก็บข้อมูลที่ได้จาก Excel

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
        // dd($row);
        /* ดึงข้อมูล PredictCate Want & Unwant comment */
        $this->getPredictWantUnwantArr();

        // เตรียมข้อมูล
        $pp = substr($row[0], 3, 10);
        $improve = $this->getProductByCategoryPredict($pp);
        $grade = ($row[9] == "") ? $this->generate_grade($row[0]) : $row[9];

        if ($row[1] == "") {
            $telArray = str_split($row[0]);
            $telArray = array_map('intval', $telArray);
            $sum = array_sum($telArray);
        } else {
            $sum = $row[1];
        }

        $berproductMonthly = new BerproductMonthly([
            'product_phone' => $row[0],
            'product_sumber' => $sum,
            'product_network' =>  $row[3],
            'product_price' => $row[2],
            'product_category' => ',' . $row[4] . ',',
            'product_improve' => $improve,
            'product_pin' => $row[5] = ($row[5] == "") ? "no" : $row[5],
            'product_sold' => $row[6] = ($row[6] == "") ? "no" : $row[6],
            'product_new' => $row[7] = ($row[7] == "") ? "no" : $row[7],
            'product_comment' => $row[8],
            'product_package' => $row[9],
            'product_discount' => $row[11] = ($row[11] == "") ? 0 : $row[11],
            'product_grade' => $grade,
            'default_cate' => $row[4],
            'product_display' => "yes",
            'monthly_status' => $row[12] = ($row[12] == "") ? "no" : $row[12],
        ]);
    
        $berproductMonthly->save(); // บันทึกข้อมูล
        
        return null;
    }

    public function generate_grade($tel)
    {
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
        $total_score =  (($total_percet / 6) * 1000) / 100; // แปลงเปอร์เซ็น ให้เป็นคะแนนให้เต็ม 1000

        if ($total_percet > 0) {
            $grade = BerproductGrade::where('grade_display', 'yes')
                ->where('grade_min', '<=', $total_score)
                ->where('grade_max', '>=', $total_score)
                ->orderBy('grade_max', 'desc')
                ->first();
        } else {
            $grade = new \stdClass();
            $grade->grade_name = 'F';
        }

        return $grade->grade_name;
    }

    public function getPredictWantUnwantArr()
    {
        global $predictArr;
        $numbcates = DB::select("SELECT * FROM berpredict_numbcates ORDER BY numbcate_id ASC");
        if (!empty($numbcates)) {
            $predictArr = array();
            foreach ($numbcates as $nnn) {
                if (!isset($predictArr[$nnn->numbcate_id]['id'])) {
                    $predictArr[$nnn->numbcate_id]['id'] = $nnn->numbcate_id;
                    $predictArr[$nnn->numbcate_id]['numbcate_id'] = $nnn->numbcate_id;
                    $predictArr[$nnn->numbcate_id]['wanted'] = explode(",", $nnn->numbcate_want);
                    $predictArr[$nnn->numbcate_id]['unwanted'] = explode(",", $nnn->numbcate_unwant);
                }
            }
        }
    }

    public static function getProductByCategoryPredict($pp)
    {
        global $predictArr;
        if (isset($pp)) {
            $improve = ",";
            foreach ($predictArr as $predVal) {
                $founded = "";
                $wanted = $predVal['wanted'];
                $unwanted = $predVal['unwanted'];
                if (!empty($unwanted)) {
                    foreach ($unwanted as $unw) {
                        if ($unw == "") continue;
                        $founded = strpos($pp, $unw);
                        if ($founded) break;
                    }
                }
                if (!empty($wanted) && $founded == "") {
                    foreach ($wanted as $wan) {
                        if ($wan == "") continue;
                        $required = strpos($pp, $wan);
                        if ($required) {
                            $improve .= $predVal['id'] . ",";
                            break;
                        }
                    }
                }
            }
        }
        return $improve;
    }
}
