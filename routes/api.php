<?php

namespace App\Http\Controllers\backoffice;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('backoffice/v1')->group(function () {

    Route::post('login', [AuthBackOfficeController::class, 'loginAccount']);
    Route::post('register', [AuthBackOfficeController::class, 'registerAccount']);
    Route::post('forget-password', [AuthBackOfficeController::class, 'onSubmitForgetPassword']);
    Route::post('reset-password', [AuthBackOfficeController::class, 'onResetPassword']);

    Route::middleware('auth:api')->group(function () {
        Route::post('account/settings', [AuthBackOfficeController::class, 'getAccountSettings']);
        Route::post('account/token/invoke/current', [AuthBackOfficeController::class, 'revokeCurrentToken']);
        Route::post('account/token/invoke/token_id', [AuthBackOfficeController::class, 'revokeTokenByID']);
        Route::post('account/token/invoke/all', [AuthBackOfficeController::class, 'revokeAllToken']);

        /* Dashboard Page */
        Route::get('booking/data', [BookingController::class, 'index']);
        Route::patch('booking/approve', [BookingController::class, 'bookingApprove']);
        Route::delete('booking/delete/{id}', [BookingController::class, 'bookingDelete']);
        Route::post('bookingsetting/create', [BookingController::class, 'createBookingSetting']);

        /* Slide Page */
        Route::get('slide/data', [SlideController::class, 'index']);
        Route::get('slide/data/{id}', [SlideController::class, 'getSlideById']);
        Route::post('slide/create', [SlideController::class, 'createSlide']);
        Route::post('slide/update/{id}', [SlideController::class, 'updateSlideById']);
        Route::delete('slide/{language}/{token}', [SlideController::class, 'deleteWebInfoByInfoId']);

        /* Infomation Page */
        Route::get('webinfo/data', [WebInfoController::class, 'index']);
        Route::post('webinfo/details', [WebInfoController::class, 'updateWebDetails']);
        Route::delete('webinfo/image/{language}/{position}', [WebInfoController::class, 'deleteImage']);
        Route::post('webinfo/create', [WebInfoController::class, 'createWebInfo']);
        Route::post('webinfo/token/{token}', [WebInfoController::class, 'addWebInfo']);
        Route::patch('webinfo/token/{token}', [WebInfoController::class, 'editWebInfo']);
        Route::patch('webinfo/display/toggle', [WebInfoController::class, 'toggleDisplayByToken']);
        Route::delete('webinfo/{language}/{token}', [WebInfoController::class, 'deleteWebInfoByInfoId']);

        /* Category Page */
        Route::get('category/data', [CategoryController::class, 'index']);
        Route::post('category/create', [CategoryController::class, 'createCategory']);
        Route::post('category/update/{id}', [CategoryController::class, 'updateCategory']);
        Route::delete('category/{language}/{token}', [CategoryController::class, 'deleteCategory']);
        Route::get('category/menu', [CategoryController::class, 'getCateMenu']);

        /* Content Page */
        Route::get('content/data', [PostController::class, 'index']);
        Route::post('content/create', [PostController::class, 'createContent']);
        Route::post('content/update/{id}', [PostController::class, 'updateContent']);
        Route::delete('content/{language}/{token}', [PostController::class, 'deleteContent']);

        /* Admin Page */
        Route::get('admin/data', [AdminController::class, 'index']);
        Route::post('admin/edit', [AdminController::class, 'editAdminAccount']);
        Route::delete('admin/{language}/{token}', [AdminController::class, 'deleteAdminAccount']);

        /* Language Config Page */
        Route::get('language/data', [LanguageConfigController::class, 'index']);
        Route::post('language/create', [LanguageConfigController::class, 'createLanguage']);
        Route::patch('language/edit', [LanguageConfigController::class, 'editLanguage']);
        Route::delete('language/delete/{param}', [LanguageConfigController::class, 'deleteLanguage']);

        /* Configuaration Page */
        Route::get('config/data', [ConfigController::class, 'index']);
        Route::delete('config/language/token/{token}', [ConfigController::class, 'deleteConfigLanguage']);
        Route::post('config/language/create', [ConfigController::class, 'createLanguage']);
        Route::post('config/data_type/create', [ConfigController::class, 'createDataType']);
        Route::delete('config/data_type/token/{token}', [ConfigController::class, 'deleteConfigDataType']);
        Route::post('config/ad_type/create', [ConfigController::class, 'createAdType']);
        Route::patch('config/ad_type/edit', [ConfigController::class, 'editAdType']);
        Route::delete('config/ad_type/token/{token}', [ConfigController::class, 'deleteConfigAdType']);

        Route::post('config/upload/manual', [ConfigController::class, 'uploadManual']);

        /* Utility */
        Route::post('ckeditor/upload/image', [UtilController::class, 'ckeditorUploadImage']);

        /* Mail box */
        Route::get('mail/data', [MailInboxController::class, 'index']);
        Route::patch('mail/updatepin/{id}', [MailInboxController::class, 'updatePin']);

        /* ProductController */
        Route::prefix('berluckycate/')->group(function () {
            Route::get('data', [BerLuckyController::class, 'index']);
            Route::post('create', [BerLuckyController::class, 'createBerluckyCate']);
            Route::post('update/{id}', [BerLuckyController::class, 'updateBerluckyCate']);
            Route::patch('updatestatus/{id}', [BerLuckyController::class, 'updateStatusCate']);
            Route::patch('updatepin/{id}', [BerLuckyController::class, 'updatePinCate']);
            Route::patch('updatedisplay/{id}', [BerLuckyController::class, 'updateDisplayCate']);
            Route::delete('delete/{id}', [BerLuckyController::class, 'deleteBerluckyCate']);
        });

        /* ber lucky */
        Route::prefix('berlucky/')->group(function () {
            Route::get('data', [BerLuckyController::class, 'productIndex']);
            Route::post('create', [BerLuckyController::class, 'createBerlucky']);
            Route::post('update/{id}', [BerLuckyController::class, 'updateBerlucky']);
            Route::patch('updatepin/{id}', [BerLuckyController::class, 'updatePinProduct']);
            Route::patch('updatesold/{id}', [BerLuckyController::class, 'updateSoldProduct']);
            Route::patch('updatedisplay/{id}', [BerLuckyController::class, 'updateDisplayProduct']);
            Route::patch('updatemonthlystatus/{id}', [BerLuckyController::class, 'updateMonthlyStatus']);
            Route::delete('delete/{id}', [BerLuckyController::class, 'deleteBerlucky']);

            /* Excel */
            Route::post('importexcel', [ExcelController::class, 'excelImportBer']);
            Route::get('exportexcel', [ExcelController::class, 'excelExportBer']);
        });

        /* Prediction */
        Route::prefix('predict/')->group(function () {
            /* number cate */
            Route::get('numbcate/data', [BerpredictController::class, 'numbCateIndex']);
            Route::post('numbcate/create', [BerpredictController::class, 'createPredictNumbCate']);
            Route::post('numbcate/update/{id}', [BerpredictController::class, 'updatePredictNumbCate']);
            Route::patch('numbcate/updatedisplay/{id}', [BerpredictController::class, 'updateDisplayNumbCate']);
            Route::delete('numbcate/delete/{id}', [BerpredictController::class, 'deletePredictNumbCate']);

            /* grade */
            Route::get('grade/data', [BerpredictController::class, 'gradeIndex']);
            Route::post('grade/update/{id}', [BerpredictController::class, 'updatePredictGrade']);

            /* predict ber */
            Route::get('ber/data', [BerpredictController::class, 'berIndex']);
            Route::post('ber/update/{id}', [BerpredictController::class, 'updatePredictBer']);

            /* predict ber */
            Route::get('sumber/data', [BerpredictController::class, 'sumberIndex']);
            Route::patch('sumber/updatepin/{id}', [BerpredictController::class, 'updatePinSumber']);
            Route::post('sumber/update/{id}', [BerpredictController::class, 'updatePredictSumber']);

        });

        // Fiber
        Route::prefix('fiber/')->group(function () {
            Route::get('data', [FiberController::class, 'fiberData']);
            Route::put('product/update', [FiberController::class, 'updateFiberProduct']);
            Route::post('product/create', [FiberController::class, 'createFiberProduct']);
            Route::delete('product/delete/{id}', [FiberController::class, 'deleteFiberProduct']);
        });

        // Package
        Route::prefix('package/')->group(function () {
            // Category
            Route::get('cate/data', [PackageController::class, 'packageCateData']);
            Route::patch('cate/updatepin/{id}', [PackageController::class, 'updatePinCate']);
            Route::patch('cate/updatedisplay/{id}', [PackageController::class, 'updateDisplayCate']);
            Route::post('cate/create', [PackageController::class, 'createPackageCate']);
            Route::post('cate/update/{id}', [PackageController::class, 'updatePackageCate']);
            Route::delete('cate/delete/{id}', [PackageController::class, 'deletePackageCate']);

            // Product
            Route::get('product/index', [PackageController::class, 'packageIndex']);
            Route::post('product/create', [PackageController::class, 'createpackageProduct']);
            Route::patch('product/updatedisplay/{id}', [PackageController::class, 'updateDisplayProduct']);
            Route::patch('product/updaterec/{id}', [PackageController::class, 'updateRecommendedProduct']);
            Route::delete('product/delete/{id}', [PackageController::class, 'deletePackageProduct']);
            Route::put('product/update/{id}', [PackageController::class, 'updatePackageProduct']);
        });

        // Move
        Route::prefix('move/')->group(function () {
            //Category
            Route::get('cate/data', [MoveController::class, 'moveCateIndex']);
            Route::post('cate/create', [MoveController::class, 'createMoveCate']);
            Route::patch('cate/updatepin/{id}', [MoveController::class, 'updatePinCate']);
            Route::patch('cate/updatedisplay/{id}', [MoveController::class, 'updateDisplayCate']);
            Route::post('cate/update/{id}', [MoveController::class, 'updateMoveCate']);
            Route::delete('cate/delete/{id}', [MoveController::class, 'deleteMoveCate']);

            //Product
            Route::get('product/data', [Movecontroller::class, 'moveProductIndex']);
            Route::patch('product/updaterec/{id}', [MoveController::class, 'updateRecProduct']);
            Route::patch('product/updatedisplay/{id}', [MoveController::class, 'updateDisplayProduct']);
            Route::post('product/create', [MoveController::class, 'createMoveProduct']);
            Route::post('product/update/{id}', [MoveController::class, 'updateMoveProduct']);
            Route::delete('product/delete/{id}', [MoveController::class, 'deleteMoveProduct']);
        });

        // Travel
        Route::prefix('travel/')->group(function () {
            //Sim
            Route::get('data', [TravelController::class, 'index']);
            Route::post('create', [TravelController::class, 'createTravelSim']);
            Route::post('update/{id}', [TravelController::class, 'updateTravelSim']);
            Route::patch('updaterec/{id}', [TravelController::class, 'updateRecProduct']);
            Route::patch('updatedisplay/{id}', [TravelController::class, 'updateDisplayProduct']);
            Route::delete('delete/{id}', [TravelController::class, 'deleteTravelSim']);
        });

        // Prepaid cate
        Route::prefix('prepaidcate/')->group(function () {

            Route::get('data', [PrepaidController::class, 'cateIndex']);
            Route::post('create', [PrepaidController::class, 'createPrepaidCate']);
            Route::post('update/{id}', [PrepaidController::class, 'updatePrepaidCate']);
            Route::patch('updatepin/{id}', [PrepaidController::class, 'updatePinCate']);
            Route::patch('updatedisplay/{id}', [PrepaidController::class, 'updateDisplayCate']);
            Route::delete('delete/{id}', [PrepaidController::class, 'deletePrepaidCate']);
        });

        // Prepaid sim
        Route::prefix('prepaidsim/')->group(function () {
            Route::get('data', [PrepaidController::class, 'simIndex']);
            Route::post('create', [PrepaidController::class, 'createPrepaidSim']);
            Route::post('update/{id}', [PrepaidController::class, 'updatePrepaidSim']);
            Route::patch('updaterec/{id}', [PrepaidController::class, 'updateRecProduct']);
            Route::patch('updatedisplay/{id}', [PrepaidController::class, 'updateDisplaySim']);
            Route::delete('delete/{id}', [PrepaidController::class, 'deletePrepaidSim']);
        });
    });
});
