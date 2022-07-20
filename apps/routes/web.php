<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeTenantController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\DashboardSuperAdminController;
use App\Models\SuperAdmin;
use App\Models\Gedung;

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

// use App\Http\Controllers\SuperAdminController;
// use App\Http\Controllers\GedungController;
// use App\Http\Controllers\LantaiController;
// use App\Http\Controllers\DashboardSuperAdminController;
// use App\Models\SuperAdmin;
// use App\Models\Lantai;
// use App\Models\Gedung;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('superadmin.index');
});

Route::get('/superadmin',function(){
    return view ('superadmin.index');

});

Route::get('/kelolagedung',function(){
    return view ('superadmin.kelolagedung');

});

Route::get('/kelolausermarketing',function(){
    return view ('superadmin.kelolausermarketing');

});

Route::get('/kelolauserteknik',function(){
    return view ('superadmin.kelolauserteknik');

});

Route::get('/kelolauserkeuangan',function(){
    return view ('superadmin.kelolauserkeuangan');

});

Route::get('/create-userteknik',function(){
    return view ('superadmin.create-userteknik');

});

Route::get('/create-usermarketing',function(){
    return view ('superadmin.create-usermarketing');

});

Route::get('/create-kelolagedung',function(){
    return view ('superadmin.create-kelolagedung');

});

Route::get('/create-kelolalantai',function(){
    return view ('superadmin.create-kelolalantai');

});

Route::get('/create-userkeuangan',function(){
    return view ('superadmin.create-userkeuangan');

});

Route::get('/edit-userteknik',function(){
    return view ('superadmin.edit-userteknik');

});

Route::get('/edit-usermarketing',function(){
    return view ('superadmin.edit-usermarketing');

});

Route::get('/edit-userkeuangan',function(){
    return view ('superadmin.edit-userkeuangan');

});

Route::get('/edit-kelolalantai',function(){
    return view ('superadmin.edit-kelolalantai');

});

Route::get('/kelolalantai', function () {
    return view('superadmin.kelolalantai');
});



/* GRADE TENANT */
/* View Grade Tenant */
Route::get('/gradetenant', [GradeTenantController::class, 'index'])->name('gradetenant');

/* Create Grade Tenant */
Route::get('/create_gradetenant', [GradeTenantController::class, 'create_gradetenant'])->name('create_gradetenant');
Route::post('/insert_data_gradetenant', [GradeTenantController::class, 'insert_data_gradetenant'])->name('insert_data_gradetenant');

/* Update Grade Tenant */
Route::get('/view_gradetenant/{id}', [GradeTenantController::class, 'view_gradetenant'])->name('view_gradetenant');
Route::post('/update_gradetenant/{id}', [GradeTenantController::class, 'update_gradetenant'])->name('update_gradetenant');

/* Delete Gradetenant */
Route::get('/delete_gradetenant/{id}', [GradeTenantController::class, 'delete_gradetenant'])->name('delete_gradetenant');
