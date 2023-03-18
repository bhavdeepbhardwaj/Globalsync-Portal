<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->text('emp_id');
            $table->text('att_month')->nullable();
            $table->text('created_by')->nullable();
            $table->text('pre_leave_bal')->nullable();
            $table->text('leaves_adjusted')->nullable();
            $table->text('totalDay')->nullable();
            $table->text('presentDay')->nullable();
            $table->text('wfoP')->nullable();
            $table->text('wfhP')->nullable();
            $table->text('late')->nullable();
            $table->text('ab')->nullable();
            $table->text('wfoHD')->nullable();
            $table->text('wfhHD')->nullable();
            $table->text('upl')->nullable();
            $table->text('ph')->nullable();
            $table->text('bl')->nullable();
            $table->text('wo')->nullable();
            $table->text('sd')->nullable();



            $table->text('sal_month_basic')->nullable();
            $table->text('sal_month_hra')->nullable();
            $table->text('sal_month_sa')->nullable();
            $table->text('sal_month_oa')->nullable();
            $table->text('emp_pf_cont')->nullable();
            $table->text('empr_pf_cont')->nullable();
            $table->text('emp_esic_cont')->nullable();
            $table->text('empr_esic_cont')->nullable();
            $table->text('daily_pay')->nullable();
            $table->text('fix_sal_month_pay')->nullable();
            $table->text('tds_deduction')->nullable();
            $table->text('penalty_adj')->nullable();
            $table->text('sandwhich_leave_deduction')->nullable();
            $table->text('transport')->nullable();
            $table->text('food')->nullable();
            $table->text('other_inc_dues')->nullable();
            $table->text('arrears')->nullable();
            $table->text('inc_refferal')->nullable();
            $table->text('pre_month_qualified_app_ach')->nullable();
            $table->text('qualified_percentage_pre_month')->nullable();
            $table->text('inc_qualified')->nullable();
            $table->text('spl_allowance')->nullable();
            $table->text('kw_installed')->nullable();
            $table->text('install_inc')->nullable();
            $table->text('stack_inc')->nullable();
            $table->text('adjustment')->nullable();
            $table->text('net_salary')->nullable();
            $table->text('inc_amt')->nullable();
            $table->text('clawback')->nullable();
            $table->text('inc')->nullable();
            $table->text('deductions')->nullable();
            $table->text('earnings')->nullable();
            $table->text('transport_redeem')->nullable();
            $table->text('food_redeem')->nullable();
            $table->text('adv_adj')->nullable();
            $table->text('otp_install')->nullable();
            $table->text('otp_inc_install')->nullable();
            $table->text('final_present')->nullable();
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
        Schema::dropIfExists('salaries');
    }
}
