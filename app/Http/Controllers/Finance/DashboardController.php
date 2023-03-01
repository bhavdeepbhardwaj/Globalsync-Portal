<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Employee;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Dashboard View Page
    public function index()
    {
        return view('finance.dashboard');
    }

    // Create Salary Structure
    public function createSalaryStructure()
    {
        try {
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('finance.createSalaryStructure');
    }

    // Create Pay Slip
    public function createPayslip()
    {
        try {
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('finance.createPaySlip');
    }

    // Pay Slip View
    public function paySlipView(Request $request)
    {
        // dd($request->all());
        try {
            $pay_month = $request->pay_month;
            $emp_id = $request->emp_id;
            $full_name = $request->full_name;
            $doj = $request->doj;
            $department = $request->department;
            $payment_mode = $request->payment_mode;
            $bank = $request->bank;
            $ifsc = $request->ifsc;
            $ac_no = $request->ac_no;
            $pan = $request->pan;
            $uan = $request->uan;
            $gross = $request->gross;
            $cal_days = $request->cal_days;
            $present_days = $request->present_days;
            $lv_adj = $request->lv_adj;
            $pay_days = $request->pay_days;
            $lop = $request->lop;
            $sandwich = $request->sandwich;
            $lv_bal = $request->lv_bal;
            $food_allw = $request->food_allw;
            $travel_allw = $request->travel_allw;
            $spl_allowance = $request->spl_allowance;
            $msa_check = $request->msa;
            $tsa_check = $request->tsa;
            $stack = $request->stack;
            $inc = $request->inc;
            $others = $request->others;
            $arrears = $request->arrears;
            $tds = $request->tds;
            $adv = $request->adv;
            $penalties = $request->penalties;
            $ref_bonus = $request->ref_bonus;
            $qua_incentive = $request->qua_incentive;
            $inc_install = $request->inc_install;
            $payslip_date = date_create($pay_month);
            $ddoj = date_create($doj);

            return view('finance.paySlipView', ['pay_month' => $pay_month, 'emp_id' => $emp_id, 'full_name' => $full_name, 'department' => $department, 'payment_mode' => $payment_mode, 'bank' => $bank, 'ifsc' => $ifsc, 'ac_no' => $ac_no, 'pan' => $pan, 'uan' => $uan, 'gross' => $gross, 'cal_days' => $cal_days, 'present_days' => $present_days, 'lv_adj' => $lv_adj, 'pay_days' => $pay_days, 'lop' => $lop, 'sandwich' => $sandwich, 'lv_bal' => $lv_bal, 'food_allw' => $food_allw, 'travel_allw' => $travel_allw, 'spl_allowance' => $spl_allowance, 'msa_check' => $msa_check, 'tsa_check' => $tsa_check, 'stack' => $stack, 'inc' => $inc, 'others' => $others, 'arrears' => $arrears, 'tds' => $tds, 'adv' => $adv, 'penalties' => $penalties, 'ref_bonus' => $ref_bonus, 'qua_incentive' => $qua_incentive, 'inc_install' => $inc_install, 'payslip_date' => $payslip_date, 'ddoj' => $ddoj]);
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with("error", "Something is wrong !");
        }
    }
    // All Employess Detiales
    public function allEmployess()
    {
        try {
            $emplist = Employee::where('is_deleted', '0')->select('emp_id', 'emp_desg', 'formdata', 'emp_doj', 'emp_status')->get();
            // dd($empList);

        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with("error", "Something is wrong !");
        }
        return view('finance.allEmployess', ['emplist' => $emplist]);
    }
    // View Details Employess
    public function viewDetails($empID)
    {
        try {
            $empView = Employee::where('emp_id', $empID)->first();
            $fetchFormArr = json_decode($empView->formdata, true);
            $empRoles = User::where('emp_id', $empView->emp_id)->first();
            $roleName = Role::where('id', $empRoles->role_id)->select('role_name')->first();

            $month = Attendance::where('is_deleted', 0)->where('emp_id', $empID)->orderBy('att_month')->get();
            // dd($month);

        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with("error", "Something is wrong !");
        }
        return view('finance.viewDetails', ['empView' => $empView, 'roleName' => $roleName, 'fetchFormArr' => $fetchFormArr, 'month' => $month]);
    }

    // 
    public function attendanceSheet(Request $request)
    {
        // dd($request->all());
        $empAttSheet = Attendance::where('emp_id', $request->empID)->where('att_month', $request->month)->select('data')->get()->first();
        // dd($empAttSheet);
        return Response::json($empAttSheet);
    }

    // Employee Data Edit
    public function salaryEdit($empID)
    {
        try {
            $empEdit = Employee::where('emp_id', $empID)->first();
            $userEdit = User::where('id', $empEdit->user_id)->first();
            $fetchFormArr = json_decode($empEdit->formdata, true);
            $roleName = Role::where('id', $userEdit->role_id)->select('role_name')->first();
            $deptData = \App\Models\Department::where('is_deleted', 0)->get();
            // dd($userEdit);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('finance.employeeEdit', ['empEdit' => $empEdit, 'userEdit' => $userEdit, 'fetchFormArr' => $fetchFormArr, 'roleName' => $roleName, 'deptData' => $deptData]);
    }

    // Download Payslip Employess
    public function downloadPayslip()
    {
        try {
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with("error", "Something is wrong !");
        }
        return view('finance.downloadPayslip');
    }
}
