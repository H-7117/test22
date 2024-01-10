<?php

use App\Http\Controllers\Fursa\CompanyController;
use App\Http\Controllers\Fursa\DepertmentController;
use App\Http\Controllers\Fursa\JobApplcationController;
use App\Http\Controllers\Fursa\JobController;
use App\Http\Controllers\Fursa\JobStageController;
use App\Http\Controllers\Fursa\SeekerController;
use App\Http\Controllers\Fursa\VacancyController;
use App\Models\Fursa\JobApplcation;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('Home');

Route::get('/jobPost',function(){
    return view('front.jobPosting');
})->name('JonPosting');
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard.index');

// ===============================
Route::get('/signup',function(){
    return view('front.account.signup');
})->name('signup');

Route::get('/signin',function(){
    return view('front.account.signin');
})->name('signin');
// ===============================

Route::get('/platform/roles', function () {
    return view('dashboard.table');
})->name('dashboard.table');
// =================================================================================
Route::get('/platform/roles/delete', function () {
    return view('platform.roles.delete');
})->name('platform.roles.delete');

Route::get('/platform/roles/view', function () {
    return view('platform.roles.view');
})->name('platform.roles.view');

Route::get('/platform/roles/create', function () {
    return view('platform.roles.add');
})->name('platform.roles.add');

Route::get('/platform/roles/update', function () {
    return view('platform.roles.edit');
})->name('platform.roles.edit');
// ================================================================================
Route::get('/platform/users', function () {
    return view('platform.users.index');
})->name('platform.users.index');

Route::get('/platform/users/create', function () {
    return view('platform.users.add');
})->name('platform.users.add');

Route::get('/platform/users/view', function () {
    return view('platform.users.view');
})->name('platform.users.view');
Route::get('/platform/users/update', function () {
    return view('platform.users.edit');
})->name('platform.users.edit');

Route::get('/platform/users/delete', function () {
    return view('platform.users.delete');
})->name('platform.users.delete');
// ================================================================================
Route::get('/companies/roles/companies', function () {
    return view('platform.companies.index');
})->name('platform.companies.index');

Route::get('/companies/roles/companies/view', function () {
    return view('platform.companies.view');
})->name('platform.companies.view');

Route::get('/companies/roles/companies/add', function () {
    return view('platform.companies.add');
})->name('platform.companies.add');

Route::get('/companies/roles/companies/update', function () {
    return view('platform.companies.edit');
})->name('platform.companies.update');

Route::get('/companies/roles/companies/delete', function () {
    return view('platform.companies.delete');
})->name('platform.companies.delete');

// ========================================================================
Route::get('/companies/companiesUser/index', function () {
    return view('platform.companiesUser.index');
})->name('platform.companiesUser.index');
Route::get('/companies/companiesUser/add', function () {
    return view('platform.companiesUser.add');
})->name('platform.companiesUser.add');
Route::get('/companies/companiesUser/view', function () {
    return view('platform.companiesUser.view');
})->name('platform.companiesUser.view');
Route::get('/companies/companiesUser/update', function () {
    return view('platform.companiesUser.edit');
})->name('platform.companiesUser.edit');
Route::get('/companies/companiesUser/delete', function () {
    return view('platform.companiesUser.delete');
})->name('platform.companiesUser.delete');

// ======================================================= الشركات

Route::resource('/tenant', CompanyController::class);
// Route::resource('/tenant/reject', CompanyController::class);
Route::get('/tenant/{id}/delete', 'App\Http\Controllers\Fursa\CompanyController@delete')->name('tenant.delete');
Route::get('/acceptted',[CompanyController::class,'accepted'])->name('tenant.acceptted');
Route::get('/reject',[CompanyController::class,'reject'])->name('tenant.reject');

// ======================================================= الوظائف

Route::get('/companiesJob/{id}/delete', 'App\Http\Controllers\Fursa\JobController@delete')->name('companiesJob.delete');
Route::resource('companiesJob', JobController::class);

// ======================================================= الباحث
Route::get('companies/seeker', function () {
    return view('seeker.index');
})->name('seeker.index');

Route::get('companies/seeker/add', function () {
    return view('seeker.add');
})->name('seeker.add');

Route::get('companies/seeker/edit', function () {
    return view('seeker.edit');
})->name('seeker.edit');

Route::get('companies/seeker/view', function () {
    return view('seeker.view');
})->name('seeker.view');

Route::get('companies/seeker/delete', function () {
    return view('seeker.delete');
})->name('seeker.delete');
// ====================================== vacancies
// Route::get('companies/vacancies',function(){
//     return view('vacancies.index');
// })->name('vacancies.index');

Route::get('companies/vacancies/card',function(){
    return view('vacancies.aa');
})->name('vacancies.card');

// Route::get('companies/vacancies/view',function(){
//     return view('vacancies.view');
// })->name('vacancies.view');

Route::resource('companyVacancies',VacancyController::class);
// ========================================== seeker/vacancies
Route::get('seeker/vacancies/index',function(){
    return view('seeker.vacancies.index');
})->name('seeker.vacancies.index');

Route::get('seeker/vacancies/view',function(){
    return view('seeker.vacancies.view');
})->name('seeker.vacancies.view');
// ================================ platform/seeker
// Route::get('/platform/seeker',function(){
// return view('platform.seeker.index');
// })->name('platform.seeker.index');

// Route::prefix('platform')->group(function(){

// });

Route::get('/platform/seeker',[SeekerController::class,'index'])->name('platform.seeker.index');
Route::get('/platform/seeker/create','App\Http\Controllers\Fursa\SeekerController@create')->name('platform.seeker.create');
Route::post('/platform/seeker/store', 'App\Http\Controllers\Fursa\SeekerController@store')->name('platform.seeker.store');
Route::get('/platform/seeker/edit/{id}', [SeekerController::class ,'edit'])->name('platform.seeker.edit');
Route::put('/platform/seeker/update/{id}', [SeekerController::class ,'update'])->name('platform.seeker.update');
// ============================================================================
Route::get('/depertment/{id}/delete', 'App\Http\Controllers\Fursa\DepertmentController@delete')->name('depertment.delete');
Route::resource('/depertment', DepertmentController::class);

// ==========================================

Route::get('compaines/stage',[JobStageController::class,'index'])->name('stage.index');
Route::post('compaines/stage/store',[JobStageController::class,'store'])->name('stage.store');
route::get('compaines/stage/{id}',[JobStageController::class,'show'])->name('stage.show');
route::get('compaines/stage/{id}/edit',[JobStageController::class,'edit'])->name('stage.edit');
route::put('compaines/stage/{id}/update',[JobStageController::class,'update'])->name('stage.update');
route::get('compaines/stage/{id}/delete',[JobStageController::class,'delete'])->name('stage.delete');
route::delete('compaines/stage/{id}/destroy',[JobStageController::class,'destroy'])->name('stage.destroy');
// 

Route::get('compaines/jobApplication',[JobApplcationController::class])->name('jobApplication.index');
Route::post('compaines/Application',[JobApplcationController::class,'store'])->name('Appliction.store');

