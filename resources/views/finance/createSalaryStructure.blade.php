@extends('layouts.app')

@section('css')
    <style>
        .example-wrap {
            margin-bottom: 25px !important;
        }

        .required {
            color: red;
            font-size: 20px;
        }
    </style>
@endsection

@section('content')
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Create Salary Structure</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Payroll</a></li>
                <li class="breadcrumb-item active">Create Salary Structure</li>
            </ol>
            <div class="page-header-actions">
                <a href="{{ route('finance.createPayslip') }}" class="btn btn-primary text-white">Create Pay Slip</a>
                {{-- <a href="" class="btn btn-primary text-white">Create Salary Pay</a> --}}
            </div>
        </div>

        <div class="page-content container-fluid">

            <!-- Create Salary Structure -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Leaves & Pay Days</h3>
                        </div>
                        <div class="panel-body">
                            <form class="" action="#" method="post">

                                <div class="row row-lg">
                                    {{-- Full Name --}}
                                    <div class="col-lg-4 form-horizontal">
                                        <div class="example-wrap">
                                            <h4 class="example-title">Full Name <span class="required">*</span></h4>
                                            <input type="text" class="form-control" id="full_name" name="full_name">
                                        </div>
                                    </div>
                                    {{-- Full Name --}}

                                    {{-- Designation --}}
                                    <div class="col-lg-4 form-horizontal">
                                        <div class="example-wrap">
                                            <h4 class="example-title">Designation <span class="required">*</span></h4>
                                            <input type="text" class="form-control" id="desg" required
                                                name="desg">
                                        </div>
                                    </div>
                                    {{-- Designation --}}

                                    {{-- Gross Salary --}}
                                    <div class="col-lg-4 form-horizontal">
                                        <div class="example-wrap">
                                            <h4 class="example-title">Gross Salary <span class="required">*</span></h4>
                                            <input type="text" class="form-control" id="gross_salary" required
                                                name="gross_sal">
                                        </div>
                                    </div>
                                    {{-- Gross Salary --}}

                                    {{-- Food Allowance --}}
                                    <div class="col-lg-4 form-horizontal">
                                        <div class="example-wrap">
                                            <h4 class="example-title"><input type="checkbox" name="form-control addfood"
                                                    value="2200" id="add_food_allowance">&nbsp;&nbsp;Food Allowance <span
                                                    class="required">*</span></h4>
                                            <input type="text" class="form-control" id="food_allowance" required
                                                value="2200">
                                        </div>
                                    </div>
                                    {{-- Food Allowance --}}

                                    {{-- Travel Allowance --}}
                                    <div class="col-lg-4 form-horizontal">
                                        <div class="example-wrap">
                                            <h4 class="example-title"><input type="checkbox" name="form-control"
                                                    value="2200" id="add_travel_allowance">&nbsp;&nbsp;Travel Allowance
                                                <span class="required">*</span>
                                            </h4>
                                            <input type="text" class="form-control" id="travel_allowance" required
                                                value="2200">
                                        </div>
                                    </div>
                                    {{-- Travel Allowance --}}

                                    {{-- Stack Incentives --}}
                                    <div class="col-lg-4 form-horizontal">
                                        <div class="example-wrap">
                                            <h4 class="example-title">Stack Incentives <span class="required">*</span></h4>
                                            <input type="text" class="form-control" id="stack_incentives" required>
                                        </div>
                                    </div>
                                    {{-- Stack Incentives --}}

                                </div>
                                {{-- Sumbit Button --}}
                                <div class=" text-center g-2 justify-content-center align-items-center">
                                    <a href="#sal_struct" class="btn btn-primary" id="gen_sal">Generate Salary
                                        Structure</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Create Salary Structure -->


            {{-- <div class="row"> --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Leaves & Pay Days</h3>
                        </div>
                        <div class="panel-body">
                            <div id="sal_struct" class="container-xl">
                                <div class="row g-2 align-items-center d-print-none">
                                    <div class="col">
                                        <div class="card card-lg">
                                            <div class="card-body mt-0" id="converttoPDF">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="h2">GLOBALSYNC PRIVATE LIMITED</p>
                                                        <address>
                                                            Unit-2, Ground Floor,<br>
                                                            Okaya Center, Sector-62,<br>
                                                            Noida, UP, India 201309<br>
                                                        </address>
                                                        <p class="candidate_name h2 mb-0"><strong></strong></p>
                                                        <p class="designation fs-3"><em></em></p>
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        <img src="{{ asset('assets/images/logo.png ') }}" width="50%">
                                                    </div>
                                                    <hr style="margin: 0;">
                                                </div>
                                                <div class="row justify-content-center justify-content-around">
                                                    <div class="col-md-6">
                                                        <div class="table-responsive">
                                                            <table class="table table-vcenter">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="font-size: .775rem;">Earnings</th>
                                                                        <th style="text-align:right; font-size: .775rem;">
                                                                            Monthly</th>
                                                                        <th style="text-align:right; font-size: .775rem;">
                                                                            Annually</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Basic</td>
                                                                        <td class="text-muted basic"
                                                                            style="text-align:right;"></td>
                                                                        <td class="text-muted annual_basic"
                                                                            style="text-align:right;"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>HRA</td>
                                                                        <td class="text-right text-muted hra"
                                                                            style="text-align:right;"></td>
                                                                        <td class="text-right text-muted annual_hra"
                                                                            style="text-align:right;"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Statutory Allowance</td>
                                                                        <td class="text-muted sa"
                                                                            style="text-align:right;"></td>
                                                                        <td class="text-muted annual_sa"
                                                                            style="text-align:right;"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Other Allowance</td>
                                                                        <td class="text-muted oa"
                                                                            style="text-align:right;"></td>
                                                                        <td class="text-muted annual_oa"
                                                                            style="text-align:right;"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gross Salary</td>
                                                                        <td class="text-muted gs"
                                                                            style="text-align:right;"></td>
                                                                        <td class="text-muted annual_gs"
                                                                            style="text-align:right;"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="table-responsive">
                                                            <table class="table table-vcenter">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="font-size: .775rem;">Contributions
                                                                        </th>
                                                                        <th style="text-align:right; font-size: .775rem;">
                                                                            Monthly</th>
                                                                        <th style="text-align:right; font-size: .775rem;">
                                                                            Annually</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>PF - Employer</td>
                                                                        <td class="text-muted pfempr"
                                                                            style="text-align:right;"></td>
                                                                        <td class="text-muted annual_pfempr"
                                                                            style="text-align:right;"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>PF - Employee</td>
                                                                        <td class="text-muted pfemp"
                                                                            style="text-align:right;"></td>
                                                                        <td class="text-muted annual_pfemp"
                                                                            style="text-align:right;"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ESI - Employer</td>
                                                                        <td class="text-muted esiempr"
                                                                            style="text-align:right;"></td>
                                                                        <td class="text-muted annual_esiempr"
                                                                            style="text-align:right;"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ESI - Employee</td>
                                                                        <td class="text-muted esiemp"
                                                                            style="text-align:right;"></td>
                                                                        <td class="text-muted annual_esiemp"
                                                                            style="text-align:right;"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Total Contributions</td>
                                                                        <td class="text-muted tolduc"
                                                                            style="text-align:right;"></td>
                                                                        <td class="text-muted annual_tolduc"
                                                                            style="text-align:right;"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="table-responsive">
                                                            <table class="table table-vcenter">
                                                                <thead>
                                                                    <tr class="bg-dark-lt">
                                                                        <th colspan="3" class="text-center"
                                                                            style="font-size: .775rem;">Others</th>
                                                                    </tr>
                                                                </thead>
                                                                <tr class="food_allow">
                                                                    <td>Food Allowance<span id="fohide">*</span>
                                                                    </td>
                                                                    <td class="text-muted fa" style="text-align:right;">
                                                                    </td>
                                                                    <td class="text-muted annual_fa"
                                                                        style="text-align:right;"></td>
                                                                </tr>
                                                                <tr class="travel_allow">
                                                                    <td>Travel Allowance<span id="trhide">*</span>
                                                                    </td>
                                                                    <td class="text-muted ta" style="text-align:right;">
                                                                    </td>
                                                                    <td class="text-muted annual_ta"
                                                                        style="text-align:right;"></td>
                                                                </tr>
                                                                <tr class="stack_in">
                                                                    <td>Stack Incentives**</td>
                                                                    <td class="text-muted si" style="text-align:right;">
                                                                    </td>
                                                                    <td class="text-muted annual_si"
                                                                        style="text-align:right;"></td>
                                                                </tr>
                                                                <!-- <tr>
                                                          <td >Earnings</td>
                                                          <td class="text-muted earn" style="text-align:right;"></td>
                                                          <td class="text-muted annual_earn" style="text-align:right;"></td>
                                                        </tr> -->
                                                                <tr>
                                                                    <td><strong class="in-hand">In Hand</strong></td>
                                                                    <td class="text-muted inhand"
                                                                        style="text-align:right; font-weight: 600;">
                                                                    </td>
                                                                    <td class="text-muted annual_inhand"
                                                                        style="text-align:right; font-weight: 600;">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>CTC</strong></td>
                                                                    <td class="text-muted ctc"
                                                                        style="text-align:right; font-weight: 600;">
                                                                    </td>
                                                                    <td class="text-muted annual_ctc"
                                                                        style="text-align:right; font-weight: 600;">
                                                                    </td>
                                                                </tr>
                                                                <tr id="avaiService">
                                                                    <td colspan="3"><em>*No Cash Reimbursement
                                                                            (Availed as Service)</em></td>
                                                                </tr>
                                                                <tr class="stack_info">
                                                                    <td colspan="3"><em>**Only applicable for SEC
                                                                            Position</em></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    </div>
                                                </div>
                                                <div class="" style="page-break-after: always;"></div
                                                    >
                                                <!--<div class="row justify-content-center justify-content-around footerImage " style="padding-top: 180px;">-->
                                                <div
                                                    class="row justify-content-center justify-content-around footerImage ">
                                                    <div class="table-responsive">
                                                        <table class="table table-vcenter">
                                                            <tr class="footerImage">
                                                                <td>
                                                                    <img
                                                                        src="{{ asset('assets/images/footerImage.jpg') }}"width="100%">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container-xl mt-3">
                <div class="row g-4 align-items-center d-print-none">
                    <div class="col-md-12 text-center">
                        <button type="button" class="btn btn-outline-primary" onclick="javascript:window.print();">
                            <i class="icon wb-print" aria-hidden="true"></i>
                            Print Salary Slip
                        </button>
                        <button type="button" class="btn btn-primary" onclick="generatePDF();">
                            <i class="icon wb-download" aria-hidden="true"></i> Download Salary Structure
                        </button>
                    </div>
                </div>
            </div>
            {{-- </div> --}}
        </div>
    </div>
    <!-- End Page -->
@endsection

@section('js')
    {{-- <script src="{{ asset('global/js/custom.js ') }}"></script> --}}
    <script>
        $(".footerImage").hide();
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        $("#gen_sal").click(function() {
            var basic_calc = 0;
            var final_basic = 0;
            var final_hra = 0;
            var final_stack = 0;
            var hra = 0;
            var hra_calc = 0;
            var annual_hra_calc = 0;
            var final_food_allw = 0;
            var final_travel_allw = 0;


            var candidate_name = $("#full_name").val();
            $(".candidate_name").text(candidate_name);

            var candidate_desg = $("#desg").val();
            $(".designation").text(candidate_desg);

            var gross_sal = $("#gross_salary").val();
            var stack_inc = $("#stack_incentives").val();
            var food_allw = $("#food_allowance").val();
            var travel_allw = $("#travel_allowance").val();

            if (gross_sal == 0 || gross_sal == null) {
                final_basic = 0;
                $(".basic").text(addCommas(final_basic));
            } else {
                $(".footerImage").show();
                basic_calc = gross_sal * 0.4;

                basic_calc <= 12000 ? final_basic = 12000 : final_basic = basic_calc;
                final_basic = parseFloat(final_basic);

                $(".basic").text(addCommas(parseFloat(final_basic)));
            }

            var annual_final_basic = final_basic * 12;
            $(".annual_basic").text(addCommas(parseFloat(annual_final_basic)));

            hra_calc = final_basic * 1.5;
            if (hra_calc < gross_sal) {
                final_hra = final_basic * 0.5;
                final_hra = parseFloat(final_hra);
                $(".hra").text(addCommas(parseFloat(final_hra)));
            } else {
                final_hra = gross_sal - final_basic;
                final_hra = parseFloat(final_hra);
                $(".hra").text(addCommas(parseFloat(final_hra)));
            }

            annual_hra_calc = final_hra * 12;
            $(".annual_hra").text(addCommas(parseFloat(annual_hra_calc)));

            var sa_calculation = gross_sal - final_basic - final_hra;
            if (sa_calculation > final_hra) {
                var sa_calc = final_basic * 0.5;
                sa_calc = parseFloat(sa_calc);
                $(".sa").text(addCommas(parseFloat(sa_calc)));

            } else {
                var sa_calc = sa_calculation;
                sa_calc = parseFloat(sa_calc);
                $(".sa").text(addCommas(parseFloat(sa_calc)));
            }

            var annual_sa_calc = sa_calc * 12;
            $(".annual_sa").text(addCommas(parseFloat(annual_sa_calc)));

            var oa_calculation = gross_sal - final_basic - final_hra - sa_calc;

            oa_calc = parseFloat(oa_calculation);
            $(".oa").text(addCommas(parseFloat(oa_calc)));

            var annual_oa_calc = oa_calc * 12;
            $(".annual_oa").text(addCommas(parseFloat(annual_oa_calc)));

            var final_gross = final_basic + final_hra + sa_calc + oa_calc;
            $(".gs").text(addCommas(parseFloat(final_gross)));

            var annual_final_gross = final_gross * 12;
            $(".annual_gs").text(addCommas(parseFloat(annual_final_gross)));

            if (food_allw == null || food_allw == "" || food_allw == 0) {
                $(".food_allow").hide();
            } else {
                $(".food_allow").show();
                final_food_allw = parseInt(food_allw);
                $(".fa").text(addCommas(parseFloat(final_food_allw)));

                var annual_food_allw = final_food_allw * 12;
                $(".annual_fa").text(addCommas(parseFloat(annual_food_allw)));
            }

            if (travel_allw == null || travel_allw == "" || travel_allw == 0) {
                $(".travel_allow").hide();
            } else {
                $(".travel_allow").show();
                final_travel_allw = parseInt(travel_allw);
                $(".ta").text(addCommas(parseFloat(final_travel_allw)));

                var annual_travel_allw = final_travel_allw * 12;
                $(".annual_ta").text(addCommas(parseFloat(annual_travel_allw)));
            }

            if (stack_inc == null || stack_inc == "" || stack_inc == 0) {
                $(".stack_in").hide();
                $(".stack_info").hide();
                $(".in-hand").text("In Hand");
            } else {
                $(".stack_in").show();
                $(".stack_info").show();
                $(".in-hand").text("In Hand (Including Stack Incentives)");
                final_stack = parseInt(stack_inc);
                $(".si").text(addCommas(final_stack));

                var annual_final_stack = final_stack * 12;
                $(".annual_si").text(addCommas(annual_final_stack));
            }

            // var total_earnings = final_gross + final_stack;
            // $(".earn").text(addCommas(total_earnings));

            // var annual_total_earnings = total_earnings * 12;
            // $(".annual_earn").text(addCommas(annual_total_earnings));

            var pf_calc = gross_sal - final_hra;
            if (pf_calc >= 15000) {
                var final_pf_employer = 15000 * 0.13;
                final_pf_employer = parseFloat(final_pf_employer);

                var final_pf_employee = 15000 * 0.12;
                final_pf_employee = parseFloat(final_pf_employee);
            } else {
                var final_pf_employer = pf_calc * 0.13;
                final_pf_employer = parseFloat(final_pf_employer);

                var final_pf_employee = pf_calc * 0.12;
                final_pf_employee = parseFloat(final_pf_employee);
            }

            $(".pfempr").text(addCommas(final_pf_employer));
            $(".pfemp").text(addCommas(final_pf_employee));

            var annual_final_pf_employer = final_pf_employer * 12;
            $(".annual_pfempr").text(addCommas(annual_final_pf_employer));

            var annual_final_pf_employee = final_pf_employee * 12;
            $(".annual_pfemp").text(addCommas(annual_final_pf_employee));

            if (final_gross >= 21001) {
                var final_esi_employer = 0;
                var final_esi_employee = 0;
            } else {
                var final_esi_employer = final_gross * 0.0325;
                final_esi_employer = Math.round(final_esi_employer);

                var final_esi_employee = final_gross * 0.0075;
                final_esi_employee = Math.round(final_esi_employee);
            }

            $(".esiempr").text(addCommas(parseFloat(final_esi_employer)));
            $(".esiemp").text(addCommas(parseFloat(final_esi_employee)));

            var annual_final_esi_employer = final_esi_employer * 12;
            $(".annual_esiempr").text(addCommas(annual_final_esi_employer));

            var annual_final_esi_employee = final_esi_employee * 12;
            $(".annual_esiemp").text(addCommas(annual_final_esi_employee));

            var total_deduction = final_pf_employer + final_pf_employee + final_esi_employer + final_esi_employee;
            $(".tolduc").text(addCommas(total_deduction));

            var annual_total_deduction = total_deduction * 12;
            $(".annual_tolduc").text(addCommas(annual_total_deduction));

            // var in_hand = (final_gross - final_pf_employee - final_esi_employee) + final_stack;
            // $(".inhand").text(addCommas(in_hand));

            if ($("#add_food_allowance").is(":checked") && $("#add_travel_allowance").is(":checked")) {
                // alert($("#add_food_allowance").is(":checked") && $("#add_travel_allowance").is(":checked"));
                var add_food_allw = $("#add_food_allowance").val();
                final_add_food_allw = parseInt(add_food_allw);
                var add_travel_allw = $("#add_travel_allowance").val();
                final_add_travel_allw = parseInt(add_travel_allw);

                $("#trhide").hide();
                $("#fohide").hide();
                $("#avaiService").hide();

                $(".food_allow").show();
                $(".fa").text(addCommas(parseFloat(final_add_food_allw)));

                var annual_food_allw = final_add_food_allw * 12;
                $(".annual_fa").text(addCommas(parseFloat(annual_food_allw)));

                $(".travel_allow").show();
                $(".ta").text(addCommas(parseFloat(final_add_travel_allw)));

                var annual_travel_allw = final_add_travel_allw * 12;
                $(".annual_ta").text(addCommas(parseFloat(annual_travel_allw)));

                var in_hand = (final_gross - final_pf_employee - final_esi_employee) + final_stack +
                    final_add_food_allw + final_add_travel_allw;
                // alert(in_hand + " add_food_allowance add_travel_allowance check");
                $(".inhand").text(addCommas(in_hand));
            } else if ($("#add_travel_allowance").is(":checked")) {
                var add_travel_allw = $("#add_travel_allowance").val();
                final_add_travel_allw = parseInt(add_travel_allw);

                $("#trhide").hide();
                $("#fohide").show();
                $("#avaiService").show();

                $(".travel_allow").show();
                $(".ta").text(addCommas(parseFloat(final_add_travel_allw)));

                var annual_travel_allw = final_add_travel_allw * 12;
                $(".annual_ta").text(addCommas(parseFloat(annual_travel_allw)));

                var in_hand = (final_gross - final_pf_employee - final_esi_employee) + final_stack +
                    final_add_travel_allw;
                // alert(in_hand + " add_travel_allowance check");
                $(".inhand").text(addCommas(in_hand));
            } else if ($("#add_food_allowance").is(":checked")) {
                var add_food_allw = $("#add_food_allowance").val();
                final_add_food_allw = parseInt(add_food_allw);

                $("#fohide").hide();
                $("#trhide").show();
                $("#avaiService").show();

                $(".food_allow").show();
                $(".fa").text(addCommas(parseFloat(final_add_food_allw)));

                var annual_food_allw = final_add_food_allw * 12;
                $(".annual_fa").text(addCommas(parseFloat(annual_food_allw)));

                var in_hand = (final_gross - final_pf_employee - final_esi_employee) + final_stack +
                    final_add_food_allw;
                // alert(in_hand + " add_food_allowance check");
                $(".inhand").text(addCommas(in_hand));
            } else {
                var in_hand = (final_gross - final_pf_employee - final_esi_employee) + final_stack;
                // alert(in_hand + " not check");
                $("#fohide").show();
                $("#trhide").show();
                $("#avaiService").show();

                $(".inhand").text(addCommas(in_hand));
            }

            var annual_in_hand = in_hand * 12;
            $(".annual_inhand").text(addCommas(annual_in_hand));

            var ctc_calc = final_gross + final_stack + final_pf_employer + final_esi_employer + final_food_allw +
                final_travel_allw;
            $(".ctc").text(addCommas(ctc_calc));

            var annual_ctc_calc = ctc_calc * 12;
            $(".annual_ctc").text(addCommas(annual_ctc_calc));

            final_basic = hra = final_hra = final_stack = gross_sal = food_allw = final_food_allw = travel_allw =
                final_travel_allw = stack_inc = basic_calc = hra_calc = sa_calc = oa_calc = final_gross =
                total_earnings = final_pf_employer = final_pf_employee = final_esi_employer = final_esi_employee =
                total_deduction = in_hand = ctc_calc = 0;

            annual_final_basic = annual_final_stack = annual_gross_sal = annual_stack_inc = annual_food_allw =
                annual_travel_allw = annual_basic_calc = annual_hra_calc = annual_sa_calc = annual_oa_calc =
                annual_final_gross = annual_total_earnings = annual_final_pf_employer = annual_final_pf_employee =
                annual_final_esi_employer = annual_final_esi_employee = annual_total_deduction = annual_in_hand =
                annual_ctc_calc = 0;

        });

        function addCommas(nStr) {
            var inr_amt = nStr.toLocaleString('en-IN', {
                maximumFractionDigits: 2,
                style: 'currency',
                currency: 'INR'
            });
            return inr_amt;
        }

        function generatePDF() {
            var doc_name = $("#full_name").val() + "_Salary_Structure.pdf";
            var element = document.getElementById('converttoPDF');
            html2pdf().set({
                html2canvas: {
                    scale: 4,
                    scrollY: 0
                }
            }).from(element).save(doc_name);
        }

        // function generatePDF() {
        //     var doc_name = $("#full_name").val() + "_Salary_Structure.pdf";
        //     var element = document.getElementById('converttoPDF');

        //     var opt = {
        //         margin: 1,
        //         image: { type: 'pdf', quality: 0.98 },
        //         html2canvas: {
        //             scale: 4,
        //             scrollY: 0
        //         },
        //     };

        //     html2pdf().set(opt).from(element).save(doc_name);
        // }
    </script>
    <script src="{{ asset('global/js/html2pdf.js ') }}" defer></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js" defer>
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js" defer></script>
@endsection
