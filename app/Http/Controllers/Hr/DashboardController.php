<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use App\Imports\EmployeeImport;
use App\Models\Attendance;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Json;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;

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
            $emplist = Employee::where('is_deleted', '0')->select('emp_id', 'emp_desg', 'formdata', 'emp_doj', 'emp_status')->get();
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('hr.employeeList', ['emplist' => $emplist]);
    }

    // Employee Add
    public function employeeAdd()
    {
        try {
            $departments = Department::where('is_deleted', '0')->get();
            $roles = Role::where('is_deleted', '0')->get();
            // $getdata = User::where('is_deleted', '0')->where('role_id', '6')->select('id','emp_id')->first();
            $getdata = User::count();
            $user_id = User::all()->last()->id;
            // dd($user_id);
            // dd($getdata);

            if (isset($getdata) && $getdata) {
                $incid = $getdata + 1;
                $num_padded = sprintf("%03d", $incid);
                $employeeID = "GSYNC" . $num_padded;
                // dd($employeeID);

            } else {
                $incid = 1;
                $num_padded = sprintf("%03d", $incid);
                $employeeID = "GSYNC" . $num_padded;
                // dd($employeeID);

            }
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('hr.employeeAdd', ['employeeID' => $employeeID, 'departments' => $departments, 'roles' => $roles, 'user_id' => $user_id]);
    }

    // Employee Data Save
    public function employeeDataSave(Request $request)
    {
        // dd($request->all());
        try {
            $this->validate($request, [
                // Employee Credentials
                'email' => 'email|required|unique:users',
                'password' => 'required|min:8',

                // Employee Status
                'emp_id' => 'required',
                'role_id' => 'required',
                'emp_status' => 'required',
                'country_type' => 'required',
                'user_id' => 'required',
                // 'emp_id'                     => 'required',
                // 'emp_email'                  => 'required',
                // 'emp_status'                 => 'required',
                // 'country_type'               => 'required',

                // Allowances
                'emp_food' => 'required',
                'emp_travel' => 'required',
                'emp_spl' => 'required',
                'emp_meal' => 'required',
                'emp_cab' => 'required',

                // Incentives & Deductions
                'emp_stinc' => 'required',
                'emp_inc' => 'required',
                'emp_other' => 'required',

                // Employee Details
                // file
                // 'emp_pic'                    => 'required',
                'emp_name' => 'required',
                'emp_doj' => 'required',
                'emp_desg' => 'required',
                'emp_dept' => 'required',
                'gender' => 'required',
                'emp_pan' => 'required',
                // 'emp_uan'                    => 'required',
                // emp_esi'                     => 'required',
                // 'nick_name'                  => 'required',
                'joining_month' => 'required',
                // 'date_of_hitting'            => 'required',
                // 'rejoing_on'                 => 'required',
                // 'date_of_confirmation'       => 'required',
                // 'ageing'                     => 'required',
                // Payment Details
                'emp_paymode' => 'required',
                'emp_bank' => 'required',
                'emp_ifsc' => 'required',
                // 'transport_r_a'              => 'required',
                'emp_acc' => 'required',
                'emp_gsal' => 'required',
                'annual_ctc' => 'required',
                'in_hand_salary_with_stack' => 'required',

                // Employee Journey
                // 'performer_month'            => 'required',
                'line_manager' => 'required',
                // 'type_of_attrition'          => 'required',
                // 'pip_issue_date'             => 'required',
                // 'date_of_verbal_warning'     => 'required',
                // 'no_verbal_warning'          => 'required',
                // 'date_of_written_warning'    => 'required',
                // 'no_of_warning'              => 'required',
                // 'reason_of_verbal_warning'   => 'required',
                // 'reason_of_warning'          => 'required',
                // file
                // 'appraisal_letter'           => 'required',
                // 'appraisal_1'                => 'required',
                // 'appraisal_2'                => 'required',
                // 'appraisal_3'                => 'required',
                // 'appraisal_4'                => 'required',
                // Employee Education
                // 'ssc'                        => 'required',
                // 'hsc'                        => 'required',
                // 'graduation'                 => 'required',
                // 'experience_relieving'       => 'required',

                // Employee Family Details
                'father_name' => 'required',
                'nominee_details' => 'required',
                'relation' => 'required',
                'address' => 'required',
                // 'total_member'               => 'required',

                // Employee Personal Details
                'marital_status' => 'required',
                'dob' => 'required',
                'primary_email' => 'required',
                'per_address_h_no' => 'required',
                'per_lacality_building' => 'required',
                'per_area' => 'required',
                'per_district' => 'required',
                'per_state' => 'required',
                'per_post_code' => 'required',
                // 'present_address_h_no'       => 'required',
                // 'lacality_building'          => 'required',
                // 'area'                       => 'required',
                // 'district'                   => 'required',
                // 'state'                      => 'required',
                // 'post_code'                  => 'required',
                'aadhaar' => 'required',
                'blood_group' => 'required',
                'emy_contact_no' => 'required',
                'emy_contact_relation' => 'required',
                'emy_contact_email' => 'required',
                // 'total_bank'                 => 'required',
                'phone' => 'required',
                'mobile' => 'required',
                'mob_link_uan_no' => 'required',
                // file
                // 'salary_slip'                => 'required',
                // 'bank_statement'             => 'required',
                // 'cancel_cheque'              => 'required',

                // Exit & Description
                // 'emp_exitdate'               => 'required',
                // 'exit_formalities'           => 'required',
                // 'reason_of_leaving'          => 'required',
                // 'fnf'                        => 'required',
                // 'emp_desp'                   => 'required',
            ]);

            $user = new User();
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role_id = $request->role_id;
            $user->emp_id = $request->emp_id;
            $user->emp_status = $request->emp_status;
            $user->country_type = $request->country_type;

            $user->save();

            $data = $request->all();

            $input['token'] = date('Y-m-d H:i:s');
            $input['data'] = json_encode($data);

            $my_var = json_decode($input['data'], true); // convert it to an array.

            $appraisal_letter = null;
            $appraisal_1 = null;
            $appraisal_2 = null;
            $appraisal_3 = null;
            $appraisal_4 = null;
            $ssc = null;
            $hsc = null;
            $graduation = null;
            $salary_slip = null;
            $bank_statement = null;
            $cancel_cheque = null;
            $experience_relieving = null;
            $emp_pic = null;

            if ($request->emp_pic) {
                $emp_pic = time() . '-' . $request->emp_pic->getClientOriginalName();
                $request->emp_pic->move(public_path('Web/Images/Employee-Images/'), $emp_pic);
            }
            if ($request->appraisal_letter) {
                $appraisal_letter = time() . '-' . $request->appraisal_letter->getClientOriginalName();
                $request->appraisal_letter->move(public_path('Web/PDF/Appraisal/'), $appraisal_letter);
            }

            if ($request->appraisal_1) {
                $appraisal_1 = time() . '-' . $request->appraisal_1->getClientOriginalName();
                $request->appraisal_1->move(public_path('Web/PDF/Appraisal-1/'), $appraisal_1);
            }
            if ($request->appraisal_2) {
                $appraisal_2 = time() . '-' . $request->appraisal_2->getClientOriginalName();
                $request->appraisal_2->move(public_path('Web/PDF/Appraisal-2/'), $appraisal_2);
            }
            if ($request->appraisal_3) {
                $appraisal_3 = time() . '-' . $request->appraisal_3->getClientOriginalName();
                $request->appraisal_3->move(public_path('Web/PDF/Appraisal-3/'), $appraisal_3);
            }
            if ($request->appraisal_4) {
                $appraisal_4 = time() . '-' . $request->appraisal_4->getClientOriginalName();
                $request->appraisal_4->move(public_path('Web/PDF/Appraisal-4/'), $appraisal_4);
            }
            if ($request->ssc) {
                $ssc = time() . '-' . $request->ssc->getClientOriginalName();
                $request->ssc->move(public_path('Web/PDF/SSS/'), $ssc);
            }
            if ($request->hsc) {
                $hsc = time() . '-' . $request->hsc->getClientOriginalName();
                $request->hsc->move(public_path('Web/PDF/HSC/'), $hsc);
            }
            if ($request->graduation) {
                $graduation = time() . '-' . $request->graduation->getClientOriginalName();
                $request->graduation->move(public_path('Web/PDF/Graduation/'), $graduation);
            }
            if ($request->salary_slip) {
                $salary_slip = time() . '-' . $request->salary_slip->getClientOriginalName();
                $request->salary_slip->move(public_path('Web/PDF/Salay-Slip/'), $salary_slip);
            }
            if ($request->bank_statement) {
                $bank_statement = time() . '-' . $request->bank_statement->getClientOriginalName();
                $request->bank_statement->move(public_path('Web/PDF/Bank-Statement/'), $bank_statement);
            }
            if ($request->cancel_cheque) {
                $cancel_cheque = time() . '-' . $request->cancel_cheque->getClientOriginalName();
                $request->cancel_cheque->move(public_path('Web/PDF/Cancel-Cheque/'), $cancel_cheque);
            }
            if ($request->experience_relieving) {
                $experience_relieving = time() . '-' . $request->experience_relieving->getClientOriginalName();
                $request->experience_relieving->move(public_path('Web/PDF/Experience-Relieving/'), $experience_relieving);
            }

            unset($my_var["email"], $my_var["password"], $my_var["role_id"], $my_var["emp_id"], $my_var["emp_status"], $my_var["country_type"], $my_var["emp_pic"], $my_var["appraisal_letter"], $my_var["appraisal_1"], $my_var["appraisal_2"], $my_var["appraisal_3"], $my_var["appraisal_4"], $my_var["ssc"], $my_var["hsc"], $my_var["graduation"], $my_var["salary_slip"], $my_var["bank_statement"], $my_var["cancel_cheque"], $my_var["experience_relieving"], $my_var["user_id"]);

            // $empimg = [
            //     'emp_pic' => $emp_pic
            // ];
            // array_merge($my_var,array('emp_pic'=>$emp_pic));
            // dd($my_var,$emp_pic,$empimg);
            $json = json_encode($my_var);
            // dd($json);
            Employee::create([
                'user_id' => $user->id,
                'emp_id' => $user->emp_id,
                'emp_status' => $user->emp_status,
                'country_type' => $user->country_type,
                'emp_email' => $user->email,
                'formdata' => $json,
                'emp_pic' => $emp_pic,
                'appraisal_letter' => $appraisal_letter,
                'appraisal_1' => $appraisal_1,
                'appraisal_2' => $appraisal_2,
                'appraisal_3' => $appraisal_3,
                'appraisal_4' => $appraisal_4,
                'ssc' => $ssc,
                'hsc' => $hsc,
                'graduation' => $graduation,
                'salary_slip' => $salary_slip,
                'bank_statement' => $bank_statement,
                'cancel_cheque' => $cancel_cheque,
                'experience_relieving' => $experience_relieving,

            ]);
            // Json::create($input);

            return redirect()->back()->with("success", "Employee is Now Add Successfully  !");
            // dd($user);

        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    // Employee Save Data Json Format
    public function employeeDataJsonSave(Request $request)
    {

        $data = $request->all();

        $input['token'] = date('Y-m-d H:i:s');
        $input['data'] = json_encode($data);
        Json::create($input);

        return redirect()->back()->with("success", "Admin detail is updated !");

        // dd($input);
    }

    // Employee Data View
    public function employeeView($empID)
    {
        try {
            $empView = Employee::where('emp_id', $empID)->first();

            $fetchFormArr = json_decode($empView->formdata, true);
            $empRoles = User::where('emp_id', $empView->emp_id)->first();
            $roleName = Role::where('id', $empRoles->role_id)->select('role_name')->first();
            // dd($roleName);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('hr.employeeView', ['empView' => $empView, 'roleName' => $roleName, 'fetchFormArr' => $fetchFormArr]);
    }
    // Employee Data Edit
    public function employeeEdit($empID)
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
        return view('hr.employeeEdit', ['empEdit' => $empEdit, 'userEdit' => $userEdit, 'fetchFormArr' => $fetchFormArr, 'roleName' => $roleName, 'deptData' => $deptData]);
    }

    // Employee Data Update
    public function employeeUpdate(Request $request)
    {
        // dd($request->emp_meal);
        try {

            $this->validate($request, [
                // 'email' => 'required',
                // 'password'                          => 'required',
                'emp_id' => 'required',
                'role_id' => 'required',
                'emp_status' => 'required',
                'country_type' => 'required',
                'user_id' => 'required',
            ]);

            User::where('id', $request->user_id)->update([
                // 'email' => $request->email,
                // 'password'                  => bcrypt($request->password),
                'role_id' => $request->role_id,
                'emp_id' => $request->emp_id,
                'emp_status' => $request->emp_status,
                'country_type' => $request->country_type,
            ]);

            $data = $request->all();

            $input['token'] = date('Y-m-d H:i:s');
            $input['data'] = json_encode($data);

            $my_var = json_decode($input['data'], true); // convert it to an array.

            $fetchEmpData = Employee::where('user_id', $request->user_id)->first();

            if ($request->emp_pic) {
                $emp_pic = time() . '-' . $request->emp_pic->getClientOriginalName();
                $request->emp_pic->move(public_path('Web/Images/Employee-Images/'), $emp_pic);
            } else {
                $emp_pic = $fetchEmpData->emp_pic;
            }

            if ($request->appraisal_letter) {
                $appraisal_letter = time() . '-' . $request->appraisal_letter->getClientOriginalName();
                $request->appraisal_letter->move(public_path('Web/PDF/Appraisal/'), $appraisal_letter);
            } else {
                $appraisal_letter = $fetchEmpData->appraisal_letter;
            }

            if ($request->appraisal_1) {
                $appraisal_1 = time() . '-' . $request->appraisal_1->getClientOriginalName();
                $request->appraisal_1->move(public_path('Web/PDF/Appraisal-1/'), $appraisal_1);
            } else {
                $appraisal_1 = $fetchEmpData->appraisal_1;
            }

            if ($request->appraisal_2) {
                $appraisal_2 = time() . '-' . $request->appraisal_2->getClientOriginalName();
                $request->appraisal_2->move(public_path('Web/PDF/Appraisal-2/'), $appraisal_2);
            } else {
                $appraisal_2 = $fetchEmpData->appraisal_2;
            }

            if ($request->appraisal_3) {
                $appraisal_3 = time() . '-' . $request->appraisal_3->getClientOriginalName();
                $request->appraisal_3->move(public_path('Web/PDF/Appraisal-3/'), $appraisal_3);
            } else {
                $appraisal_3 = $fetchEmpData->appraisal_3;
            }

            if ($request->appraisal_4) {
                $appraisal_4 = time() . '-' . $request->appraisal_4->getClientOriginalName();
                $request->appraisal_4->move(public_path('Web/PDF/Appraisal-4/'), $appraisal_4);
            } else {
                $appraisal_4 = $fetchEmpData->appraisal_4;
            }

            if ($request->ssc) {
                $ssc = time() . '-' . $request->ssc->getClientOriginalName();
                $request->ssc->move(public_path('Web/PDF/SSS/'), $ssc);
            } else {
                $ssc = $fetchEmpData->ssc;
            }

            if ($request->hsc) {
                $hsc = time() . '-' . $request->hsc->getClientOriginalName();
                $request->hsc->move(public_path('Web/PDF/HSC/'), $hsc);
            } else {
                $hsc = $fetchEmpData->hsc;
            }

            if ($request->graduation) {
                $graduation = time() . '-' . $request->graduation->getClientOriginalName();
                $request->graduation->move(public_path('Web/PDF/Graduation/'), $graduation);
            } else {
                $graduation = $fetchEmpData->graduation;
            }

            if ($request->salary_slip) {
                $salary_slip = time() . '-' . $request->salary_slip->getClientOriginalName();
                $request->salary_slip->move(public_path('Web/PDF/Salay-Slip/'), $salary_slip);
            } else {
                $salary_slip = $fetchEmpData->salary_slip;
            }

            if ($request->bank_statement) {
                $bank_statement = time() . '-' . $request->bank_statement->getClientOriginalName();
                $request->bank_statement->move(public_path('Web/PDF/Bank-Statement/'), $bank_statement);
            } else {
                $bank_statement = $fetchEmpData->bank_statement;
            }

            if ($request->cancel_cheque) {
                $cancel_cheque = time() . '-' . $request->cancel_cheque->getClientOriginalName();
                $request->cancel_cheque->move(public_path('Web/PDF/Cancel-Cheque/'), $cancel_cheque);
            } else {
                $cancel_cheque = $fetchEmpData->cancel_cheque;
            }

            if ($request->experience_relieving) {
                $experience_relieving = time() . '-' . $request->experience_relieving->getClientOriginalName();
                $request->experience_relieving->move(public_path('Web/PDF/Experience-Relieving/'), $experience_relieving);
            } else {
                $experience_relieving = $fetchEmpData->experience_relieving;
            }

            unset($my_var["email"], $my_var["password"], $my_var["role_id"], $my_var["emp_id"], $my_var["emp_status"], $my_var["country_type"], $my_var["emp_pic"], $my_var["appraisal_letter"], $my_var["appraisal_1"], $my_var["appraisal_2"], $my_var["appraisal_3"], $my_var["appraisal_4"], $my_var["ssc"], $my_var["hsc"], $my_var["graduation"], $my_var["salary_slip"], $my_var["bank_statement"], $my_var["cancel_cheque"], $my_var["experience_relieving"], $my_var["user_id"]);

            $json = json_encode($my_var);
            // dd($json);
            Employee::where('user_id', $request->user_id)->update([
                'user_id' => $request->user_id,
                'emp_id' => $request->emp_id,
                'emp_name' => $request->emp_name,
                'emp_status' => $request->emp_status,
                'country_type' => $request->country_type,
                'emp_email' => $request->email,
                'formdata' => $json,
                'emp_pic' => $emp_pic,
                'appraisal_letter' => $appraisal_letter,
                'appraisal_1' => $appraisal_1,
                'appraisal_2' => $appraisal_2,
                'appraisal_3' => $appraisal_3,
                'appraisal_4' => $appraisal_4,
                'ssc' => $ssc,
                'hsc' => $hsc,
                'graduation' => $graduation,
                'salary_slip' => $salary_slip,
                'bank_statement' => $bank_statement,
                'cancel_cheque' => $cancel_cheque,
                'experience_relieving' => $experience_relieving,

            ]);
            return redirect()->back()->with("success", "Employee detail is updated !");
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    // Bulk Employee Upload
    public function importEmployee()
    {
        Excel::import(new EmployeeImport, request()->file('file'));
        return back();
    }

    // Employee Attendance
    public function empAttendance()
    {
        try {
            $getEmpAtte = Attendance::where('is_deleted', 0)->select('emp_id', 'att_month', 'data', 'totalDay', 'presentDay')->get();
            // print_r($data);
            return view('hr.attendance', ['getEmpAtte' => $getEmpAtte]);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    // Details Attendance Modal POPUP
    public function popUpDetailsAttendance(Request $request)
    {
        // dd($request->all());
        $empDetail = Attendance::where('emp_id', $request->empID)->where('att_month', $request->month)->select('emp_id', 'att_month', 'data')->get()->first();
        // dd($empDetail);
        return Response::json($empDetail);
    }

    // Manual Attendance
    public function manualAttendance()
    {
        try {
            $getdata = User::where('is_deleted', 0)->where('emp_status', 1)->where('role_id', 6)->select('emp_id')->get();
            // dd($getdata);
            return view('hr.manualattendance', ['getdata' => $getdata]);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    // Manual Attendance
    public function manualAttendanceSave(Request $request)
    {
        try {
            $this->validate($request, [
                'emp_id'            => 'required',
                'att_month'         => 'required',
            ]);

            $data = $request->all();
            $input['token'] = date('Y-m-d H:i:s');
            $input['data'] = json_encode($data);

            $json = json_decode($input['data'], true);
            $totalDay = 0;
            $presentDay = 0;
            $ab = 0;
            $late = 0;
            $wfoP = 0;
            $wfhP = 0;
            $wfoHD = 0;
            $wfhHD = 0;
            $upl = 0;
            $ph = 0;
            $bl = 0;
            $wo = 0;
            $sd = 0;

            foreach ($json['status'] as $jsonvalue) {
                if ($jsonvalue != null) {
                    $totalDay++;
                }
            }

            foreach ($json['status'] as $jsonvalue) {
                if ($jsonvalue != null && ($jsonvalue == 'WFO-P' || $jsonvalue == 'WFH-P' || $jsonvalue == 'WFO-HD' || $jsonvalue == 'WFH-HD' || $jsonvalue == 'PH' || $jsonvalue == 'LATE' || $jsonvalue == 'BL' || $jsonvalue == 'UPL' || $jsonvalue == 'W/O' || $jsonvalue == 'SD')) {
                    $presentDay++;
                }
                if ($jsonvalue == 'WFO-P') {
                    $wfoP++;
                }
                if ($jsonvalue == 'WFH-P') {
                    $wfhP++;
                }
                if ($jsonvalue == 'LATE') {
                    $late++;
                }
                if ($jsonvalue == 'AB') {
                    $ab++;
                }
                if ($jsonvalue == 'WFO-HD') {
                    $wfoHD++;
                }
                if ($jsonvalue == 'WFH-HD') {
                    $wfhHD++;
                }
                if ($jsonvalue == 'UPL') {
                    $upl++;
                }
                if ($jsonvalue == 'PH') {
                    $ph++;
                }
                if ($jsonvalue == 'BL') {
                    $bl++;
                }
                if ($jsonvalue == 'W/O') {
                    $wo++;
                }
                if ($jsonvalue == 'SD') {
                    $sd++;
                }
            }

            // $totalDay = count(array_values($json['status']));
            // dd($json, $totalDay, $presentDay, $wfoP, $wfhP, $late, $ab, $wfoHD, $wfhHD, $upl, $ph, $bl, $wo, $sd);

            // $totalPresent

            unset($json["att_month"], $json["emp_id"]);

            $data = json_encode($json['status']);

            Attendance::create([
                'emp_id'            => $request->emp_id,
                'att_month'         => $request->att_month,
                'data'              => $data,
                'totalDay'          => $totalDay,
                'presentDay'        => $presentDay,
                'wfoP'              => $wfoP,
                'wfhP'              => $wfhP,
                'late'              => $late,
                'ab'                => $ab,
                'wfoHD'             => $wfoHD,
                'wfhHD'             => $wfhHD,
                'upl'               => $upl,
                'ph'                => $ph,
                'bl'                => $bl,
                'wo'                => $wo,
                'sd'                => $sd,
            ]);

            dd("Insert Attendance is Now Add Successfully  !");

            return redirect()->back()->with("success", "Employee is Now Add Successfully  !");
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    // Bulk Attendance
    public function bulkAttendance()
    {
        try {
            return view('hr.bulkAttendance');
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }
}
