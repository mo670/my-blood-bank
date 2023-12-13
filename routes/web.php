<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\PatientController;
use App\Http\Controllers\backend\DonarController;
use App\Http\Controllers\AuthController;


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


Route::group(['prefix' => 'app'], function () {

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/submitlogin', [AuthController::class, 'submitLogin'])->name('submitlogin');


Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function (){
         Route::get('/master', [DonarController::class, 'home'])->name('master');
         Route::get('/logout', [AuthController::class,'logout'])->name('logout');

Route::get('/allPatients', [PatientController::class, 'allPatients'])->name('allPatients');
        Route::get('/patient', [PatientController::class, 'createpatient'])->name('create.patient');
        Route::post('/patient-save', [PatientController::class, 'savePatient'])->name('patient.save');
        Route::get('/patient-edit/{id}', [PatientController::class, 'edit'])->name('patient.edit');
        Route::put('/patient-update/{id}', [PatientController::class, 'updatePatient'])->name('patient.update');
        Route::get('/patient-delete/{id}', [PatientController::class, 'deletePatient'])->name('patient.delete');

// donar routes
        Route::get('/donar-form', [DonarController::class, 'donarForm'])->name('donar.form');
        Route::get('/all-donars', [DonarController::class, 'allDonars'])->name('all.donar');
        Route::post('/create-donar', [DonarController::class, 'createDonar'])->name('create.donar');
        // Route::get('/donar-delete/{id}', [DonarController::class, 'deleteDonar'])->name('delete.donar');
        // Route::get('/donar-status/{id}/{status}', [DonarController::class, 'status'])->name('donar.status');
});
});