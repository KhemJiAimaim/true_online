<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\BerproductCategory;
use App\Models\BerproductGrade;
use App\Models\BerproductMonthly;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    public function sendErrorValidators($message, $errorMessages)
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'errorMessage' => $errorMessages
        ], 422);
    }

    public function queryAccount($id)
    {
        $account = DB::select("SELECT
                users.email,
                users.username,
                admin_roles.role_name,
                ac.profile_image,
                ac.cover_image,
                ac.admin_note,
                ac.account_id,
                ac.display_name,
                ac.admin_level,
                ac.admin_status,
                ac.language,
                ac.admin_verify_at,
                ac.updated_at
            FROM users
            INNER JOIN admin_accounts as ac ON users.id = ac.account_id
            INNER JOIN admin_roles ON admin_roles.id = ac.admin_level
            WHERE users.id = ? ", [$id]);
        return $account;
    }

    public function getAuthUser($level = 0)
    {
        $auth = $this->queryAccount(Auth::user()->id)[0];
        if (!$auth || $auth->admin_status !== 1) {
            return response()->json([
                'message' => 'error',
                'description' => "You have no permission"
            ], 409);
        }

        if ($level > 0) {
            if ($auth->admin_level > $level) {
                return response()->json([
                    'message' => 'error',
                    'description' => "You have no permission"
                ], 409);
            }
        }
        return $auth;
    }

    public function updatePriority($table, $priority)
    {
        $duplicatePriority = DB::table($table)
            ->where('priority', '=', $priority)
            ->where('delete_status', '=', 0)
            ->first();

        if ($duplicatePriority) {
            // update priority
            DB::table($table)
                ->where('priority', '>=', $priority)
                ->increment('priority', 1);
        }
    }

    public function getBenefits()
    {
        $benefits = Post::where('category', 'LIKE', '%' . ',8,' . '%')
            ->where(['status_display' => 1])
            ->orderBY('priority', 'ASC')
            ->get();

        return $benefits;
    }

    public function getPrivileges()
    {
        $privileges = Post::where('category', 'LIKE', '%' . ',9,' . '%')
            ->where(['status_display' => 1])
            ->orderBY('priority', 'ASC')
            ->get();

        return $privileges;
    }

    public function generateBer($berData)
    {

        /* ดึงข้อมูล PredictCate Want & Unwant comment */
        $this->getPredictWantUnwantArr();

        // เตรียมข้อมูล
        $pp = substr($berData['product_phone'], 3, 10);
        $improve = $this->getProductByCategoryPredict($pp);
        $grade = $this->generate_grade($berData['product_phone']);

        $result = [
            'product_improve' => $improve,
            'product_grade' => $grade,
            'product_category' => $berData['default_cate'],
            'substr' => $pp,
            'product_new' => 'yes',
        ];

        return $result;
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
        if (true) {
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

    public function getProductByCategory($product)
    {
        $reesultCate = BerproductCategory::where('bercate_id', '!=', 0)
            ->where('status', '=', true)
            ->orderBy('priority', 'ASC')
            ->get();

        foreach ($reesultCate as $cateVal) {
            $bercate = array();
            $sqlProd = array();
            $bercate[$cateVal['bercate_id']]['cate_id']  = $cateVal['bercate_id'];
            $sqlProd[$cateVal['bercate_id']]  = "";
            $sqlProd[$cateVal['bercate_id']]  .= 'SELECT  product_id,product_sold,product_phone,MID(product_phone,4, 10) as pp
														 FROM berproduct_monthlies HAVING product_sold NOT LIKE "%y%" AND ';
            $sqlProd[$cateVal['bercate_id']]  .= '(';
            $needfulArr = explode(',', $cateVal['bercate_needful']);
            foreach ($needfulArr as $nfKey => $nfVal) {
                $bercate[$cateVal['bercate_id']]['needful'][$nfKey]  = $nfVal;
                if ($nfKey != 0) {
                    $sqlProd[$cateVal['bercate_id']] .= ' OR ';
                }
                $sqlProd[$cateVal['bercate_id']]  .= ' pp LIKE "%' . $nfVal . '%" ';
            }
            $needlessArr = explode(',', $cateVal['bercate_needless']);
            if ($needlessArr[0] != '') {
                $sqlProd[$cateVal['bercate_id']]  .= ') AND (';
                foreach ($needlessArr as $nlKey => $nlVal) {
                    $bercate[$cateVal['bercate_id']]['needless'][$nlKey]  = $nlVal;
                    /* sql select product needless  */
                    if ($nlKey != 0) {
                        $sqlProd[$cateVal['bercate_id']]  .= ' AND ';
                    }
                    $sqlProd[$cateVal['bercate_id']]  .= ' pp NOT LIKE "%' . $nlVal . '%" ';
                }
            }
            $sqlProd[$cateVal['bercate_id']]  .= ')';
            $resultSlcUpdate = DB::select($sqlProd[$cateVal['bercate_id']]);
            $cateIdUpdate  =  '' . $cateVal['bercate_id'] . ',';

            $valIdIn = "";
            foreach ($resultSlcUpdate as $keySlc => $valSlc) {
                if ($keySlc != 0) {
                    $valIdIn .= ',';
                }
                $valIdIn .= $valSlc->product_id;
            }
            if ($valIdIn != "") {
                DB::update("
                    UPDATE `berproduct_monthlies`
                    SET product_category = CONCAT(product_category, :category_to_append)
                    WHERE product_id = " . $product->product_id . "
                    AND product_category NOT LIKE :category_condition
                ", [
                    'category_to_append' => $cateIdUpdate,
                    'category_condition' => "%" . $cateIdUpdate . "%"
                ]);
            }
        }
    }

}
