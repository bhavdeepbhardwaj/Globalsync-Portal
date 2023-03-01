<?php

use App\Http\Controllers\SuperAdmin\DashboardController as SuperAdminDashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Hr\DashboardController as HrDashboardController;
use App\Http\Controllers\Finance\DashboardController as FinanceDashboardController;
use App\Http\Controllers\Manager\DashboardController as ManagerDashboardController;
use App\Http\Controllers\Employee\DashboardController as EmployeeDashboardController;
use App\Http\Controllers\Demo\DashboardController as DemoDashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::group(['middleware' => 'PreventBackHistory'], function () {
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ********************************************* SuperAdmin Routes Start ********************************************* //
Route::group(['as' => 'superadmin.', 'prefix' => 'SuperAdmin', 'middleware' => ['superAdmin', 'auth', 'PreventBackHistory']], function () {

    // Dashboard
    Route::get('/', [SuperAdminDashboardController::class, 'index']);
    Route::get('dashboard', [SuperAdminDashboardController::class, 'index'])->name('dashboard');
});
// ********************************************* SuperAdmin Routes End ********************************************* //



// ********************************************* Admin Routes Start ********************************************* //
Route::group(['as' => 'admin.', 'prefix' => 'Admin', 'middleware' => ['admin', 'auth', 'PreventBackHistory']], function () {

    // Dashboard
    Route::get('/', [AdminDashboardController::class, 'index']);
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
});
// ********************************************* Admin Route End ********************************************* //



// ********************************************* HR Routes Start ********************************************* //
Route::group(['as' => 'hr.', 'prefix' => 'HR', 'middleware' => ['hr', 'auth', 'PreventBackHistory']], function () {

    // Dashboard
    Route::get('/', [HrDashboardController::class, 'index']);
    Route::get('dashboard', [HrDashboardController::class, 'index'])->name('dashboard');

    // Employe List
    Route::get('emp-list', [HrDashboardController::class, 'employeeList'])->name('employee-list');
    // Employee Add
    Route::get('emp-add', [HrDashboardController::class, 'employeeAdd'])->name('employee-add');
    // Employee Data Add
    Route::post('emp-data-save', [HrDashboardController::class, 'employeeDataSave'])->name('employee-data-save');
    // Employee Data View Details
    Route::get('emp-view-details/{id}', [HrDashboardController::class, 'employeeView'])->name('view-details');
    // Employee Data Edit Details
    Route::get('emp-edit-details/{id}', [HrDashboardController::class, 'employeeEdit'])->name('edit-details');
    // Employee Data Update Details
    Route::post('emp-update', [HrDashboardController::class, 'employeeUpdate'])->name('update-details');
    // Bulk Employee Upload
    Route::post('emp-import', [HrDashboardController::class, 'importEmployee'])->name('importEmployee');
    // Employee Attendance 
    Route::get('emp-attendance', [HrDashboardController::class, 'empAttendance'])->name('attendance');
    // Manual Attendance
    Route::get('manual-attendance', [HrDashboardController::class, 'manualAttendance'])->name('manual-attendance');
    // Details Attendance Modal POPUP
    Route::get('popUpDetailsAttendance', [HrDashboardController::class, 'popUpDetailsAttendance'])->name('popUpDetailsAttendance');
    // Manual Attendance Save
    Route::post('manual-attendance-save', [HrDashboardController::class, 'manualAttendanceSave'])->name('manual-attendance-save');
    // View Single Attendance
    Route::get('emp-view-attendance/{id?}/{parameter?}', [HrDashboardController::class, 'viewAttendance'])->name('viewAttendance');
    // Bulk Attendance
    Route::get('emp-bulk-attendance', [HrDashboardController::class, 'bulkAttendance'])->name('bulk-attendance');

    Route::get('apiAttendance', [HrDashboardController::class, 'apiAttendance']);


    // JSON Formated save data
    Route::post('employeeDataJsonSave', [HrDashboardController::class, 'employeeDataJsonSave'])->name('employeeDataJsonSave');
});
// ********************************************* HR Route End ********************************************* //



// ********************************************* Finance Routes Start ********************************************* //
Route::group(['as' => 'finance.', 'prefix' => 'Finance', 'middleware' => ['finance', 'auth', 'PreventBackHistory']], function () {

    // Dashboard
    Route::get('/', [FinanceDashboardController::class, 'index']);
    Route::get('dashboard', [FinanceDashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'PayRoll'], function () {
    });

    // Create Salary Structure Route
    Route::get('/', [FinanceDashboardController::class, 'createSalaryStructure']);
    // Create Salary Structure Route
    Route::get('createSalaryStructure', [FinanceDashboardController::class, 'createSalaryStructure'])->name('createSalaryStructure');
    // create Employee PaySlip
    Route::get('createPayslip', [FinanceDashboardController::class, 'createPayslip'])->name('createPayslip');
    // PaySlip View
    Route::post('paySlipView', [FinanceDashboardController::class, 'paySlipView'])->name('paySlipView');
    // Employess
    Route::get('allEmployess', [FinanceDashboardController::class, 'allEmployess'])->name('allEmployess');
    // View Details Employee
    Route::get('viewDetails/{id}', [FinanceDashboardController::class, 'viewDetails'])->name('viewDetails');
    // Month's Attendance Sheet
    Route::get('attendanceSheet', [FinanceDashboardController::class, 'attendanceSheet'])->name('attendanceSheet');
    // Employee Data Edit Details
     Route::get('editDetails/{id}', [FinanceDashboardController::class, 'salaryEdit'])->name('editDetails');
    // Download PaySlip
    Route::get('Download-PaySlip', [FinanceDashboardController::class, 'downloadPayslip'])->name('downloadPayslip');
});
// ********************************************* Finance Route End ********************************************* //



// ********************************************* Manager Routes Start ********************************************* //
Route::group(['as' => 'manager.', 'prefix' => 'Manager', 'middleware' => ['manager', 'auth', 'PreventBackHistory']], function () {

    // Dashboard
    Route::get('/', [ManagerDashboardController::class, 'index']);
    Route::get('dashboard', [ManagerDashboardController::class, 'index'])->name('dashboard');
});
// ********************************************* Manager Route End ********************************************* //



// ********************************************* Employee Routes Start ********************************************* //
Route::group(['as' => 'employee.', 'prefix' => 'Employee', 'middleware' => ['employee', 'auth', 'PreventBackHistory']], function () {

    // Dashboard
    Route::get('/', [EmployeeDashboardController::class, 'index']);
    Route::get('dashboard', [EmployeeDashboardController::class, 'index'])->name('dashboard');
});
// ********************************************* Employee Route End ********************************************* //


// ********************************************* Demo Routes Start ********************************************* //
Route::group(['as' => 'demo.', 'prefix' => 'Demo', 'middleware' => ['demo', 'auth', 'PreventBackHistory']], function () {

    // Dashboard
    Route::get('/', [DemoDashboardController::class, 'index']);
    Route::get('dashboard', [DemoDashboardController::class, 'index'])->name('dashboard');
});
// ********************************************* Demo Route End ********************************************* //

// ********************************************* Pages Route Start ********************************************* //
Route::get('approval', [HomeController::class, 'approvalEmployee'])->name('approval');
// ********************************************* Pages Route End ********************************************* //
