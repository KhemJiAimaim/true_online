<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\backoffice\BookingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

\Artisan::call('cache:clear');
// \Artisan::call('route:clear');

// Route::get('/config/clear', function () {
//     \Artisan::call('cache:clear');
//     \Artisan::call('config:clear');
//     \Artisan::call('route:clear');
//     return response([
//         'message' => 'ok'
//     ]);
// });

Route::get('/', [HomeController::class,"homePage"]);

//fiber
Route::get("/fiber", [FiberController::class, "homePage"]);
Route::get("/fiber/true_dtac/{cate_url}", [FiberController::class, "true_dtac"]);
Route::get("/fiber/detail_true_dtac/{id}", [FiberController::class, "detail_true_dtac"]);
Route::get("/fiber/form_true_dtac/{id}", [FiberController::class, "form_true_dtac"]);

//ซิมเติมเงิน
Route::get("/prepaid_sim", [SimController::class, "prepaid_sim"]);
Route::get("/prepaid_sim/buy_sim", [SimController::class, "buy_sim"]);
Route::get("/prepaid_sim/sim_includ", [SimController::class, "sim_includ"]);
//package
Route::get("/prepaid_sim/package/{type?}", [SimController::class, "package"]);
Route::get("/prepaid_sim/buy_package/{id}", [SimController::class, "buy_package"]);

//travel
Route::get("/travel_sim", [TravelController::class, "travel_sim"]);
Route::get("/travel_sim/travelling", [TravelController::class, "travel_sim_travelling"]);
Route::get("/travel_sim/visiting", [TravelController::class, "travel_sim_visiting"]);
Route::get("/travel_sim/buy", [TravelController::class, "travel_sim_buy"]);

//ขอบคุณ
Route::get("/thankyou ", [HomeController::class, "thankyou"]);

// เบอร์มงคลรายเดือน
Route::get('/bermonthly', [BerLuckyMonthlyController::class, "get_product_all"]);
Route::get('/fortune/{tel}', [BerLuckyMonthlyController::class, "fortune_page"]);
Route::get('/detailber/{tel}', [BerLuckyMonthlyController::class, "detailber_page"]);
Route::get('/cartproduct/{tel}', [BerLuckyMonthlyController::class, "cartproduct_page"]);

Route::get('/testexcel', [BerLuckyMonthlyController::class, "form_test_import"]);
Route::post('/readexcel', [BerLuckyMonthlyController::class, "import_by_excel"]);
Route::get('/exportexcel', [BerLuckyMonthlyController::class, "export_excel"]);

// วิธีสั่งซื้อ
Route::get('/howtobuy/{cate}', [HowToBuyController::class, "howtobuyPage"]);

//ย้ายค่าย
Route::get('/move', [MoveController::class, "move"]);
Route::get('/move/fixxynolimit', [MoveController::class, "move_fixxy"]);
Route::get('/move/5GTogether+', [MoveController::class, "move_together"]);
Route::get('/move/5GSuperSmart', [MoveController::class, "moveSupersmart"]);
Route::get('/move/movenow', [MoveController::class, "movenow"]);
Route::get('/move/movenow/form', [MoveController::class, "formMove"]);