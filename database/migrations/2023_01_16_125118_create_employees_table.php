<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->text('emp_id');
            $table->text('emp_name')->nullable();
            $table->text('emp_email')->nullable();
            $table->text('emp_desg')->nullable();
            $table->text('emp_doj')->nullable();
            $table->text('emp_dept')->nullable();
            $table->text('emp_pan')->nullable();
            $table->text('emp_uan')->nullable();
            $table->text('emp_esi')->nullable();
            $table->text('emp_pic')->nullable();
            $table->text('emp_paymode')->nullable();
            $table->text('emp_bank')->nullable();
            $table->text('emp_ifsc')->nullable();
            $table->text('emp_acc')->nullable();
            $table->text('emp_gsal')->nullable();
            $table->text('emp_food')->nullable();
            $table->text('emp_travel')->nullable();
            $table->text('emp_spl')->nullable();
            $table->text('emp_meal')->nullable();
            $table->text('emp_cab')->nullable();
            $table->text('emp_stinc')->nullable();
            $table->text('emp_inc')->nullable();
            $table->text('emp_other')->nullable();
            $table->text('emp_exitdate')->nullable();
            $table->text('emp_desp')->nullable();
            $table->text('emp_status')->nullable()->default('0');
            $table->text('country_type')->nullable()->default('In');
            $table->text('nick_name')->nullable();
            $table->text('line_manager')->nullable();
            $table->text('joining_month')->nullable();
            $table->text('date_of_hitting')->nullable();
            $table->text('ageing')->nullable();
            $table->text('rejoing_on')->nullable();
            $table->text('date_of_confirmation')->nullable();
            $table->text('exit_formalities')->nullable();
            $table->text('fnf')->nullable();
            $table->text('reason_of_leaving')->nullable();
            $table->text('type_of_attrition')->nullable();
            $table->text('annual_ctc')->nullable();
            $table->text('in_hand_salary_with_stack')->nullable();
            $table->text('transport_r_a')->nullable();
            $table->text('father_name')->nullable();
            $table->text('gender')->nullable();
            $table->text('marital_status')->nullable();
            $table->text('present_address_h_no')->nullable();
            $table->text('lacality_building')->nullable();
            $table->text('area')->nullable();
            $table->text('district')->nullable();
            $table->text('state')->nullable();
            $table->text('post_code')->nullable();
            $table->text('per_address_h_no')->nullable();
            $table->text('per_lacality_building')->nullable();
            $table->text('per_area')->nullable();
            $table->text('per_district')->nullable();
            $table->text('per_state')->nullable();
            $table->text('per_post_code')->nullable();
            $table->text('phone')->nullable();
            $table->text('mobile')->nullable();
            $table->text('primary_email')->nullable();
            $table->text('aadhaar')->nullable();
            $table->text('nominee_details')->nullable();
            $table->text('relation')->nullable();
            $table->text('address')->nullable();
            $table->text('emy_contact_no')->nullable();
            $table->text('emy_contact_relation')->nullable();
            $table->text('emy_contact_email')->nullable();
            $table->text('total_bank')->nullable();
            $table->text('total_member')->nullable();
            $table->text('mob_link_uan_no')->nullable();
            $table->text('blood_group')->nullable();
            $table->text('performer_month')->nullable();
            $table->text('no_verbal_warning')->nullable();
            $table->text('reason_of_verbal_warning')->nullable();
            $table->text('date_of_verbal_warning')->nullable();
            $table->text('no_of_warning')->nullable();
            $table->text('dob')->nullable();
            $table->text('reason_of_warning')->nullable();
            $table->text('pip_issue_date')->nullable();
            $table->text('date_of_written_warning')->nullable();
            $table->text('appraisal_letter')->nullable();
            $table->text('appraisal_1')->nullable();
            $table->text('appraisal_2')->nullable();
            $table->text('appraisal_3')->nullable();
            $table->text('appraisal_4')->nullable();
            $table->text('ssc')->nullable();
            $table->text('hsc')->nullable();
            $table->text('graduation')->nullable();
            $table->text('experience_relieving')->nullable();
            $table->text('salary_slip')->nullable();
            $table->text('bank_statement')->nullable();
            $table->text('cancel_cheque')->nullable();
            $table->tinyInteger('is_deleted')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
