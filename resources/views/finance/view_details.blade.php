@extends('layouts.app')

@section('css')
    <style>
        .slipcss {
            position: absolute;
            left: 830px;
            top: 16px;
        }

        .slipcssarro {
            position: absolute;
            left: 870px;
            top: 16px;
        }

        @media only screen and (max-width: 600px) {
            .slipcss {
                position: absolute;
                left: 280px;
                top: 16px;
            }
        }

        .rot {
            transform: rotate(180deg);
        }
    </style>
@endsection

@section('content')
    <!-- Page -->
    <div class="page">
        <div class="page-content container-fluid">
            <div class="row">

                {{-- Profile Part --}}
                <div class="col-lg-12">
                    <!-- Page Widget -->
                    <div class="card card-shadow text-center">
                        <div class="card-block">
                            <a class="avatar avatar-lg-p" href="javascript:void(0)">
                                <img src="{{ asset('global/portraits/5.jpg ') }}" alt="...">
                            </a>
                            <h4 class="profile-user">Terrance arnold</h4>
                            <p class="profile-job">Art director</p>
                            <p>Hi! I'm Adrian the Senior UI Designer at AmazingSurge. We hope you enjoy the design and
                                quality of Social.</p>
                        </div>
                    </div>
                    <!-- End Page Widget -->
                </div>

                {{-- Details Part --}}
                <div class="col-lg-12">
                    <!-- Page Widget -->
                    <div class="card card-shadow ">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Employee Id</h5>
                                        </div>
                                        <div class="col-md-6">GSYNCINDIA001</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>DOJ</h5>
                                        </div>
                                        <div class="col-md-6">01-Feb-2000</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Department</h5>
                                        </div>
                                        <div class="col-md-6">Sales</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>PAN No.</h5>
                                        </div>
                                        <div class="col-md-6">ABCDEF12354GM</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>UAN No.</h5>
                                        </div>
                                        <div class="col-md-6">9999885511M</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>ESI No.</h5>
                                        </div>
                                        <div class="col-md-6">GSYNCINDIA001</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Payment Mode</h5>
                                        </div>
                                        <div class="col-md-6">Wire Transfer</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Bank</h5>
                                        </div>
                                        <div class="col-md-6">ICICI</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>IFS Code</h5>
                                        </div>
                                        <div class="col-md-6">SBI000078M</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Account No.</h5>
                                        </div>
                                        <div class="col-md-6">₹ 9,00,00,000</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Food Allowance</h5>
                                        </div>
                                        <div class="col-md-6">₹ 2,500</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Travel Allowance</h5>
                                        </div>
                                        <div class="col-md-6">₹ 2,500</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Special Allowance</h5>
                                        </div>
                                        <div class="col-md-6">₹ 1,200</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Meal Service Availed</h5>
                                        </div>
                                        <div class="col-md-6">No</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Travel Service Availed</h5>
                                        </div>
                                        <div class="col-md-6">Yes</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Stack Incentive</h5>
                                        </div>
                                        <div class="col-md-6">₹ 3,500</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Incentive</h5>
                                        </div>
                                        <div class="col-md-6">₹ 3,500</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Others</h5>
                                        </div>
                                        <div class="col-md-6">₹ 1,000</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Exit Date</h5>
                                        </div>
                                        <div class="col-md-6">NA</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Page Widget -->
                </div>

                {{-- Salary Slip Part --}}
                <div class="col-lg-12">
                    <h4 class="">Month's Salary Slip</h4>

                    <div class="example">
                        <div class="panel-group">
                            <div class="panel-heading">  Month Details
                        <div class="example-buttons">
                            <a class="btn btn-primary" data-toggle="collapse" href="#exampleCollapseExample"
                                aria-expanded="false" aria-controls="exampleCollapseExample">
                                View Details
                            </a>
                            <a class="btn btn-primary" href="{{ route('finance.downloadPayslip') }}" target="_blank">
                                Download Payslip
                            </a>
                        </div>
                        </div>

                        <div class="collapse" id="exampleCollapseExample">
                            <div class="card card-default">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <p class="text-muted">Month name - Attendance Sheet</p>
                                                    <div class="table-responsive">
                                                        <table class="table table-vcenter card-table">
                                                            <thead>
                                                                <tr>
                                                                    <th style="font-size: .775rem;">Date 01</th>
                                                                    <th style="font-size: .775rem;">02</th>
                                                                    <th style="font-size: .775rem;">03</th>
                                                                    <th style="font-size: .775rem;">04</th>
                                                                    <th style="font-size: .775rem;">05</th>
                                                                    <th style="font-size: .775rem;">06</th>
                                                                    <th style="font-size: .775rem;">07</th>
                                                                    <th style="font-size: .775rem;">08</th>
                                                                    <th style="font-size: .775rem;">09</th>
                                                                    <th style="font-size: .775rem;">10</th>
                                                                    <th style="font-size: .775rem;">11</th>
                                                                    <th style="font-size: .775rem;">12</th>
                                                                    <th style="font-size: .775rem;">13</th>
                                                                    <th style="font-size: .775rem;">14</th>
                                                                    <th style="font-size: .775rem;">15</th>
                                                                    <th style="font-size: .775rem;">16</th>
                                                                    <th style="font-size: .775rem;">17</th>
                                                                    <th style="font-size: .775rem;">18</th>
                                                                    <th style="font-size: .775rem;">19</th>
                                                                    <th style="font-size: .775rem;">20</th>
                                                                    <th style="font-size: .775rem;">21</th>
                                                                    <th style="font-size: .775rem;">22</th>
                                                                    <th style="font-size: .775rem;">23</th>
                                                                    <th style="font-size: .775rem;">24</th>
                                                                    <th style="font-size: .775rem;">25</th>
                                                                    <th style="font-size: .775rem;">26</th>
                                                                    <th style="font-size: .775rem;">27</th>
                                                                    <th style="font-size: .775rem;">28</th>
                                                                    <th style="font-size: .775rem;">29</th>
                                                                    <th style="font-size: .775rem;">30</th>
                                                                    <th style="font-size: .775rem;">31</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                                    <td>P</td>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <div class="row">
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Leave Bal. at Month Name End
                                                            </p>
                                                            <h3 class="m-0 mb-1">NA</h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Total Absence</p>
                                                            <h3 class="m-0 mb-1">NA</h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Total Unplanned Leave</p>
                                                            <h3 class="m-0 mb-1">NA</h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Total Present</p>
                                                            <h3 class="m-0 mb-1">NA</h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Total Half Days</p>
                                                            <h3 class="m-0 mb-1">NA</h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">W/O + PH.</p>
                                                            <h3 class="m-0 mb-1">NA</h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Late Coming</p>
                                                            <h3 class="m-0 mb-1">NA</h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Half Day(s) Because of Late
                                                            </p>
                                                            <h3 class="m-0 mb-1">NA</h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Leaves Adjusted</p>
                                                            <h3 class="m-0 mb-1">NA</h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Basic</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">HRA</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Statutory Allowance</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Other Allowance</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Employee PF Contribution</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Employer PF Contribution</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Employee ESIC Contribution
                                                            </p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Daily Pay</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Leave Bal. at Beginning of
                                                                Month Name</p>
                                                            <h3 class="m-0 mb-1">NA</h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Fixed Month Name Pay</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">TDS Deduction</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Penalties Adjustment</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Sandwhich Leave Deduction
                                                            </p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Other Incentives / Dues</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Arrears</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Incentive (Referral Bonus)
                                                            </p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Qualified App. Achieved in
                                                                Month Name</p>
                                                            <h3 class="m-0 mb-1">NA</h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Qualified % Achieved in
                                                                Month Name</p>
                                                            <h3 class="m-0 mb-1"> %</h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Incentive Qualified</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Special Allowance</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">kW Installed</p>
                                                            <h3 class="m-0 mb-1">NA</h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Installation Incentive</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Adjustment</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Net Salary</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Status</p>
                                                            <h3 class="m-0 mb-1">NA</h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Incentive Amount</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Clawback</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Incentive</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Deductions</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Advance Adjustment</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
                                                        </div>
                                                        <div class="col-lg-3 p-2">
                                                            <p class="text-muted mb-1">Stack Incentive</p>
                                                            <h3 class="m-0 mb-1">₹ </h3>
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

                    <div class="examle-wrap">
                        <div class="example">
                            <div class="panel-group">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <a href="{{ route('finance.downloadPayslip') }}" class="slipcss"
                                            title="Download Pay Slip">
                                            <i class="icon wb-download" aria-hidden="true" style="font-size: 16px;"></i>
                                        </a>

                                        <a class="panel-title" data-toggle="collapse" href="#collapse1"
                                            data-parent="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            Month Details
                                        </a>
                                    </div>
                                    <div class="panel-collapse collapse " id="collapse1">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-body text-center">
                                                            <p class="text-muted">Month name - Attendance Sheet</p>
                                                            <div class="table-responsive">
                                                                <table class="table table-vcenter card-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="font-size: .775rem;">Date 01</th>
                                                                            <th style="font-size: .775rem;">02</th>
                                                                            <th style="font-size: .775rem;">03</th>
                                                                            <th style="font-size: .775rem;">04</th>
                                                                            <th style="font-size: .775rem;">05</th>
                                                                            <th style="font-size: .775rem;">06</th>
                                                                            <th style="font-size: .775rem;">07</th>
                                                                            <th style="font-size: .775rem;">08</th>
                                                                            <th style="font-size: .775rem;">09</th>
                                                                            <th style="font-size: .775rem;">10</th>
                                                                            <th style="font-size: .775rem;">11</th>
                                                                            <th style="font-size: .775rem;">12</th>
                                                                            <th style="font-size: .775rem;">13</th>
                                                                            <th style="font-size: .775rem;">14</th>
                                                                            <th style="font-size: .775rem;">15</th>
                                                                            <th style="font-size: .775rem;">16</th>
                                                                            <th style="font-size: .775rem;">17</th>
                                                                            <th style="font-size: .775rem;">18</th>
                                                                            <th style="font-size: .775rem;">19</th>
                                                                            <th style="font-size: .775rem;">20</th>
                                                                            <th style="font-size: .775rem;">21</th>
                                                                            <th style="font-size: .775rem;">22</th>
                                                                            <th style="font-size: .775rem;">23</th>
                                                                            <th style="font-size: .775rem;">24</th>
                                                                            <th style="font-size: .775rem;">25</th>
                                                                            <th style="font-size: .775rem;">26</th>
                                                                            <th style="font-size: .775rem;">27</th>
                                                                            <th style="font-size: .775rem;">28</th>
                                                                            <th style="font-size: .775rem;">29</th>
                                                                            <th style="font-size: .775rem;">30</th>
                                                                            <th style="font-size: .775rem;">31</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                            <td>P</td>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-body text-center">
                                                            <div class="row">
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Leave Bal. at Month Name End
                                                                    </p>
                                                                    <h3 class="m-0 mb-1">NA</h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Total Absence</p>
                                                                    <h3 class="m-0 mb-1">NA</h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Total Unplanned Leave</p>
                                                                    <h3 class="m-0 mb-1">NA</h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Total Present</p>
                                                                    <h3 class="m-0 mb-1">NA</h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Total Half Days</p>
                                                                    <h3 class="m-0 mb-1">NA</h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">W/O + PH.</p>
                                                                    <h3 class="m-0 mb-1">NA</h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Late Coming</p>
                                                                    <h3 class="m-0 mb-1">NA</h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Half Day(s) Because of Late
                                                                    </p>
                                                                    <h3 class="m-0 mb-1">NA</h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Leaves Adjusted</p>
                                                                    <h3 class="m-0 mb-1">NA</h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Basic</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">HRA</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Statutory Allowance</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Other Allowance</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Employee PF Contribution</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Employer PF Contribution</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Employee ESIC Contribution
                                                                    </p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Daily Pay</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Leave Bal. at Beginning of
                                                                        Month Name</p>
                                                                    <h3 class="m-0 mb-1">NA</h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Fixed Month Name Pay</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">TDS Deduction</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Penalties Adjustment</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Sandwhich Leave Deduction
                                                                    </p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Other Incentives / Dues</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Arrears</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Incentive (Referral Bonus)
                                                                    </p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Qualified App. Achieved in
                                                                        Month Name</p>
                                                                    <h3 class="m-0 mb-1">NA</h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Qualified % Achieved in
                                                                        Month Name</p>
                                                                    <h3 class="m-0 mb-1"> %</h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Incentive Qualified</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Special Allowance</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">kW Installed</p>
                                                                    <h3 class="m-0 mb-1">NA</h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Installation Incentive</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Adjustment</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Net Salary</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Status</p>
                                                                    <h3 class="m-0 mb-1">NA</h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Incentive Amount</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Clawback</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Incentive</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Deductions</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Advance Adjustment</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
                                                                </div>
                                                                <div class="col-lg-3 p-2">
                                                                    <p class="text-muted mb-1">Stack Incentive</p>
                                                                    <h3 class="m-0 mb-1">₹ </h3>
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
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- End Page -->
@endsection

@section('js')
    <script>
        $(".collapseArrow").click(function() {
            $(this).toggleClass("rot");
        });
    </script>
@endsection
