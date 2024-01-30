<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\frontapi\CartOrderController;
use App\Http\Controllers\frontapi\ContactAdminController;
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

// Route::get('/config/clear', function () {
    // \Artisan::call('cache:clear');
//     \Artisan::call('config:clear');
//     \Artisan::call('route:clear');
//     return response([
//         'message' => 'ok'
//     ]);
// });

Route::get('/', [HomeController::class,"homePage"]);

//fiber
Route::get("/fiber", [FiberController::class, "homePage"]);
Route::get("/fiber/{cate_url}", [FiberController::class, "true_dtac"]);
Route::get("/fiber/detail_true_dtac/{id}", [FiberController::class, "detail_true_dtac"]);
Route::get("/fiber/form_true_dtac/{id}", [FiberController::class, "form_true_dtac"]);
Route::get('/map', [FiberController::class, "getMap"]);
//ซิมเติมเงิน
Route::get("/prepaid_sim", [SimController::class, "prepaid_sim"]);
Route::get("/prepaid_sim/buy_sim/{id}", [SimController::class, "buy_sim"]);
Route::get("/prepaid_sim/sim_includ", [SimController::class, "sim_includ"]);
//package
Route::get("/prepaid_sim/package/{type?}", [SimController::class, "package"]);
Route::get("/prepaid_sim/buy_package/{id}", [SimController::class, "buy_package"]);

//travel
Route::get("/travel_sim", [TravelController::class, "travel_sim"]);
Route::get("/travel_sim/{cate}", [TravelController::class, "travel_sim_byCategory"]);
Route::get("/travel_sim/menu/{cate}", [TravelController::class, "travel_sim_visiting"]);
Route::get("/travel_sim_buy/{id}", [TravelController::class, "travel_sim_buy"]);

//ขอบคุณ
Route::get("/thankyou ", [HomeController::class, "thankyou"]);

// เบอร์มงคลรายเดือน
Route::get('/bermonthly', [BerLuckyMonthlyController::class, "get_product_all"]);
Route::get('/fortune/{tel}', [BerLuckyMonthlyController::class, "fortune_page"]);
Route::get('/detailber/{tel}', [BerLuckyMonthlyController::class, "detailber_page"]);

Route::get('/testexcel', [BerLuckyMonthlyController::class, "form_test_import"]);
Route::post('/readexcel', [BerLuckyMonthlyController::class, "import_by_excel"]);
Route::get('/exportexcel', [BerLuckyMonthlyController::class, "export_excel"]);

// วิธีสั่งซื้อ
Route::get('/article/{cate}', [ArticleController::class, "articlePage"]);

//ย้ายค่าย
Route::get('/move', [MoveController::class, "move"]);
Route::get('/move/{id}', [MoveController::class, "category_move"]);
// Route::get('/move/fixxynolimit', [MoveController::class, "move_fixxy"]);
// Route::get('/move/5GTogether+', [MoveController::class, "move_together"]);
// Route::get('/move/5GSuperSmart', [MoveController::class, "moveSupersmart"]);
Route::get('/movedetail/{cate}/{id}', [MoveController::class, "movenow"]);
Route::get('/movenow/form/{id}', [MoveController::class, "formMove"]);
Route::get('/termcontent/{id}', [MoveController::class, "getTermContent"]);

// ตระกร้าสินค้า
Route::get('/cartproduct', [CartController::class, "cartproduct_page"]);
Route::post('/remove-item', [CartController::class, "removeItem"]);

Route::get('/clearcart', [CartController::class, "clearCart"]);
Route::post('/addproduct/{id}', [CartController::class, "addproduct_to_cart"])->middleware('web');

/* Send FormData Controller */
Route::post('/sendformfiber', [ContactAdminController::class, "sendFormFiber"]); /* Fiber */
Route::post('/sendformmove', [ContactAdminController::class, "sendFormMove"]); /* Move */
Route::post('/sendformcontact', [ContactAdminController::class, "sendFormContact"]); /* contact */

Route::post('/confirmorder', [CartOrderController::class, "confirmOrder"]);

//สถานะส่งพัสดุ
Route::get('/delivery/{search?}', [DeliveryController::class, "dalivery"]);
