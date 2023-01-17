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
            $table->string('emp_name')->nullable();
            $table->string('emp_email')->nullable();
            $table->string('emp_desg')->nullable();
            $table->string('emp_doj')->nullable();
            $table->string('emp_dept')->nullable();
            $table->string('emp_pan')->nullable();
            $table->string('emp_uan')->nullable();
            $table->string('emp_esi')->nullable();
            $table->string('emp_pic')->nullable();
            $table->string('emp_paymode')->nullable();
            $table->string('emp_bank')->nullable();
            $table->string('emp_ifsc')->nullable();
            $table->string('emp_acc')->nullable();
            $table->string('emp_gsal')->nullable();
            $table->string('emp_food')->nullable();
            $table->string('emp_travel')->nullable();
            $table->string('emp_spl')->nullable();
            $table->string('emp_meal')->nullable();
            $table->string('emp_cab')->nullable();
            $table->string('emp_stinc')->nullable();
            $table->string('emp_inc')->nullable();
            $table->string('emp_other')->nullable();
            $table->string('emp_exitdate')->nullable();
            $table->string('emp_desp')->nullable();
            $table->string('emp_status')->nullable()->default('0');
            $table->string('country_type')->nullable()->default('In');
            $table->string('nick_name')->nullable();
            $table->string('line_manager')->nullable();
            $table->string('joining_month')->nullable();
            $table->string('date_of_hitting')->nullable();
            $table->string('ageing')->nullable();
            $table->string('rejoing_on')->nullable();
            $table->string('date_of_confirmation')->nullable();
            $table->string('exit_formalities')->nullable();
            $table->string('fnf')->nullable();
            $table->string('reason_of_leaving')->nullable();
            $table->string('type_of_attrition')->nullable();
            $table->string('annual_ctc_in')->nullable();
            $table->string('annual_ctc_new')->nullable();
            $table->string('in_hand_salary_with_stack')->nullable();
            $table->string('final_ctc_all')->nullable();
            $table->string('transport_r_a')->nullable();
            $table->string('father_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->text('present_address_h_no')->nullable();
            $table->string('lacality_building')->nullable();
            $table->string('area')->nullable();
            $table->string('district')->nullable();
            $table->string('state')->nullable();
            $table->string('post_code')->nullable();
            $table->text('per_address_h_no')->nullable();
            $table->string('per_lacality_building')->nullable();
            $table->string('per_area')->nullable();
            $table->string('per_district')->nullable();
            $table->string('per_state')->nullable();
            $table->string('per_post_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('primary_email')->nullable();
            $table->string('aadhaar')->nullable();
            $table->string('nominee_details')->nullable();
            $table->string('relation')->nullable();
            $table->string('address')->nullable();
            $table->string('emy_contact_no')->nullable();
            $table->string('emy_contact_relation')->nullable();
            $table->string('emy_contact_email')->nullable();
            $table->string('total_bank')->nullable();
            $table->string('total_member')->nullable();
            $table->string('mob_link_uan_no')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('performer_month')->nullable();
            $table->string('no_verbal_warning')->nullable();
            $table->string('reason_of_verbal_warning')->nullable();
            $table->string('date_of_verbal_warning')->nullable();
            $table->string('no_of_warning')->nullable();
            $table->string('dob')->nullable();
            $table->string('reason_of_warning')->nullable();
            $table->string('date_of_written_warning')->nullable();
            $table->string('pip_issue_date')->nullable();
            $table->string('date_of_written_warning')->nullable();
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
