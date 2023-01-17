<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Dashboard View Page
    public function index()
    {
        return view('hr.dashboard');
    }

    // Employee List
    public function employeeList()
    {
        try {

        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('hr.employeeList');
    }

    // Employee Add
    public function employeeAdd()
    {
        try {
            $getdata = User::latest()->first();

            if (isset($getdata) && $getdata) {
                $incid = $getdata->id + 1;
                $num_padded = sprintf("%03d", $incid);
                $visitorID = "Gsync-" . $num_padded;
                // dd($visitorID);

            } else {
                $incid = 1;
                $num_padded = sprintf("%03d", $incid);
                $visitorID = "Gsync-" . $num_padded;
                // dd($visitorID);

            }
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('hr.employeeAdd');
    }

    // Employee Data Save
    public function employeeDataSave(Request $request)
    {
        dd($request->all());
        try {
            
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return redirect()->back()->with("success", "Admin detail is updated !");
    }
}
