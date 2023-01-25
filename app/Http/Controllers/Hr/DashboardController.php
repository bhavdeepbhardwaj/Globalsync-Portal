<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Role;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Json;
use Illuminate\Support\Facades\Validator;

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
            $emplist = Employee::where('is_deleted', '0')->select('emp_id', 'emp_desg', 'emp_dept', 'emp_doj', 'emp_status')->get();
            // dd($emplist);
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
        return view('hr.employeeAdd', ['employeeID' => $employeeID,  'departments' => $departments, 'roles' => $roles, 'user_id' => $user_id]);
    }

    // Employee Data Save
    public function employeeDataSave(Request $request)
    {
        // dd($request->all());
        try {
            $this->validate($request, [
                // Employee Credentials
                'email'                             => 'email|required|unique:users',
                'password'                          => 'required|min:8',

                // Employee Status
                'emp_id'                            => 'required',
                'role_id'                           => 'required',
                'emp_status'                        => 'required',
                'country_type'                      => 'required',

                'user_id'                           => 'required',
                // 'emp_id'                            => 'required',
                // 'emp_email'                         => 'required',
                // 'emp_status'                        => 'required',
                // 'country_type'                      => 'required',

                // Allowances
                'emp_food'                          => 'required',
                'emp_travel'                        => 'required',
                'emp_spl'                           => 'required',
                'emp_meal'                          => 'required',
                'emp_cab'                           => 'required',

                // Incentives & Deductions
                'emp_stinc'                         => 'required',
                'emp_inc'                           => 'required',
                'emp_other'                         => 'required',

                // Employee Details
                // file
                // 'emp_pic'                           => 'required',

                'emp_name'                          => 'required',
                'emp_doj'                           => 'required',
                'emp_desg'                          => 'required',
                'emp_dept'                          => 'required',
                'gender'                            => 'required',
                'emp_pan'                           => 'required',
                // 'emp_uan'                           => 'required',
                // 'emp_esi'                           => 'required',
                // 'nick_name'                         => 'required',
                'joining_month'                     => 'required',
                // 'date_of_hitting'                   => 'required',
                // 'rejoing_on'                        => 'required',
                // 'date_of_confirmation'              => 'required',
                // 'ageing'                            => 'required',

                // Payment Details
                'emp_paymode'                       => 'required',
                'emp_bank'                          => 'required',
                'emp_ifsc'                          => 'required',
                // 'transport_r_a'                     => 'required',
                'emp_acc'                           => 'required',
                'emp_gsal'                          => 'required',
                'annual_ctc'                        => 'required',
                'in_hand_salary_with_stack'         => 'required',

                // Employee Journey
                // 'performer_month'                   => 'required',
                'line_manager'                      => 'required',
                // 'type_of_attrition'                 => 'required',
                // 'pip_issue_date'                    => 'required',
                // 'date_of_verbal_warning'            => 'required',
                // 'no_verbal_warning'                 => 'required',
                // 'date_of_written_warning'           => 'required',
                // 'no_of_warning'                     => 'required',
                // 'reason_of_verbal_warning'          => 'required',
                // 'reason_of_warning'                 => 'required',
                // file
                // 'appraisal_letter'                  => 'required',
                // 'appraisal_1'                       => 'required',
                // 'appraisal_2'                       => 'required',
                // 'appraisal_3'                       => 'required',
                // 'appraisal_4'                       => 'required',

                // Employee Education
                // 'ssc'                               => 'required',
                // 'hsc'                               => 'required',
                // 'graduation'                        => 'required',
                // 'experience_relieving'              => 'required',

                // Employee Family Details
                'father_name'                       => 'required',
                'nominee_details'                   => 'required',
                'relation'                          => 'required',
                'address'                           => 'required',
                // 'total_member'                      => 'required',


                // Employee Personal Details
                'marital_status'                    => 'required',
                'dob'                               => 'required',
                'primary_email'                     => 'required',

                'per_address_h_no'                  => 'required',
                'per_lacality_building'             => 'required',
                'per_area'                          => 'required',
                'per_district'                      => 'required',
                'per_state'                         => 'required',
                'per_post_code'                     => 'required',

                // 'present_address_h_no'              => 'required',
                // 'lacality_building'                 => 'required',
                // 'area'                              => 'required',
                // 'district'                          => 'required',
                // 'state'                             => 'required',
                // 'post_code'                         => 'required',

                'aadhaar'                           => 'required',
                'blood_group'                       => 'required',

                'emy_contact_no'                    => 'required',
                'emy_contact_relation'              => 'required',
                'emy_contact_email'                 => 'required',

                // 'total_bank'                        => 'required',

                'phone'                             => 'required',
                'mobile'                            => 'required',
                'mob_link_uan_no'                   => 'required',

                // file
                // 'salary_slip'                       => 'required',
                // 'bank_statement'                    => 'required',
                // 'cancel_cheque'                     => 'required',

                // Exit & Description
                // 'emp_exitdate'                      => 'required',
                // 'exit_formalities'                  => 'required',
                // 'reason_of_leaving'                 => 'required',
                // 'fnf'                               => 'required',
                // 'emp_desp'                          => 'required',


            ]);

            $user                                   = new User();
            $user->email                            = $request->email;
            $user->password                         = bcrypt($request->password);
            $user->role_id                          = $request->role_id;
            $user->emp_id                           = $request->emp_id;
            $user->emp_status                       = $request->emp_status;
            $user->country_type                     = $request->country_type;

            $user->save();

            // dd($user->id);

            $emp                                    = new Employee();
            $emp->user_id                           = $user->id;
            $emp->emp_id                            = $user->emp_id;
            $emp->emp_name                          = $request->emp_name;
            $emp->emp_email                         = $user->email;
            $emp->emp_desg                          = $request->emp_desg;
            $emp->emp_doj                           = $request->emp_doj;
            $emp->emp_dept                          = $request->emp_dept;
            $emp->emp_pan                           = $request->emp_pan;
            $emp->emp_uan                           = $request->emp_uan;
            $emp->emp_esi                           = $request->emp_esi;
            $emp->emp_desp                          = $request->emp_desp;
            $emp->dob                               = $request->dob;
            $emp->emp_paymode                       = $request->emp_paymode;
            $emp->emp_bank                          = $request->emp_bank;
            $emp->emp_ifsc                          = $request->emp_ifsc;
            $emp->emp_acc                           = $request->emp_acc;
            $emp->emp_gsal                          = $request->emp_gsal;
            $emp->emp_food                          = $request->emp_food;
            $emp->emp_travel                        = $request->emp_travel;
            $emp->emp_spl                           = $request->emp_spl;
            $emp->emp_meal                          = $request->emp_meal;
            $emp->emp_cab                           = $request->emp_cab;
            $emp->emp_stinc                         = $request->emp_stinc;
            $emp->emp_inc                           = $request->emp_inc;
            $emp->emp_other                         = $request->emp_other;
            $emp->emp_exitdate                      = $request->emp_exitdate;
            $emp->emp_status                        = $user->emp_status;
            $emp->country_type                      = $user->country_type;
            $emp->nick_name                         = $request->nick_name;
            $emp->line_manager                      = $request->line_manager;
            $emp->joining_month                     = $request->joining_month;
            $emp->date_of_hitting                   = $request->date_of_hitting;
            $emp->ageing                            = $request->ageing;
            $emp->rejoing_on                        = $request->rejoing_on;
            $emp->date_of_confirmation              = $request->date_of_confirmation;
            $emp->exit_formalities                  = $request->exit_formalities;
            $emp->fnf                               = $request->fnf;
            $emp->reason_of_leaving                 = $request->reason_of_leaving;
            $emp->type_of_attrition                 = $request->type_of_attrition;
            $emp->annual_ctc                        = $request->annual_ctc;
            $emp->in_hand_salary_with_stack         = $request->in_hand_salary_with_stack;
            $emp->transport_r_a                     = $request->transport_r_a;
            $emp->gender                            = $request->gender;
            $emp->marital_status                    = $request->marital_status;
            $emp->present_address_h_no              = $request->present_address_h_no;
            $emp->lacality_building                 = $request->lacality_building;
            $emp->area                              = $request->area;
            $emp->district                          = $request->district;
            $emp->state                             = $request->state;
            $emp->post_code                         = $request->post_code;
            $emp->per_address_h_no                  = $request->per_address_h_no;
            $emp->per_lacality_building             = $request->per_lacality_building;
            $emp->per_area                          = $request->per_area;
            $emp->per_district                      = $request->per_district;
            $emp->per_state                         = $request->per_state;
            $emp->per_post_code                     = $request->per_post_code;
            $emp->phone                             = $request->phone;
            $emp->mobile                            = $request->mobile;
            $emp->primary_email                     = $request->primary_email;
            $emp->aadhaar                           = $request->aadhaar;
            $emp->father_name                       = $request->father_name;
            $emp->nominee_details                   = $request->nominee_details;
            $emp->relation                          = $request->relation;
            $emp->address                           = $request->address;
            $emp->emy_contact_no                    = $request->emy_contact_no;
            $emp->emy_contact_relation              = $request->emy_contact_relation;
            $emp->emy_contact_email                 = $request->emy_contact_email;
            $emp->total_bank                        = $request->total_bank;
            $emp->total_member                      = $request->total_member;
            $emp->mob_link_uan_no                   = $request->mob_link_uan_no;
            $emp->blood_group                       = $request->blood_group;
            $emp->performer_month                   = $request->performer_month;
            $emp->no_verbal_warning                 = $request->no_verbal_warning;
            $emp->reason_of_verbal_warning          = $request->reason_of_verbal_warning;
            $emp->date_of_verbal_warning            = $request->date_of_verbal_warning;
            $emp->no_of_warning                     = $request->no_of_warning;
            $emp->reason_of_warning                 = $request->reason_of_warning;
            $emp->date_of_written_warning           = $request->date_of_written_warning;
            $emp->pip_issue_date                    = $request->pip_issue_date;

            $appraisal_letter = NULL;
            $appraisal_1 = NULL;
            $appraisal_2 = NULL;
            $appraisal_3 = NULL;
            $appraisal_4 = NULL;
            $ssc = NUll;
            $hsc = NUll;
            $graduation = NUll;
            $salary_slip = NUll;
            $bank_statement = NUll;
            $cancel_cheque = NUll;
            $experience_relieving = NUll;
            $emp_pic = NUll;

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

            // file
            $emp->appraisal_letter                  = $appraisal_letter;
            $emp->appraisal_1                       = $appraisal_1;
            $emp->appraisal_2                       = $appraisal_2;
            $emp->appraisal_3                       = $appraisal_3;
            $emp->appraisal_4                       = $appraisal_4;
            $emp->ssc                               = $ssc;
            $emp->hsc                               = $hsc;
            $emp->graduation                        = $graduation;
            $emp->salary_slip                       = $salary_slip;
            $emp->bank_statement                    = $bank_statement;
            $emp->cancel_cheque                     = $cancel_cheque;
            $emp->experience_relieving              = $experience_relieving;
            $emp->emp_pic                           = $emp_pic;



            $emp->save();

            return redirect()->back()->with("success", "Admin detail is updated !");

            // dd($user);


        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    // Employee Save Data Json Format
    public function employeeDataJsonSave(Request $request)
    {
        // dd($request->all());

        // $data = [
        //     $request->email,
        //     bcrypt($request->password),
        //     $request->role_id,
        //     $request->emp_id,
        //     $request->emp_status,
        //     $request->country_type,
        // ];

        $data = $request->all();

        $input['token'] = date('Y-m-d H:i:s');
        $input['data'] = json_encode($data);

        // foreach (json_decode($data) as $key => $value) {
        //     if($key=="value")
        //         $obj['password'] = $value;
        //     else
        //         $obj[$key] = $value;s
        // }
        Json::create($input);

        return redirect()->back()->with("success", "Admin detail is updated !");

        // dd($input);
    }

    // Employee Data View
    public function employeeView($empID)
    {
        try {
            $empView = Employee::where('emp_id', $empID)->first();
            $empRoles = User::where('emp_id', $empID)->first();
            $roleName = Role::where('id', $empRoles->role_id)->select('role_name')->first();
            // dd($roleName);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('hr.employeeView', ['empView' => $empView, 'roleName' => $roleName]);
    }
    // Employee Data Edit
    public function employeeEdit($empID)
    {
        try {
            $empEdit = Employee::where('emp_id', $empID)->first();
            $userEdit = User::where('id', $empEdit->user_id)->first();
            // dd($userEdit);
        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
        return view('hr.employeeEdit', ['empEdit' => $empEdit, 'userEdit' => $userEdit]);
    }

    // Employee Data Update
    public function employeeUpdate(Request $request)
    {
        try {
            dd($request->all());

            $this->validate($request, [
                'email'                             => 'required',
                // 'password'                          => 'required',
                'emp_id'                            => 'required',
                'role_id'                           => 'required',
                'emp_status'                        => 'required',
                'country_type'                      => 'required',
                'user_id'                           => 'required',
            ]);

            User::where('id', $request->user_id)->update([
                'email'                     => $request->email,
                // 'password'                  => bcrypt($request->password),
                'role_id'                   => $request->role_id,
                'emp_id'                    => $request->emp_id,
                'emp_status'                => $request->emp_status,
                'country_type'              => $request->country_type,
            ]);



        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }
}
