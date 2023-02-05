<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';


    protected $fillable = [
        'user_id',
        'emp_id',
        'emp_name',
        'emp_email',
        'emp_desg',
        'emp_desp',
        'emp_doj',
        'emp_dept',
        'emp_pan',
        'emp_uan',
        'emp_esi',
        'emp_pic',
        'emp_paymode',
        'emp_bank',
        'emp_ifsc',
        'emp_acc',
        'emp_gsal',
        'emp_food',
        'emp_travel',
        'emp_spl',
        'emp_meal',
        'emp_cab',
        'emp_stinc',
        'emp_inc',
        'emp_other',
        'emp_exitdate',
        'emp_status',
        'dob',
        'country_type',
        'nick_name',
        'line_manager',
        'joining_month',
        'date_of_hitting',
        'ageing',
        'rejoing_on',
        'date_of_confirmation',
        'exit_formalities',
        'fnf',
        'reason_of_leaving',
        'type_of_attrition',
        'annual_ctc',
        'in_hand_salary_with_stack',
        'transport_r_a',
        'gender',
        'marital_status',
        'present_address_h_no',
        'lacality_building',
        'area',
        'district',
        'state',
        'post_code',
        'per_address_h_no',
        'per_lacality_building',
        'per_area',
        'per_district',
        'per_state',
        'per_post_code',
        'phone',
        'mobile',
        'primary_email',
        'aadhaar',
        'father_name',
        'nominee_details',
        'relation',
        'address',
        'emy_contact_no',
        'emy_contact_relation',
        'emy_contact_email',
        'total_bank',
        'total_member',
        'mob_link_uan_no',
        'blood_group',
        'performer_month',
        'no_verbal_warning',
        'reason_of_verbal_warning',
        'date_of_verbal_warning',
        'no_of_warning',
        'reason_of_warning',
        'date_of_written_warning',
        'pip_issue_date',
        'appraisal_letter',
        'appraisal_1',
        'appraisal_2',
        'appraisal_3',
        'appraisal_4',
        'ssc',
        'hsc',
        'graduation',
        'experience_relieving',
        'salary_slip',
        'bank_statement',
        'cancel_cheque',
        'formdata'
    ];

    public function users()
    {
        return $this->belongsTo('App\Model\User', 'user_id');
    }
}
