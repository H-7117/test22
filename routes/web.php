<?php

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


Route::get('/dashboard/table', function () {
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
Route::get('/platform/companies/companies', function () {
    return view('platform.companies.index');
})->name('platform.companies.index');

Route::get('/platform/companies/companies/view', function () {
    return view('platform.companies.view');
})->name('platform.companies.view');

Route::get('/platform/companies/companies/add', function () {
    return view('platform.companies.add');
})->name('platform.companies.add');

Route::get('/platform/companies/companies/update', function () {
    return view('platform.companies.edit');
})->name('platform.companies.update');

Route::get('/platform/companies/companies/delete', function () {
    return view('platform.companies.delete');
})->name('platform.companies.delete');
// ========================================================================
Route::get('/platform/companiesUser/index', function () {
    return view('platform.companiesUser.index');
})->name('platform.companiesUser.index');
Route::get('/platform/companiesUser/add', function () {
    return view('platform.companiesUser.add');
})->name('platform.companiesUser.add');
Route::get('/platform/companiesUser/view', function () {
    return view('platform.companiesUser.view');
})->name('platform.companiesUser.view');
Route::get('/platform/companiesUser/update', function () {
    return view('platform.companiesUser.edit');
})->name('platform.companiesUser.edit');
Route::get('/platform/companiesUser/delete', function () {
    return view('platform.companiesUser.delete');
})->name('platform.companiesUser.delete');
// ======================================================= الشركات
Route::get('tenant', function () {
    return view('tenant.index');
})->name('tenant.index');

Route::get('tenant/add', function () {
    return view('tenant.add');
})->name('tenant.add');

Route::get('tenant/edit', function () {
    return view('tenant.edit');
})->name('tenant.edit');

Route::get('tenant/view', function () {
    return view('tenant.view');
})->name('tenant.view');

Route::get('tenant/delete', function () {
    return view('tenant.delete');
})->name('tenant.delete');

// ======================================================= الوظائف
Route::get('job', function () {
    return view('job.index');
})->name('job.index');

Route::get('job/add', function () {
    return view('job.add');
})->name('job.add');

Route::get('job/edit', function () {
    return view('job.edit');
})->name('job.edit');

Route::get('job/view', function () {
    return view('job.view');
})->name('job.view');

Route::get('job/delete', function () {
    return view('job.delete');
})->name('job.delete');

// ======================================================= الباحث
Route::get('seeker', function () {
    return view('seeker.index');
})->name('seeker.index');

Route::get('seeker/add', function () {
    return view('seeker.add');
})->name('seeker.add');

Route::get('seeker/edit', function () {
    return view('seeker.edit');
})->name('seeker.edit');

Route::get('seeker/view', function () {
    return view('seeker.view');
})->name('seeker.view');

Route::get('seeker/delete', function () {
    return view('seeker.delete');
})->name('seeker.delete');
// ====================================== vacancies
Route::get('vacancies',function(){
    return view('vacancies.index');
})->name('vacancies.index');
Route::get('vacancies/card',function(){
    return view('vacancies.card');
})->name('vacancies.card');
Route::get('vacancies/view',function(){
    return view('vacancies.view');
})->name('vacancies.view');