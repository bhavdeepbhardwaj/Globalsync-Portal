@extends('layouts.app')

@section('css')
    <style>
        .example-wrap {
            margin-bottom: 30px;
        }
    </style>
@endsection

@section('content')
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Create Pay Slip</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Payroll</a></li>
                <li class="breadcrumb-item active">Create Pay Slip</li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-sm btn-primary btn-round" href="http://globalsync.com.au" target="_blank">
                    <i class="icon md-link" aria-hidden="true"></i>
                    <span class="hidden-sm-down">Official Website</span>
                </a>
            </div>
        </div>

        <div class="page-content container-fluid">

            <form action="{{ route('finance.paySlipView') }}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <!-- Panel Employee Details -->
                    <div class="col-lg-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Employee Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row row-lg">
                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example Pay Slip Month -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">Pay Slip Month</h4>
                                            <input type="month" class="form-control focus" name="pay_month"
                                                id="pay_slip_month" value="<?php echo date('Y-m', strtotime('-1 month')); ?>"
                                                onchange="monthHandler(event);">
                                        </div>
                                        <!-- End Example Pay Slip Month -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example Employee Id -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">Employee Id</h4>
                                            <input type="text" class="form-control focus" name="emp_id" id="emp_id">
                                        </div>
                                        <!-- End Example Employee Id -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example Full Name -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">Full Name</h4>
                                            <input type="text" class="form-control focus" name="full_name"
                                                id="full_name">
                                        </div>
                                        <!-- End Example Full Name -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example Date of Join -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">Date of Join</h4>
                                            <input type="date" class="form-control focus" name="doj" id="doj">
                                        </div>
                                        <!-- End Example Date of Join -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example Department -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">Department</h4>
                                            <input type="text" class="form-control focus" name="department"
                                                id="department">
                                        </div>
                                        <!-- End Example Department -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example Payment Mode -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">Payment Mode</h4>
                                            <select class="form-control" name="payment_mode">
                                                <option value="Bank Transfer">Bank Transfer</option>
                                                <option value="Wire Transfer">Wire Transfer</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                        </div>
                                        <!-- End Example Payment Mode -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example Bank -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">Bank</h4>
                                            <input type="text" class="form-control focus" name="bank" id="bank">
                                        </div>
                                        <!-- End Example Bank -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example IFSC -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">IFSC</h4>
                                            <input type="text" class="form-control focus" name="ifsc" id="ifsc">
                                        </div>
                                        <!-- End Example IFSC -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example Account No. -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">Account No.</h4>
                                            <input type="text" class="form-control focus" name="ac_no" id="ac_no">
                                        </div>
                                        <!-- End Example Account No. -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example PAN No. -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">PAN No.</h4>
                                            <input type="text" class="form-control focus" name="pan" id="pan">
                                        </div>
                                        <!-- End Example PAN No. -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example UAN NO. -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">UAN NO.</h4>
                                            <input type="text" class="form-control focus" name="uan"
                                                id="uan">
                                        </div>
                                        <!-- End Example UAN NO. -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example Gross Salary -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">Gross Salary</h4>
                                            <input type="text" class="form-control focus" name="gross"
                                                id="gross">
                                        </div>
                                        <!-- End Example Gross Salary -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Panel Employee Details -->

                    <!-- Panel Leaves & Pay Days -->
                    <div class="col-lg-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Leaves & Pay Days</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row row-lg">
                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example Calendar Days -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">Calendar Days</h4>
                                            <input type="text" class="form-control focus" name="cal_days"
                                                id="calendar_days">
                                        </div>
                                        <!-- End Example Calendar Days -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example Present Days -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">Present Days</h4>
                                            <input type="text" class="form-control focus" name="present_days"
                                                id="pst_days" onchange="update_payable_pst();">
                                        </div>
                                        <!-- End Example Present Days -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example Leaves Adjusted -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">Leaves Adjusted</h4>
                                            <input type="text" class="form-control focus" name="lv_adj"
                                                value="0" id="leave_adj" onchange="update_payable_lvad();">
                                        </div>
                                        <!-- End Example Leaves Adjusted -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example Total Payable Days -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">Total Payable Days</h4>
                                            <input type="text" class="form-control focus" name="pay_days"
                                                value="0" id="payable_day">
                                        </div>
                                        <!-- End Example Total Payable Days -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example Loss of Pay -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">Loss of Pay</h4>
                                            <input type="text" class="form-control focus" name="lop"
                                                id="lossofpay">
                                        </div>
                                        <!-- End Example Loss of Pay -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example Sandwich Leaves Deduction -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">Sandwich Leaves Deduction</h4>
                                            <input type="text" class="form-control focus" name="sandwich"
                                                id="sndwch_lv" value="0">
                                        </div>
                                        <!-- End Example Sandwich Leaves Deduction -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">
                                        <!-- Example Leaves Balance -->
                                        <div class="example-wrap">
                                            <h4 class="example-title">Leaves Balance</h4>
                                            <input type="text" class="form-control focus" name="lv_bal"
                                                id="leave_bal" value="0">
                                        </div>
                                        <!-- End Example Leaves Balance -->
                                    </div>

                                    <div class="col-lg-6 form-horizontal">

                                    </div>

                                    <div class="col-lg-6 form-horizontal">

                                    </div>

                                    <div class="col-lg-6 form-horizontal">

                                    </div>

                                    <div class="col-lg-6 form-horizontal">

                                    </div>

                                    <div class="col-lg-6 form-horizontal">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Panel Leaves & Pay Days -->

                </div>

                <!-- Panel Allowances -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Allowances</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example Food Allowance -->
                                <div class="example-wrap">
                                    <h4 class="example-title">Food Allowance</h4>
                                    <input type="text" class="form-control focus" name="food_allw" value="2200"
                                        id="food_allw">
                                </div>
                                <!-- End Example Food Allowance -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example Travel Allowance -->
                                <div class="example-wrap">
                                    <h4 class="example-title">Travel Allowance</h4>
                                    <input type="text" class="form-control focus" name="travel_allw" value="2200"
                                        id="travel_allw">
                                </div>
                                <!-- End Example Travel Allowance -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example Special Allowances -->
                                <div class="example-wrap">
                                    <h4 class="example-title">Special Allowances</h4>
                                    <input type="text" class="form-control focus" name="spl_allowance" value="0"
                                        id="spl_allowance">
                                </div>
                                <!-- End Example Special Allowances -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example Meal Service Availed -->
                                <div class="example-wrap">
                                    <h4 class="example-title">Meal Service Availed</h4>
                                    <div class="radio-custom radio-primary">
                                        <input type="hidden" value="0" name="msa" />
                                        <input type="radio" id="inputRadiosChecked" value="1" name="msa"
                                            checked />
                                        <label for="inputRadiosChecked">Meal Service Availed</label>
                                    </div>
                                </div>
                                <!-- End Example Meal Service Availed -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example Travel Service Availed -->
                                <div class="example-wrap">
                                    <h4 class="example-title">Travel Service Availed</h4>
                                    <div class="radio-custom radio-primary">
                                        <input type="hidden" value="0" name="tsa" />
                                        <input type="radio" id="inputRadiosCheckedtsa" value="1" name="tsa"
                                            checked />
                                        <label for="inputRadiosCheckedtsa">Travel Service Availed</label>
                                    </div>
                                </div>
                                <!-- End Example Travel Service Availed -->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Panel Allowances -->

                <!-- Panel Incentives & Deductions -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Incentives & Deductions</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example Stack Incentive -->
                                <div class="example-wrap">
                                    <h4 class="example-title">Stack Incentive</h4>
                                    <input type="text" class="form-control focus" name="stack" value="0">
                                </div>
                                <!-- End Example Stack Incentive -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example Incentive -->
                                <div class="example-wrap">
                                    <h4 class="example-title">Incentive</h4>
                                    <input type="text" class="form-control focus" name="inc" value="0">
                                </div>
                                <!-- End Example Incentive -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example Others  -->
                                <div class="example-wrap">
                                    <h4 class="example-title">Others</h4>
                                    <input type="text" class="form-control focus" name="others" value="0"
                                        id="others">
                                </div>
                                <!-- End Example Others  -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example Arrears -->
                                <div class="example-wrap">
                                    <h4 class="example-title">Arrears</h4>
                                    <input type="text" class="form-control focus" name="arrears" value="0"
                                        id="arrears">
                                </div>
                                <!-- End Example Arrears -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example TDS (Tax) -->
                                <div class="example-wrap">
                                    <h4 class="example-title">TDS (Tax)</h4>
                                    <input type="text" class="form-control focus" name="tds" id="tds"
                                        value="0">
                                </div>
                                <!-- End Example TDS (Tax) -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example Advance -->
                                <div class="example-wrap">
                                    <h4 class="example-title">Advance</h4>
                                    <input type="text" class="form-control focus" name="adv" id="adv"
                                        value="0">
                                </div>
                                <!-- End Example Advance -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example Penalties -->
                                <div class="example-wrap">
                                    <h4 class="example-title">Penalties</h4>
                                    <input type="text" class="form-control focus" name="penalties" id="penalties"
                                        value="0">
                                </div>
                                <!-- End Example Penalties -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example Incentive (Referral Bonus) -->
                                <div class="example-wrap">
                                    <h4 class="example-title">Incentive (Referral Bonus)</h4>
                                    <input type="text" class="form-control focus" name="ref_bonus" id="ref_bonus"
                                        value="0">
                                </div>
                                <!-- End Example Incentive (Referral Bonus) -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example Qualified Appoinments -->
                                <div class="example-wrap">
                                    <h4 class="example-title">Qualified Appoinments</h4>
                                    <input type="text" class="form-control focus" name="percent_appt" value="0"
                                        id="qua_appointments" onchange="calc_quaincentive();">
                                </div>
                                <!-- End Example Qualified Appoinments -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example Qualified Incentive -->
                                <div class="example-wrap">
                                    <h4 class="example-title">Qualified Incentive</h4>
                                    <input type="text" class="form-control focus" name="qua_incentive" value="0"
                                        id="qua_incentive">
                                </div>
                                <!-- End Example Qualified Incentive -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example KW Installed -->
                                <div class="example-wrap">
                                    <h4 class="example-title">KW Installed</h4>
                                    <input type="text" class="form-control focus" name="kw_install" id="kw_ins"
                                        value="0" onchange="calc_installinc();">
                                </div>
                                <!-- End Example KW Installed -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example KW Installed Rate -->
                                <div class="example-wrap">
                                    <h4 class="example-title">KW Installed Rate</h4>
                                    <input type="text" class="form-control focus" name="kw_install_rate"
                                        value="0" id="kw_ins_rate" onchange="calc_installinc();">
                                </div>
                                <!-- End Example KW Installed Rate -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example Installed Incentive -->
                                <div class="example-wrap">
                                    <h4 class="example-title">Installed Incentive</h4>
                                    <input type="text" class="form-control focus" name="inc_install"
                                        id="inc_installed" value="0">
                                </div>
                                <!-- End Example Installed Incentive -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example OTP Installed -->
                                <div class="example-wrap">
                                    <h4 class="example-title">OTP Installed</h4>
                                    <input type="text" class="form-control focus" name="otp_install" id="otp_ins"
                                        value="0" onchange="calc_installinc_otp();">
                                </div>
                                <!-- End Example OTP Installed -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example OTP Installed Rate -->
                                <div class="example-wrap">
                                    <h4 class="example-title">OTP Installed Rate</h4>
                                    <input type="text" class="form-control focus" name="otp_install_rate"
                                        value="0" id="otp_ins_rate" onchange="calc_installinc_otp();">
                                </div>
                                <!-- End Example OTP Installed Rate -->
                            </div>

                            <div class="col-md-6 col-lg-3 ">
                                <!-- Example OTP Installed Incentive -->
                                <div class="example-wrap">
                                    <h4 class="example-title">OTP Installed Incentive</h4>
                                    <input type="text" class="form-control focus" name="otp_inc_install"
                                        id="otp_inc_installed" value="0">
                                </div>
                                <!-- End Example OTP Installed Incentive -->
                            </div>

                        </div>
                        <div class="row g-2 justify-content-center align-items-center mt-3">
                            <div class="col-md-4 text-center">
                                <button type="submit" class="btn btn-primary ">Generate Pay Slip</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Panel Incentives & Deductions -->

            </form>
        </div>
    </div>
    <!-- End Page -->
