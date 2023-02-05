<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Json;
use App\Models\Role;
use App\Models\User;
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

            return redirect()->back()->with("success", "Admin detail is updated !");
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
        // dd($request->all());
        try {

            $this->validate($request, [
                'email' => 'required',
                // 'password'                          => 'required',
                'emp_id' => 'required',
                'role_id' => 'required',
                'emp_status' => 'required',
                'country_type' => 'required',
                'user_id' => 'required',
            ]);

            User::where('id', $request->user_id)->update([
                'email' => $request->email,
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

            $fetchEmpData = Employee::where('user_id',$request->user_id)->first();

            if ($request->emp_pic) {
                $emp_pic = time() . '-' . $request->emp_pic->getClientOriginalName();
                $request->emp_pic->move(public_path('Web/Images/Employee-Images/'), $emp_pic);
            }else{
                $emp_pic = $fetchEmpData->emp_pic;
            }

            if ($request->appraisal_letter) {
                $appraisal_letter = time() . '-' . $request->appraisal_letter->getClientOriginalName();
                $request->appraisal_letter->move(public_path('Web/PDF/Appraisal/'), $appraisal_letter);
            }else{
                $appraisal_letter = $fetchEmpData->appraisal_letter;
            }

            if ($request->appraisal_1) {
                $appraisal_1 = time() . '-' . $request->appraisal_1->getClientOriginalName();
                $request->appraisal_1->move(public_path('Web/PDF/Appraisal-1/'), $appraisal_1);
            }else{
                $appraisal_1 = $fetchEmpData->appraisal_1;
            }

            if ($request->appraisal_2) {
                $appraisal_2 = time() . '-' . $request->appraisal_2->getClientOriginalName();
                $request->appraisal_2->move(public_path('Web/PDF/Appraisal-2/'), $appraisal_2);
            }else{
                $appraisal_2 = $fetchEmpData->appraisal_2;
            }

            if ($request->appraisal_3) {
                $appraisal_3 = time() . '-' . $request->appraisal_3->getClientOriginalName();
                $request->appraisal_3->move(public_path('Web/PDF/Appraisal-3/'), $appraisal_3);
            }else{
                $appraisal_3 = $fetchEmpData->appraisal_3;
            }

            if ($request->appraisal_4) {
                $appraisal_4 = time() . '-' . $request->appraisal_4->getClientOriginalName();
                $request->appraisal_4->move(public_path('Web/PDF/Appraisal-4/'), $appraisal_4);
            }else{
                $appraisal_4 = $fetchEmpData->appraisal_4;
            }

            if ($request->ssc) {
                $ssc = time() . '-' . $request->ssc->getClientOriginalName();
                $request->ssc->move(public_path('Web/PDF/SSS/'), $ssc);
            }else{
                $ssc = $fetchEmpData->ssc;
            }

            if ($request->hsc) {
                $hsc = time() . '-' . $request->hsc->getClientOriginalName();
                $request->hsc->move(public_path('Web/PDF/HSC/'), $hsc);
            }else{
                $hsc = $fetchEmpData->hsc;
            }

            if ($request->graduation) {
                $graduation = time() . '-' . $request->graduation->getClientOriginalName();
                $request->graduation->move(public_path('Web/PDF/Graduation/'), $graduation);
            }else{
                $graduation = $fetchEmpData->graduation;
            }

            if ($request->salary_slip) {
                $salary_slip = time() . '-' . $request->salary_slip->getClientOriginalName();
                $request->salary_slip->move(public_path('Web/PDF/Salay-Slip/'), $salary_slip);
            }else{
                $salary_slip = $fetchEmpData->salary_slip;
            }

            if ($request->bank_statement) {
                $bank_statement = time() . '-' . $request->bank_statement->getClientOriginalName();
                $request->bank_statement->move(public_path('Web/PDF/Bank-Statement/'), $bank_statement);
            }else{
                $bank_statement = $fetchEmpData->bank_statement;
            }

            if ($request->cancel_cheque) {
                $cancel_cheque = time() . '-' . $request->cancel_cheque->getClientOriginalName();
                $request->cancel_cheque->move(public_path('Web/PDF/Cancel-Cheque/'), $cancel_cheque);
            }else{
                $cancel_cheque = $fetchEmpData->cancel_cheque;
            }

            if ($request->experience_relieving) {
                $experience_relieving = time() . '-' . $request->experience_relieving->getClientOriginalName();
                $request->experience_relieving->move(public_path('Web/PDF/Experience-Relieving/'), $experience_relieving);
            }else{
                $experience_relieving = $fetchEmpData->experience_relieving;
            }


            unset($my_var["email"], $my_var["password"], $my_var["role_id"], $my_var["emp_id"], $my_var["emp_status"], $my_var["country_type"], $my_var["emp_pic"], $my_var["appraisal_letter"], $my_var["appraisal_1"], $my_var["appraisal_2"], $my_var["appraisal_3"], $my_var["appraisal_4"], $my_var["ssc"], $my_var["hsc"], $my_var["graduation"], $my_var["salary_slip"], $my_var["bank_statement"], $my_var["cancel_cheque"], $my_var["experience_relieving"],  $my_var["user_id"]);

            $json = json_encode($my_var);
            // dd($json);
            Employee::where('user_id',$request->user_id)->update([
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

        } catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    // Bulk Employee Upload
    public function importEmployee()
    {
        Excel::import(new EmployeeImport,request()->file('file'));

        return back();
    }
}
