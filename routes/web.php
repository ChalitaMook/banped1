<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ComplainantController;
use App\Http\Controllers\BossController;
use App\Models\Complaint;
use App\Models\Problem_type;




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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/redirects',[HomeController::class,"index"])->name('redirects');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/complainant/dashboard', function () {
    $item1 = Problem_type::get();
    $items2 = Complaint::paginate(6);
    return view('complainant.dashboard',compact('item1','items2'));
})->middleware(['auth:complainant'])->name('complainant.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/problem_type', 'pb_type_tb');
    Route::get('/problem_type_form', 'pb_type_form');
    Route::post('/problem_type_form_save','pb_type_form_save');
    Route::get('/problem_type_form_edit/{id}','pb_type_form_edit');
    Route::post('/problem_type_form_update/{id}','pb_type_form_update');
    Route::get('/problem_type_delete/{id}','pb_type_delete');

    Route::get('/agency', 'agency_tb');
    Route::get('/agency_form', 'agency_form');
    Route::post('/agency_form_save','agency_form_save');
    Route::get('/agency_form_edit/{id}','agency_form_edit');
    Route::post('/agency_form_update/{id}','agency_form_update');
    Route::get('/agency_delete/{id}','agency_delete');

    Route::get('/user', 'user_tb');
    Route::get('/user_form', 'user_form');
    Route::post('/user_form_save','user_form_save');
    Route::get('/user_form_edit/{id}','user_form_edit');
    Route::post('/user_form_update/{id}','user_form_update');
    Route::get('/user_delete/{id}','user_delete');

});

Route::controller(ComplainantController::class)->group(function () {
    Route::get('/profile1', 'profile');
    Route::get('/profile_edit/{id}', 'profile_edit');
    Route::post('/profile_update/{id}','profile_update');

    Route::get('/complaint_form', 'complaint_form');
    Route::get('/complaint_table', 'complaint_table');
    Route::post('/complaint_save','complaint_save');
    Route::get('/complainant/operation/view/{id}','operationview');


    Route::get('/rate_table','rate_table');
    Route::get('/rate_form/{id}','rate_form');
    Route::post('/rate_form_save','rate_form_save');


});

Route::controller(OfficerController::class)->group(function () {
    Route::get('/officer/complaint_table', 'complaint_table');
    Route::get('/change_status/{id}','change_status');
    Route::get('/operation/{id}','operation');
    Route::get('/operation/view/{id}','operationview');
    Route::post('/operation_update/{id}','operation_update');


});

Route::controller(BossController::class)->group(function(){
    Route::get('/boss_page','BossPage');
    Route::get('/report_boss','ReportBoss');
    Route::get('/rate_table1','rate_report');
    Route::get('/pb_report/{id}','pb_report');


});


require __DIR__.'/auth.php';

require __DIR__.'/complainantauth.php';
