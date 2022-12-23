@extends('layouts.app')

@section('content')
    <!-- Page -->
    <div class="page">
        
        <div class="page-header">
            <h1 class="page-title">Salary Slip</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Payroll</a></li>
                <li class="breadcrumb-item active">Salary Slip</li>
            </ol>
            <div class="page-header-actions">
                <a href="{{ route('finance.createPayslip') }}" class="btn btn-animate btn-animate-side btn-ghost-primary" >
                    <span><i class="icon wb-download" aria-hidden="true"></i>Create Another Payslip</span>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;
                  <button type="button" class="btn btn-animate btn-animate-side btn-primary" onclick="generatePDF();">
                    <span><i class="icon wb-download" aria-hidden="true"></i>Download Salary Slip</span>
                  </button>
                {{-- <a class="btn btn-sm btn-primary btn-round" href="http://globalsync.com.au" target="_blank">
                    <i class="icon md-link" aria-hidden="true"></i>
                    <span class="hidden-sm-down">Official Website</span>
                </a> --}}
            </div>
        </div>

        <div class="page-content container-fluid">
            <div class="page-body">
                <div class="container">
                    <div class="card card-lg">
                        <div class="card-body" id="convertPDF">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <h1>PAYSLIP <span class="text-muted">{{ strtoupper(date_format($payslip_date, "M Y")) }}</span></h1>
                                    <p class="h3">GLOBALSYNC PRIVATE LIMITED</p>
                                    <address>
                                        Unit-2, Ground Floor,<br>
                                        Okaya Center, Sector-62,<br>
                                        Noida, UP, India 201309<br>
                                    </address>
                                    <p><strong>{{ $full_name }}</strong></p>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <img class="float-right" width="50%"  src="{{ asset('assets/images/logo.png ') }}" >
                                </div>
                                <hr style="margin: 0;">
                            </div>
                            <div class="row">
                            <table class="table table-hover">
                                <tr>
                                    <td>
                                        <div class="text-muted">Employee ID</div>
                                        <p class="strong mb-1">{{ $emp_id }}</p>
                                    </td>
                                    <td>
                                        <div class="text-muted">Date Joined</div>
                                        <p class="strong mb-1">{{ strtoupper(date_format($ddoj, "d M Y")) }}</p>
                                    </td>
                                    <td>
                                        <div class="text-muted">Department</div>
                                        <p class="strong mb-1">{{ $department }}</p>
                                    </td>
                                    <td>
                                        <div class="text-muted">PAN</div>
                                        <p class="strong mb-1">{{ $pan }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-muted">Payment Mode</div>
                                        <p class="strong mb-1">{{ $payment_mode }}</p>
                                    </td>
                                    <td>
                                        <div class="text-muted">Bank</div>
                                        <p class="strong mb-1">{{ $bank }}</p>
                                    </td>
                                    <td>
                                        <div class="text-muted">Bank IFSC</div>
                                        <p class="strong mb-1">{{ $ifsc }}</p>
                                    </td>
                                    <td>
                                        <div class="text-muted">Bank Account</div>
                                        <p class="strong mb-1">{{ $ac_no }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-muted">UAN No.</div>
                                        <p class="strong mb-1">{{ $uan }}</p>
                                    </td>
                                    <td>
                                        <div class="text-muted"></div>
                                        <p class="strong mb-1"></p>
                                    </td>
                                    <td>
                                        <div class="text-muted"></div>
                                        <p class="strong mb-1"></p>
                                    </td>
                                    <td>
                                        <div class="text-muted"></div>
                                        <p class="strong mb-1"></p>
                                    </td>
                                </tr>
                            </table>
            
                            <table class="table table-hover">
                                <tr>
                                    <td colspan="4">
                                        <span class="strong">SALARY DETAILS</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-muted fs-5">CALENDAR DAYS</div>
                                        <p class="strong mb-1">{{ $cal_days }}</p>
                                    </td>
                                    <td>
                                        <div class="text-muted fs-5">PRESENT DAYS</div>
                                        <p class="strong mb-1">{{ $present_days }}</p>
                                    </td>
                                    <td>
                                        <div class="text-muted fs-5">LEAVE ADJUSTED</div>
                                        <p class="strong mb-1">{{ $lv_adj }}</p>
                                    </td>
                                    <td>
                                        <div class="text-muted fs-5">DAYS PAYABLE</div>
                                        <p class="strong mb-1">{{ $pay_days }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-muted fs-5">LOSS OF PAY DAYS</div>
                                        <p class="strong mb-1">{{ $lop }}</p>
                                    </td>
                                    <td>
                                        <div class="text-muted fs-5">LEAVE BALANCE</div>
                                        <p class="strong mb-1">{{ $lv_bal }}</p>
                                    </td>
                                    <td>
                                        <div class="text-muted fs-5"></div>
                                        <p class="strong mb-1"></p>
                                    </td>
                                    <td>
                                        <div class="text-muted fs-5"></div>
                                        <p class="strong mb-1"></p>
                                    </td>
                                </tr>
                            </table>
                        </div>
            
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <table class="table table-hover">
                                        <tr>
                                            <td class="border_right text-center">
                                                <p class="strong my-2">EARNINGS</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Basic</p>
                                            </td>
                                            <td class="border_right">
                                                <p class="mb-0 text-end basic"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">HRA</p>
                                            </td>
                                            <td class="border_right">
                                                <p class="mb-0 text-end hra"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Statutory Allowance</p>
                                            </td>
                                            <td class="border_right">
                                                <p class="mb-0 text-end sa"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Other Allowance</p>
                                            </td>
                                            <td class="border_right">
                                                <p class="mb-0 text-end oa"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Food Allowance*</p>
                                            </td>
                                            <td class="border_right">
                                                <p class="mb-0 text-end fa"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Travel Allowance*</p>
                                            </td>
                                            <td class="border_right">
                                                <p class="mb-0 text-end ta"></p>
                                            </td>
                                        </tr>
                                        <tr class="spl_tr">
                                            <td>
                                                <p class="mb-0">Special Allowance</p>
                                            </td>
                                            <td class="border_right">
                                                <p class="mb-0 text-end spl_allw"></p>
                                            </td>
                                        </tr>
                                        <tr class="stack_tr">
                                            <td>
                                                <p class="mb-0">Stack Incentive**</p>
                                            </td>
                                            <td class="border_right">
                                                <p class="mb-0 text-end si"></p>
                                            </td>
                                        </tr>
                                        <tr class="inc_tr">
                                            <td>
                                                <p class="mb-0">Incentives</p>
                                            </td>
                                            <td class="border_right">
                                                <p class="mb-0 text-end inc"></p>
                                            </td>
                                        </tr>
                                        <tr class="refinc_tr">
                                            <td>
                                                <p class="mb-0">Incentive (Referral Bonus)</p>
                                            </td>
                                            <td class="border_right">
                                                <p class="mb-0 text-end ref_inc"></p>
                                            </td>
                                        </tr>
                                        <tr class="others_tr">
                                            <td>
                                                <p class="mb-0">Others</p>
                                            </td>
                                            <td class="border_right">
                                                <p class="mb-0 text-end other"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Employer PF Share</p>
                                            </td>
                                            <td class="border_right">
                                                <p class="mb-0 text-end pfempr"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Employer ESIC Share</p>
                                            </td>
                                            <td class="border_right">
                                                <p class="mb-0 text-end esiempr"></p>
                                            </td>
                                        </tr>
                                        <tr class="arrears_tr">
                                            <td>
                                                <p class="mb-0">Arrears</p>
                                            </td>
                                            <td class="border_right">
                                                <p class="mb-0 text-end arrear"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0 strong">Total Earnings (A)</p>
                                            </td>
                                            <td class="border_right strong">
                                                <p class="mb-0 text-end tot_earn"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="strong">
                                                <p class="mb-0">Net Salary Payable (A-B)</p>
                                            </td>
                                            <td class="border_right strong">
                                                <p class="mb-0 text-end net_pay"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="strong">
                                                <p class="mb-0">Net Salary in Words</p>
                                            </td>
                                            <td colspan="2" class="border_right strong">
                                                <p class="mb-0 strong pay_word text-end"></p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <table class="table table-hover">
                                        <tr>
                                            <td class="text-center">
                                                <p class="strong my-2">DEDUCTIONS</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Employer PF Contribution</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-end pfempr"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Employer ESIC Contribution</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-end esiempr"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Employee PF Payable</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-end pfemp"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Employee ESIC Payable</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-end esiemp"></p>
                                            </td>
                                        </tr>
                                        <tr class="tds_tr">
                                            <td>
                                                <p class="mb-0">TDS (Tax)</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-end tds"></p>
                                            </td>
                                        </tr>
                                        <tr class="adv_trr">
                                            <td>
                                                <p class="mb-0">Advance</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-end adv_data"></p>
                                            </td>
                                        </tr>
                                        <tr class="penalties_tr">
                                            <td>
                                                <p class="mb-0">Penalties</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-end penalty"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Meal Service Availed*</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-end meal"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Travel Service Availed*</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-end travel"></p>
                                            </td>
                                        </tr>
                                        <tr class="sandwich_tr">
                                            <td>
                                                <p class="mb-0">Sandwich Leaves</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-end sandwich"></p>
                                            </td>
                                        </tr>
                                        <tr class="nothers_tr">
                                            <td>
                                                <p class="mb-0">Others</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-end nothers"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0 strong">Total Deductions (B)</p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-end tolduc strong"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <p class="mb-0"><em>*No Cash Reimbursement (Availed as Service)</em></p>
                                            </td>
                                        </tr>
                                        <tr class="con_tr">
                                            <td colspan="2">
                                                <p class="mb-0"><em>**Only applicable for SEC Position</em></p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <p><strong>Note:</strong><em> All amounts displayed in this pay slip are in <strong>INR</strong></em></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page -->
@endsection

@section('js')
    {{-- <script src="{{ asset('global/js/paySlip.js ') }}"></script> --}}
    <script src="{{ asset('global/js/html2pdf.js ') }}" defer></script>
 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js" defer></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script type="text/javascript">
    var full_name = '<?php echo $full_name; ?>';
    var slip_month = '<?php echo strtoupper(date_format($payslip_date,"M Y")); ?>';
    var cal_day = '<?php echo $cal_days; ?>';
    var pay_days = '<?php echo $pay_days; ?>';
    var inc = '<?php echo $inc; ?>';
    var others = '<?php echo $others; ?>';
    var arrears = '<?php echo $arrears; ?>';
    var tds = '<?php echo $tds; ?>';
    var adv = '<?php echo $adv; ?>';
    var penalties = '<?php echo $penalties; ?>';
    var msa_check = '<?php echo $msa_check; ?>';
    var tsa_check = '<?php echo $tsa_check; ?>';
    var refl_bonus = '<?php echo $ref_bonus; ?>';
    var qua_inc = '<?php echo $qua_incentive; ?>';
    var ins_inc = '<?php echo $inc_install; ?>';
    var sandwch = '<?php echo $sandwich; ?>';

    var gross_sal = 0;
    var basic_calc = 0;
    var final_basic = 0;
    var final_hra = 0;
    var final_stack = 0;
    var hra = 0;
    var hra_calc = 0;
    var final_food_allw = 0;
    var final_travel_allw = 0;
    var msa = 0;
    var tsa = 0;
    var nother = 0;
    var final_inc = 0;

    var gross_sal = '<?php echo $gross; ?>';
    var stack_inc = '<?php echo $stack; ?>';
    var food_allw = '<?php echo $food_allw; ?>';
    var travel_allw = '<?php echo $travel_allw; ?>';
    var spl_allowance = '<?php echo $spl_allowance; ?>';

    var ratio = parseFloat(pay_days) / parseFloat(cal_day);

    if(gross_sal == 0 || gross_sal == null) {
        final_basic = 0;
        $(".basic").text(addCommas(final_basic));
    } else {
        basic_calc = gross_sal * 0.4;
        basic_calc <= 12000 ? final_basic = 12000 * ratio : final_basic = basic_calc * ratio;
        $(".basic").text(addCommas(final_basic));
    }

    hra_calc = final_basic * 1.5;
    if(hra_calc < (gross_sal * ratio)){
        final_hra = final_basic * 0.5;
        $(".hra").text(addCommas(final_hra));
    } else {
        final_hra = (gross_sal * ratio) - final_basic;
        $(".hra").text(addCommas(final_hra));
    }

    var sa_calculation = (gross_sal * ratio) - final_basic - final_hra;

    if(sa_calculation > final_hra) {
        var sa_calc = final_basic * 0.5;
        $(".sa").text(addCommas(sa_calc));

    } else {
        var sa_calc = sa_calculation;
        $(".sa").text(addCommas(sa_calc));
    }

    var oa_calc = (gross_sal * ratio) - final_basic - final_hra - sa_calc;
    $(".oa").text(addCommas(oa_calc));

    var final_gross = final_basic + final_hra + sa_calc + oa_calc;
    $(".gs").text(addCommas(final_gross));

    if(food_allw == null || food_allw == "" || food_allw == 0) {
        $(".fa").text(addCommas(final_food_allw));
    } else {
        $(".food_allow").show();
        final_food_allw = parseFloat(food_allw) * ratio;
        $(".fa").text(addCommas(final_food_allw));
    }

    if(travel_allw == null || travel_allw == "" || travel_allw == 0) {
        $(".ta").text(addCommas(final_travel_allw));
    } else {
        $(".travel_allow").show();
        final_travel_allw = parseFloat(travel_allw) * ratio;
        $(".ta").text(addCommas(final_travel_allw));
    }

    if(stack_inc == null || stack_inc == "" || stack_inc == 0) {
        $(".stack_tr").hide();
        $(".con_tr").hide();
    } else {
        final_stack = parseFloat(stack_inc);
        $(".si").text(addCommas(final_stack));
    }

    if(refl_bonus == null || refl_bonus == "" || refl_bonus == 0) {
        $(".refinc_tr").hide();
    } else {
        $(".ref_inc").text(addCommas(parseFloat(refl_bonus)));
    }

    final_inc = parseFloat(inc) + parseFloat(qua_inc) + parseFloat(ins_inc);
    if(final_inc == null || final_inc == "" || final_inc == 0){
        $(".inc_tr").hide();
    } else {
        $(".inc").text(addCommas(parseFloat(final_inc)));
    }
    
    if(others == null || others == "" || others == 0) {
        $(".others_tr").hide();
        $(".nothers_tr").hide();
    } else if(others > 0){
        $(".other").text(addCommas(parseFloat(others)));
        $(".nothers_tr").hide();
    } else {
        rw_other = others.replace(/-/g, "");
        nother = parseFloat(rw_other);
        $(".nothers").text(addCommas(parseFloat(nother)));
        $(".others_tr").hide();
    }

    if(arrears == null || arrears == "" || arrears == 0) {
        $(".arrears_tr").hide();
    } else {
        $(".arrear").text(addCommas(parseFloat(arrears)));
    }

    if(spl_allowance == null || spl_allowance == "" || spl_allowance == 0) {
        $(".spl_tr").hide();
    } else {
        $(".spl_allw").text(addCommas(parseFloat(spl_allowance)));
    }

    if(tds == null || tds == "" || tds == 0) {
        $(".tds_tr").hide();
    } else {
        $(".tds").text(addCommas(parseFloat(tds)));
    }

    if(adv == null || adv == "" || adv == 0) {
        $(".adv_trr").hide();
    } else {
        $(".adv_data").text(addCommas(parseFloat(adv)));
    }

    if(penalties == null || penalties == "" || penalties == 0) {
        $(".penalties_tr").hide();
    } else {
        $(".penalty").text(addCommas(parseFloat(penalties)));
    }

    if(sandwch == null || sandwch == "" || sandwch == 0) {
        $(".sandwich_tr").hide();
    } else {
        $(".sandwich").text(addCommas(parseFloat(sandwch)));
    }

    if (ratio == 1){
        var pf_calc = (gross_sal * ratio) - final_hra;
    if(pf_calc >= 15000) {
        var final_pf_employer = (15000 * 0.13) * ratio;
        var final_pf_employee = (15000 * 0.12) * ratio;
    } else {
        var final_pf_employer = (pf_calc * 0.13) * ratio;
        var final_pf_employee = (pf_calc * 0.12) * ratio;
    }
    } else if (((ratio < 1) && ((gross_sal * ratio) < 15000)) || ((ratio < 1) && ((gross_sal * ratio) >= 15000))) {
        var pf_calc = (gross_sal * ratio) - final_hra;
    if(pf_calc >= 15000) {
        var final_pf_employer = 15000 * 0.13;
        var final_pf_employee = 15000 * 0.12;
    } else {
        var final_pf_employer = pf_calc * 0.13;
        var final_pf_employee = pf_calc * 0.12;
    }
    } else {
        var pf_calc = gross_sal - (final_hra * 2);
    if(pf_calc >= 15000) {
        var final_pf_employer = (15000 * 0.13) * ratio;
        var final_pf_employee = (15000 * 0.12) * ratio;
    } else {
        pf_calc = final_basic;
        var final_pf_employer = pf_calc * 0.13;
        var final_pf_employee = pf_calc * 0.12;
    }
    }

    // var pf_calc = gross_sal - final_hra;
    // if(pf_calc >= 15000) {
    //     var final_pf_employer = (15000 * 0.13) * ratio;
    //     var final_pf_employee = (15000 * 0.12) * ratio;
    // } else {
    //     var final_pf_employer = (pf_calc * 0.13) * ratio;
    //     var final_pf_employee = (pf_calc * 0.12) * ratio;
    // }

    $(".pfempr").text(addCommas(final_pf_employer));
    $(".pfemp").text(addCommas(final_pf_employee));

    if(gross_sal >= 21000) {
        var final_esi_employer = 0;
        var final_esi_employee = 0;
    } else {
        var final_esi_employer = final_gross * 0.0325;
        var final_esi_employee = final_gross * 0.0075;
    }

    $(".esiempr").text(addCommas(final_esi_employer));
    $(".esiemp").text(addCommas(final_esi_employee));

    msa_check == 1 ? msa = final_food_allw : msa = 0;
    $(".meal").text(addCommas(parseFloat(msa)));

    tsa_check == 1 ? tsa = final_travel_allw : tsa = 0;
    $(".travel").text(addCommas(parseFloat(tsa)));

    var ctc_calc = final_gross + final_stack + final_pf_employer + final_esi_employer + final_food_allw + final_travel_allw + parseFloat(others) + parseFloat(arrears) + parseFloat(spl_allowance) + parseFloat(refl_bonus) + final_inc;
    $(".tot_earn").text(addCommas(ctc_calc));    

    var total_deduction = final_pf_employer + final_pf_employee + final_esi_employer + final_esi_employee + parseFloat(tds) + parseFloat(adv) + parseFloat(penalties) + parseFloat(msa) + parseFloat(tsa) + parseFloat(nother) + parseFloat(sandwch);
    $(".tolduc").text(addCommas(total_deduction));

    var net = ctc_calc.toFixed(2) - total_deduction.toFixed(2);
    $(".net_pay").text(addCommas(net));
    net = net.toFixed(2);

    var splittedNum = net.toString().split('.');
    var nonDecimal=splittedNum[0];
    var decimal=splittedNum[1];
    if(decimal == 00 || decimal == null || decimal == ""){
        var value=price_in_words(Number(nonDecimal));
    } else {
        var value=price_in_words(Number(nonDecimal)) +" and "+ price_in_words(Number(decimal)) +" paise";
    }

    $(".pay_word").text(value + " Only");

    final_basic = hra = final_hra = final_stack = gross_sal = food_allw = final_food_allw = travel_allw = final_travel_allw = stack_inc = basic_calc = hra_calc = sa_calc = oa_calc = final_gross = total_earnings = final_pf_employer = final_pf_employee = final_esi_employer = final_esi_employee = total_deduction = in_hand = ctc_calc = 0;

    annual_final_basic = annual_final_stack = annual_gross_sal = annual_stack_inc = annual_food_allw = annual_travel_allw = annual_basic_calc = annual_hra_calc = annual_sa_calc = annual_oa_calc = annual_final_gross = annual_total_earnings = annual_final_pf_employer = annual_final_pf_employee = annual_final_esi_employer = annual_final_esi_employee = annual_total_deduction = annual_in_hand = annual_ctc_calc = 0;

    function addCommas(nStr) {
    var inr_amt = nStr.toLocaleString('en-IN', {
        maximumFractionDigits: 2,
        style: 'currency',
        currency: 'INR'
    });
    return inr_amt;
    }

    function price_in_words(price) {
    var sglDigit = ["Zero", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine"],
        dblDigit = ["Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen"],
        tensPlace = ["", "Ten", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"],
        handle_tens = function(dgt, prevDgt) {
        return 0 == dgt ? "" : " " + (1 == dgt ? dblDigit[prevDgt] : tensPlace[dgt])
        },
        handle_utlc = function(dgt, nxtDgt, denom) {
        return (0 != dgt && 1 != nxtDgt ? " " + sglDigit[dgt] : "") + (0 != nxtDgt || dgt > 0 ? " " + denom : "")
        };

    var str = "",
        digitIdx = 0,
        digit = 0,
        nxtDigit = 0,
        words = [];
    if (price += "", isNaN(parseInt(price))) str = "";
    else if (parseInt(price) > 0 && price.length <= 10) {
        for (digitIdx = price.length - 1; digitIdx >= 0; digitIdx--) switch (digit = price[digitIdx] - 0, nxtDigit = digitIdx > 0 ? price[digitIdx - 1] - 0 : 0, price.length - digitIdx - 1) {
        case 0:
            words.push(handle_utlc(digit, nxtDigit, ""));
            break;
        case 1:
            words.push(handle_tens(digit, price[digitIdx + 1]));
            break;
        case 2:
            words.push(0 != digit ? " " + sglDigit[digit] + " Hundred" + (0 != price[digitIdx + 1] && 0 != price[digitIdx + 2] ? " and" : "") : "");
            break;
        case 3:
            words.push(handle_utlc(digit, nxtDigit, "Thousand"));
            break;
        case 4:
            words.push(handle_tens(digit, price[digitIdx + 1]));
            break;
        case 5:
            words.push(handle_utlc(digit, nxtDigit, "Lakh"));
            break;
        case 6:
            words.push(handle_tens(digit, price[digitIdx + 1]));
            break;
        case 7:
            words.push(handle_utlc(digit, nxtDigit, "Crore"));
            break;
        case 8:
            words.push(handle_tens(digit, price[digitIdx + 1]));
            break;
        case 9:
            words.push(0 != digit ? " " + sglDigit[digit] + " Hundred" + (0 != price[digitIdx + 1] || 0 != price[digitIdx + 2] ? " and" : " Crore") : "")
        }
        str = words.reverse().join("")
    } else str = "";
    return str

    }

    var doc_name = full_name + "_" + slip_month + "_Salary_Slip.pdf";

    function generatePDF() {
				// Choose the element that our invoice is rendered in.
				const element = document.getElementById('convertPDF');
				// Choose the element and save the PDF for our user.
				html2pdf().set({ html2canvas: { scale: 4 } }).from(element).save(doc_name);
    }
</script>
@endsection
