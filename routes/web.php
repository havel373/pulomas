
<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
//Superadmin
use App\Http\Controllers\Superadmin\LantaiController;
use App\Http\Controllers\Superadmin\GedungController;
use App\Http\Controllers\Superadmin\RuangController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\DashboardSuperAdminController;
use App\Http\Controllers\Marketing\DataStandmeterController;
use App\Http\Controllers\Marketing\DataTenantController as MarketingDataTenantController;
use App\Http\Controllers\Superadmin\AdditionalServiceController;
use App\Http\Controllers\Superadmin\GradeTenantController;
use App\Http\Controllers\Superadmin\OvertimeController;
use App\Http\Controllers\Superadmin\RekeningController;
use App\Http\Controllers\Superadmin\UserKeuanganController;
use App\Http\Controllers\Superadmin\UserMarketingController;
use App\Http\Controllers\Superadmin\UserTeknikController;
use App\Http\Controllers\Superadmin\UserTenantController;
use App\Http\Controllers\Teknik\StandmeterController;
use App\Http\Controllers\Teknik\DataTenantController as TeknikDataTenantController;
use App\Http\Controllers\Teknik\TarifListrikController;
use App\Http\Controllers\Tenant\BillingController;
use App\Http\Controllers\Tenant\PembayaranController;
use App\Http\Controllers\Tenant\SewaController;
use App\Http\Controllers\WebController;
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
// use App\Http\Controllers\DashboardSuperAdminController;
// use App\Models\SuperAdmin;
// use App\Models\Lantai;
// use App\Models\Gedung;

Route::prefix('auth')->name('auth.')->group(function () {
    Route::get('', [AuthController::class, 'index'])->name('index');
    Route::post('login', [AuthController::class, 'do_login'])->name('login');
    Route::get('logout', [AuthController::class, 'do_logout'])->name('logout');
});

Route::get('/', function () {
    return redirect()->route('auth.index');
});

Route::get('/dashboard', [WebController::class, 'dashboard'])->name('dashboard');

Route::get('/superadmin', function () {
    return view('superadmin.index');
});

Route::get('asset/{asset}', [GedungController::class, 'getAsset'])->name('asset.get');
Route::get('ruang/{gedung}/getLantai', [RuangController::class, 'getLantai'])->name('lantai.get');

Route::resource('/gedung', GedungController::class);
Route::resource('/lantai', LantaiController::class);
Route::post('lantai/get_list', [LantaiController::class, 'get_list'])->name('lantai.get_list');
Route::post('lantai/get_service_charge', [LantaiController::class, 'get_service_charge'])->name('lantai.get_service_charge');
Route::post('lantai/get_service_charge_sendiri', [LantaiController::class, 'get_service_charge_sendiri'])->name('lantai.get_service_charge_sendiri');
Route::post('lantai/get_harga', [LantaiController::class, 'get_harga'])->name('lantai.get_harga');
Route::resource('/ruang', RuangController::class);
Route::resource('/marketing', UserMarketingController::class);
Route::resource('/teknik', UserTeknikController::class);
Route::resource('/keuangan', UserKeuanganController::class);
Route::resource('/tenant', UserTenantController::class);
Route::resource('/grade', GradeTenantController::class);
Route::resource('/additional-service', AdditionalServiceController::class);
Route::resource('/overtime', OvertimeController::class);
Route::resource('/rekening', RekeningController::class);



// Tenant
Route::resource('/billing', BillingController::class);
Route::resource('/sewa', SewaController::class);
Route::resource('/pembayaran', PembayaranController::class);

// Marketing
Route::resource('/data-tenant', MarketingDataTenantController::class);
Route::resource('/data-standmeter', DataStandmeterController::class);

// Teknik
Route::resource('/standmeter', StandmeterController::class);
Route::resource('/tarif-listrik', TarifListrikController::class);
Route::resource('/teknik-data-tenant', TeknikDataTenantController::class);

Route::get('/kelolausermarketing', function () {
    return view('superadmin.kelolausermarketing');
});

Route::get('/kelolauserteknik', function () {
    return view('superadmin.kelolauserteknik');
});

Route::get('/kelolauserkeuangan', function () {
    return view('superadmin.kelolauserkeuangan');
});

Route::get('/create-userteknik', function () {
    return view('superadmin.create-userteknik');
});

Route::get('/create-usermarketing', function () {
    return view('superadmin.create-usermarketing');
});

Route::get('/create-kelolagedung', function () {
    return view('superadmin.create-kelolagedung');
});

Route::get('/create-userkeuangan', function () {
    return view('superadmin.create-userkeuangan');
});

Route::get('/edit-userteknik', function () {
    return view('superadmin.edit-userteknik');
});

Route::get('/edit-usermarketing', function () {
    return view('superadmin.edit-usermarketing');
});

Route::get('/edit-userkeuangan', function () {
    return view('superadmin.edit-userkeuangan');
});

// Route::get('/edit-kelolalantai',function(){
//     return view ('superadmin.edit-kelolalantai');

// });

// Route::get('/kelolalantai', function () {
//     return view('superadmin.kelolalantai');
// });

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
