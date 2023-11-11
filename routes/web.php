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

Route::get('/', function () {
    return view('frontend.pages.home');
});

//fiber
Route::get("/fiber", [FiberController::class, "homePage"]);
Route::get("/fiber/true_dtac", [FiberController::class, "true_dtac"]);
Route::get("/fiber/detail_true_dtac", [FiberController::class, "detail_true_dtac"]);
Route::get("/fiber/form_true_dtac", [FiberController::class, "form_true_dtac"]);
Route::get("/fiber/home_fiber_guarantee", [FiberController::class, "fiber_guarantee"]);
Route::get("/fiber/detail_fiber_guarantee", [FiberController::class, "detail_fiber_guarantee"]);
Route::get("/fiber/router_fiber", [FiberController::class, "fiber_router"]);
Route::get("/fiber/detail_router_fiber", [FiberController::class, "detail_fiber_router"]);
Route::get("/fiber/SME_fiber", [FiberController::class, "sme_fiber"]);
Route::get("/fiber/detail_SME_fiber", [FiberController::class, "detail_sme_fiber"]);
Route::get("/fiber/internet_basic", [FiberController::class, "internet_basic"]);
Route::get("/fiber/detail_internet_basic", [FiberController::class, "detail_internet_basic"]);
Route::get("/fiber/true_visions", [FiberController::class, "true_visions"]);
Route::get("/fiber/detail_true_visions", [FiberController::class, "detail_true_visions"]);
Route::get("/fiber/internet_game", [FiberController::class, "internet_games"]);
Route::get("/fiber/detail_internet_game", [FiberController::class, "detail_internet_game"]);

//ซิมเติมเงิน
Route::get("/prepaid_sim", [SimController::class, "prepaid_sim"]);
Route::get("/prepaid_sim/buy_sim", [SimController::class, "buy_sim"]);
Route::get("/prepaid_sim/sim_includ", [SimController::class, "sim_includ"]);
//package
Route::get("/prepaid_sim/package ", [SimController::class, "package"]);
Route::get("/prepaid_sim/buy_package", [SimController::class, "buy_package"]);

//travel
Route::get("/travel_sim", [TravelController::class, "travel_sim"]);
Route::get("/travel_sim/travelling", [TravelController::class, "travel_sim_travelling"]);
Route::get("/travel_sim/visiting", [TravelController::class, "travel_sim_visiting"]);

//ขอบคุณ
Route::get("/thankyou ", [HomeController::class, "thankyou"]);

// เบอร์มงคลรายเดือน
Route::get('/bermonthly', [BerLuckyMonthlyController::class, "get_product_all"]);
Route::get('/fortune/{tel}', [BerLuckyMonthlyController::class, "fortune_page"]);
Route::get('/detailber/{tel}', [BerLuckyMonthlyController::class, "detailber_page"]);
Route::get('/cartproduct/{tel}', [BerLuckyMonthlyController::class, "cartproduct_page"]);

// วิธีสั่งซื้อ
Route::get('/howtobuy/{cate}', [HowToBuyController::class, "howtobuyPage"]);

//ย้ายค่าย
Route::get('/move', [MoveController::class, "move"]);
Route::get('/move/fixxynolimit', [MoveController::class, "move_fixxy"]);
Route::get('/move/5GTogether+', [MoveController::class, "move_together"]);
Route::get('/move/5GSuperSmart', [MoveController::class, "move_super_smart"]);
Route::get('/move/movenow', [MoveController::class, "movenow"]);