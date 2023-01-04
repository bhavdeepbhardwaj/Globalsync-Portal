@extends('layouts.app')

@section('content')
    <!-- Page -->
    <div class="page">

        <div class="page-header">
            <h1 class="page-title">Salary Slip</h1>
            {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Payroll</a></li>
                <li class="breadcrumb-item active">Salary Slip</li>
            </ol> --}}
            <div class="page-header-actions">
                {{-- <a href="{{ route('finance.createPayslip') }}" class="btn btn-animate btn-animate-side btn-ghost-primary">
                    <span><i class="icon wb-download" aria-hidden="true"></i>Create Another Payslip</span>
                </a>&nbsp;&nbsp;&nbsp;&nbsp; --}}
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
                                    <h1>PAYSLIP <span class="text-muted">Month </span></h1>
                                    <p class="h3">GLOBALSYNC PRIVATE LIMITED</p>
                                    <address>
                                        Unit-2, Ground Floor,<br>
                                        Okaya Center, Sector-62,<br>
                                        Noida, UP, India 201309<br>
                                    </address>
                                    <p><strong>Name</strong></p>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <img class="float-right" width="50%" src="{{ asset('assets/images/logo.png ') }}">
                                </div>
                                <hr style="margin: 0;">
                            </div>
                            <div class="row">
                                <table class="table table-hover">
                                    <tr>
                                        <td>
                                            <div class="text-muted">Employee ID</div>
                                            <p class="strong mb-1">NA</p>
                                        </td>
                                        <td>
                                            <div class="text-muted">Date Joined</div>
                                            <p class="strong mb-1">20-03-2033</p>
                                        </td>
                                        <td>
                                            <div class="text-muted">Department</div>
                                            <p class="strong mb-1">NA</p>
                                        </td>
                                        <td>
                                            <div class="text-muted">PAN</div>
                                            <p class="strong mb-1">654ASD556</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-muted">Payment Mode</div>
                                            <p class="strong mb-1">NA</p>
                                        </td>
                                        <td>
                                            <div class="text-muted">Bank</div>
                                            <p class="strong mb-1">NA</p>
                                        </td>
                                        <td>
                                            <div class="text-muted">Bank IFSC</div>
                                            <p class="strong mb-1">DEGF2323</p>
                                        </td>
                                        <td>
                                            <div class="text-muted">Bank Account</div>
                                            <p class="strong mb-1">12425343234</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-muted">UAN No.</div>
                                            <p class="strong mb-1">234234234</p>
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
                                            <p class="strong mb-1">31</p>
                                        </td>
                                        <td>
                                            <div class="text-muted fs-5">PRESENT DAYS</div>
                                            <p class="strong mb-1">31</p>
                                        </td>
                                        <td>
                                            <div class="text-muted fs-5">LEAVE ADJUSTED</div>
                                            <p class="strong mb-1">0</p>
                                        </td>
                                        <td>
                                            <div class="text-muted fs-5">DAYS PAYABLE</div>
                                            <p class="strong mb-1">31</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-muted fs-5">LOSS OF PAY DAYS</div>
                                            <p class="strong mb-1">0</p>
                                        </td>
                                        <td>
                                            <div class="text-muted fs-5">LEAVE BALANCE</div>
                                            <p class="strong mb-1">0</p>
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
                            <p><strong>Note:</strong><em> All amounts displayed in this pay slip are in
                                    <strong>INR</strong></em></p>
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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js" defer>
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        var doc_name = full_name + "_" + slip_month + "_Salary_Slip.pdf";

        function generatePDF() {
            // Choose the element that our invoice is rendered in.
            const element = document.getElementById('convertPDF');
            // Choose the element and save the PDF for our user.
            html2pdf().set({
                html2canvas: {
                    scale: 4
                }
            }).from(element).save(doc_name);
        }
    </script>
@endsection
