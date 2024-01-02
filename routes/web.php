<?php

use App\Http\Controllers\Fursa\CompanyController;
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
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard.index');


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
// Route::get('platform/tenant', function () {
//     return view('tenant.index');
// })->name('tenant.index');

// Route::get('platform/tenant/add', function () {
//     return view('tenant.add');
// })->name('tenant.add');

// Route::get('platform/tenant/edit', function () {
//     return view('tenant.edit');
// })->name('tenant.edit');

// Route::get('platform/tenant/view', function () {
//     return view('tenant.view');
// })->name('tenant.view');

// Route::get('platform/tenant/delete', function () {
//     return view('tenant.delete');
// })->name('tenant.delete');





Route::resource('/tenant', CompanyController::class);
Route::get('/tenant/{id}/delete', 'App\Http\Controllers\Fursa\CompanyController@delete')->name('tenant.delete');
























// ======================================================= الوظائف
Route::get('companies/job', function () {
    return view('job.index');
})->name('job.index');

Route::get('companies/job/add', function () {
    return view('job.add');
})->name('job.add');

Route::get('companies/job/edit', function () {
    return view('job.edit');
})->name('job.edit');

Route::get('companies/job/view', function () {
    return view('job.view');
})->name('job.view');

Route::get('companies/job/delete', function () {
    return view('job.delete');
})->name('job.delete');

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
Route::get('companies/vacancies',function(){
    return view('vacancies.index');
})->name('vacancies.index');

Route::get('companies/vacancies/card',function(){
    return view('vacancies.card');
})->name('vacancies.card');

Route::get('companies/vacancies/view',function(){
    return view('vacancies.view');
})->name('vacancies.view');

// ========================================== seeker/vacancies
Route::get('seeker/vacancies/index',function(){
    return view('seeker.vacancies.index');
})->name('seeker.vacancies.index');

Route::get('seeker/vacancies/view',function(){
    return view('seeker.vacancies.view');
})->name('seeker.vacancies.view');
// ================================ platform/seeker
Route::get('/platform/seeker',function(){
return view('platform.seeker.index');
})->name('platform.seeker.index');