@extends('layouts.app')

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
                <a class="btn btn-sm btn-primary btn-round" href="http://globalsync.com.au" target="_blank">
                    <i class="icon md-link" aria-hidden="true"></i>
                    <span class="hidden-sm-down">Official Website</span>
                </a>
            </div>
        </div>

        <div class="page-content container-fluid">
            <!-- Panel Create Salary Structure -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Create Salary Structure</h3>
                </div>
                <div class="panel-body">

                    <form class="row" action="#" method="post">
                        <div class="col-lg-6">
                            <div class="row">
                                <label class="col-lg-12 col-md-3 form-control-label">Full Name</label>
                                <div class="col-lg-12 col-md-9 form-group form-material">
                                    <input type="text" class="form-control is-valid" id="full_name" required
                                        name="full_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="row">
                                <label class="col-lg-12 col-md-3 form-control-label">Designation</label>
                                <div class="col-lg-12 col-md-9 form-group form-material">
                                    <input type="text" class="form-control is-valid" id="desg" required
                                        name="desg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="row">
                                <label class="col-lg-12 col-md-3 form-control-label">Gross Salary</label>
                                <div class="col-lg-12 col-md-9 form-group form-material">
                                    <input type="text" class="form-control is-valid" id="gross_salary" required
                                        name="gross_sal">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="row">
                                <label class="col-lg-12 col-md-3 form-control-label">Food Allowance</label>
                                <div class="col-lg-12 col-md-9 form-group form-material">
                                    <input type="text" class="form-control is-valid" id="food_allowance" required
                                        value="2200">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="row">
                                <label class="col-lg-12 col-md-3 form-control-label">Travel Allowance</label>
                                <div class="col-lg-12 col-md-9 form-group form-material">
                                    <input type="text" class="form-control is-valid" id="travel_allowance" required
                                        value="2200">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="row">
                                <label class="col-lg-12 col-md-3 form-control-label">Stack Incentives</label>
                                <div class="col-lg-12 col-md-9 form-group form-material">
                                    <input type="text" class="form-control is-valid" id="stack_incentives" required>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2 align-items-center">
                            <div class="col-12">
                                <a href="#sal_struct" class="btn btn-primary" id="gen_sal">Generate Salary Structure</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Panel Validation Styles -->


            {{-- <div class="row"> --}}
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
                                                        <th style="text-align:right; font-size: .775rem;">Monthly</th>
                                                        <th style="text-align:right; font-size: .775rem;">Annually</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Basic</td>
                                                        <td class="text-muted basic" style="text-align:right;"></td>
                                                        <td class="text-muted annual_basic" style="text-align:right;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>HRA</td>
                                                        <td class="text-right text-muted hra" style="text-align:right;">
                                                        </td>
                                                        <td class="text-right text-muted annual_hra"
                                                            style="text-align:right;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Statutory Allowance</td>
                                                        <td class="text-muted sa" style="text-align:right;"></td>
                                                        <td class="text-muted annual_sa" style="text-align:right;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Other Allowance</td>
                                                        <td class="text-muted oa" style="text-align:right;"></td>
                                                        <td class="text-muted annual_oa" style="text-align:right;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gross Salary</td>
                                                        <td class="text-muted gs" style="text-align:right;"></td>
                                                        <td class="text-muted annual_gs" style="text-align:right;">
                                                        </td>
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
                                                        <th style="font-size: .775rem;">Contributions</th>
                                                        <th style="text-align:right; font-size: .775rem;">Monthly</th>
                                                        <th style="text-align:right; font-size: .775rem;">Annually</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>PF - Employer</td>
                                                        <td class="text-muted pfempr" style="text-align:right;"></td>
                                                        <td class="text-muted annual_pfempr" style="text-align:right;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>PF - Employee</td>
                                                        <td class="text-muted pfemp" style="text-align:right;"></td>
                                                        <td class="text-muted annual_pfemp" style="text-align:right;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>ESI - Employer</td>
                                                        <td class="text-muted esiempr" style="text-align:right;"></td>
                                                        <td class="text-muted annual_esiempr" style="text-align:right;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>ESI - Employee</td>
                                                        <td class="text-muted esiemp" style="text-align:right;"></td>
                                                        <td class="text-muted annual_esiemp" style="text-align:right;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total Contributions</td>
                                                        <td class="text-muted tolduc" style="text-align:right;"></td>
                                                        <td class="text-muted annual_tolduc" style="text-align:right;">
                                                        </td>
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
                                                    <td>Food Allowance*</td>
                                                    <td class="text-muted fa" style="text-align:right;"></td>
                                                    <td class="text-muted annual_fa" style="text-align:right;"></td>
                                                </tr>
                                                <tr class="travel_allow">
                                                    <td>Travel Allowance*</td>
                                                    <td class="text-muted ta" style="text-align:right;"></td>
                                                    <td class="text-muted annual_ta" style="text-align:right;"></td>
                                                </tr>
                                                <tr class="stack_in">
                                                    <td>Stack Incentives**</td>
                                                    <td class="text-muted si" style="text-align:right;"></td>
                                                    <td class="text-muted annual_si" style="text-align:right;"></td>
                                                </tr>
                                                <!-- <tr>
                                              <td >Earnings</td>
                                              <td class="text-muted earn" style="text-align:right;"></td>
                                              <td class="text-muted annual_earn" style="text-align:right;"></td>
                                            </tr> -->
                                                <tr>
                                                    <td><strong class="in-hand">In Hand</strong></td>
                                                    <td class="text-muted inhand"
                                                        style="text-align:right; font-weight: 600;"></td>
                                                    <td class="text-muted annual_inhand"
                                                        style="text-align:right; font-weight: 600;"></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>CTC</strong></td>
                                                    <td class="text-muted ctc"
                                                        style="text-align:right; font-weight: 600;"></td>
                                                    <td class="text-muted annual_ctc"
                                                        style="text-align:right; font-weight: 600;"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"><em>*No Cash Reimbursement (Availed as
                                                            Service)</em></td>
                                                </tr>
                                                <tr class="stack_info">
                                                    <td colspan="3"><em>**Only applicable for SEC Position</em></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-xl mt-3">
                <div class="row g-2 align-items-center d-print-none">
                    <div class="col-md-12 text-center">
                        <button type="button" class="btn btn-outline-primary" onclick="javascript:window.print();">
                            <!-- Download SVG icon from http://tabler-icons.io/i/printer -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2">
                                </path>
                                <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"></path>
                                <rect x="7" y="13" width="10" height="8" rx="2">
                                </rect>
                            </svg>
                            Print Salary Slip
                        </button>
                        <button type="button" class="btn btn-primary" onclick="generatePDF();">
                            
                            <div class="icondemo vertical-align-middle">
                                <i class="icon fa-file-pdf-o" aria-hidden="true"></i>
                                <div class="icon-title">Download Salary Structure</div>
                              </div>
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
    <script src="{{ asset('global/js/custom.js ') }}"></script>
    <script src="{{ asset('global/js/html2pdf.js ') }}" defer></script>
 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js" defer></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js" defer></script>
@endsection