@endsection

@section('js')
    {{-- <script src="{{ asset('global/js/custom.js ') }}"></script> --}}
    {{-- <script src="{{ asset('global/js/html2pdf.js ') }}" defer></script> --}}

    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js" defer></script> --}}
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js" defer></script> --}}

    <script>
        $(document).ready(function() {
            const get_month = $("#pay_slip_month").val();
            const init_month = new Date(get_month);
            const date_year = init_month.getFullYear();
            const date_month = init_month.getMonth() + 1; // 👈️ months are 0-based
            const month_days = getDaysInMonth(date_year, date_month);
            $("#calendar_days").val(month_days);
        });

        function monthHandler(e) {
            const date = new Date(e.target.value);
            const currentYear = date.getFullYear();
            const currentMonth = date.getMonth() + 1; // 👈️ months are 0-based
            const daysInMonth = getDaysInMonth(currentYear, currentMonth);
            $("#calendar_days").val(daysInMonth);
        }

        function getDaysInMonth(year, month) {
            return new Date(year, month, 0).getDate();
        }

        function update_payable_pst() {
            var total_payable = parseFloat($("#pst_days").val()) + parseFloat($("#leave_adj").val());
            $("#payable_day").val(total_payable);
            update_lop();
        }

        function update_payable_lvad() {
            var total_payableone = parseFloat($("#pst_days").val()) + parseFloat($("#leave_adj").val());
            $("#payable_day").val(total_payableone);
            update_lop();
        }

        function update_lop() {
            var total_lop = parseFloat($("#calendar_days").val()) - parseFloat($("#payable_day").val());
            $("#lossofpay").val(total_lop);
        }

        function calc_quaincentive() {
            var qua_app = $("#qua_appointments").val();

            if (qua_app >= 5) {
                var total_qua_inc = qua_app * 300;
                $("#qua_incentive").val(total_qua_inc);
            } else {
                $("#qua_incentive").val(0);
            }
        }

        function calc_installinc() {
            if ($("#kw_ins").val() && $("#kw_ins_rate").val() != null) {
                var kw_inc = parseFloat($("#kw_ins").val()) * parseFloat($("#kw_ins_rate").val());
                $("#inc_installed").val(kw_inc);
            }
        }

        function calc_installinc_otp() {
            if ($("#otp_ins").val() && $("#otp_ins_rate").val() != null) {
                var otp_inc = parseFloat($("#otp_ins").val()) * parseFloat($("#otp_ins_rate").val());
                $("#otp_inc_installed").val(otp_inc);
            }
        }
    </script>
@endsection
