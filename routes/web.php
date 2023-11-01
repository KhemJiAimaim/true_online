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




// Route::prefix('{language}')->group(function () {
//     Route::get('/', [HomeController::class, 'index']);
//     Route::get('/home', [HomeController::class, 'mainContent'])->name('home');
//     Route::get('/menu', [HomeController::class, 'contentMore']);
//     Route::get('/catering', [HomeController::class, 'contentMore']);
//     Route::get('/gallery', [HomeController::class, 'contentMore']);
//     Route::get('/delivery', [HomeController::class, 'contentSingle']);
//     Route::get('/aboutus', [HomeController::class, 'contentSingle']);
//     Route::get('/ourlocation', [HomeController::class, 'contentSingle']);
//     Route::get('/contactus', [HomeController::class, 'contentSingle']);
//     Route::get('/book', [HomeController::class, 'contentSingle']);
// });

// Route::post('/api/booking', [HomeController::class, 'booking']);
// Route::post('/api/sendContact', [HomeController::class, 'sendContact']);

// Route::get('/', function () {
//     return view('frontend.pages.pages_1.home');
// });

Route::get('/', function () {
    return view('frontend.pages.home');
});

Route::get("/fiber", [HomeController::class, "homePage"]);
Route::get("/fiber/true_dtac", [HomeController::class, "TrueDtacPage"]);
Route::get("/fiber/detail_true_dtac", [HomeController::class, "DetailTrueDtacPage"]);
Route::get("/fiber/form_true_dtac", [HomeController::class, "FormTrueDtacPage"]);
Route::get("/fiber/home_fiber_guarantee", [HomeController::class, "FiberGuarantee"]);
Route::get("/fiber/detail_fiber_guarantee", [HomeController::class, "DetailFiberGuarantee"]);
Route::get("/fiber/router_fiber", [HomeController::class, "RouterFiber"]);
Route::get("/fiber/detail_router_fiber", [HomeController::class, "DetailFiberRouter"]);
Route::get("/fiber/SME_fiber", [HomeController::class, "SMEFiber"]);
Route::get("/fiber/detail_SME_fiber", [HomeController::class, "DetailSMEFiber"]);
Route::get("/fiber/internet_basic", [HomeController::class, "InternetBasic"]);
Route::get("/fiber/detail_internet_basic", [HomeController::class, "DetailInternetBasic"]);
Route::get("/fiber/true_visions", [HomeController::class, "TrueVisions"]);
Route::get("/fiber/detail_true_visions", [HomeController::class, "DetailTrueVisions"]);
Route::get("/fiber/internet_game", [HomeController::class, "InternetGame"]);
Route::get("/fiber/detail_internet_game", [HomeController::class, "DetailInternetGame"]);


Route::get("/thankyou ", [HomeController::class, "Thankyou"]);

// เบอร์มงคลรายเดือน
Route::get('/bermonthly', [BerLuckyMonthlyController::class, "get_product_all"]);
Route::get('/fortune', [BerLuckyMonthlyController::class, "fortune_page"]);