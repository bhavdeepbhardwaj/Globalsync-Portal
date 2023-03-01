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

        .page-profile .card-block {
            padding: 40px 40px;
            background-color: #fff;
        }

        .cardblock {
            background-color: #EDEDED !important;
            height: 150px !important;
        }

        .nav-tabs {
            border-bottom: 0px solid #e0e0e0;
        }

        .nav-tabs-solid~.tab-content {
            padding: 0px;
            background-color: #F1F4F5;
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
                        <div class="example">
                            <div class="ribbon ribbon-clip ribbon-primary">
                                <span class="ribbon-inner">{{ $roleName->role_name }}</span>
                            </div>
                        </div>
                        <div class="card-block">
                            <a class="avatar avatar-lg-p" href="javascript:void(0)">
                                <img src="{{ asset('global/portraits/5.jpg ') }}" alt="...">
                            </a>
                            <h4 class="profile-user">{{ $fetchFormArr['emp_name'] }}</h4>
                            <p class="profile-job">{{ $fetchFormArr['emp_desg'] }}</p>
                            <p>{{ $fetchFormArr['emp_desp'] }}</p>
                        </div>
                    </div>
                    <!-- End Page Widget -->
                </div>
            </div>

            {{-- Details Part --}}
            <div class="row">
                <div class="col-lg-12">
                    <!-- Panel -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Employee Status</h3>
                        </div>
                        <div class="panel-body">

                            {{-- Employee Status --}}
                            <div class="row row-lg">

                                {{-- Employee ID --}}
                                @if ($empView->emp_id != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>Employee ID</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                {{ $empView->emp_id }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- Employee Status --}}
                                @if ($empView->emp_status != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>Employee Status</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                {{-- @php
                                                // $fetchFormArr = json_decode($empView->formdata, true);
                                                $deptName = \App\Models\Department::where('id', $fetchFormArr['emp_dept'])->first();
                                            @endphp
                                            {{ $deptName->name }} --}}
                                                @if ($empView->emp_status == 1)
                                                    <span class="badge badge-outline badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-outline badge-warning">Inactive</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- PAN No --}}
                                @if ($fetchFormArr['emp_pan'] != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>PAN No</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                {{ $fetchFormArr['emp_pan'] }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- Employee UAN No --}}
                                @if ($fetchFormArr['emp_uan'] != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>Employee UAN No</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                {{ $fetchFormArr['emp_uan'] }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- ESI No --}}
                                @if ($fetchFormArr['emp_esi'] != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>ESI No</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                {{ $fetchFormArr['emp_esi'] }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- Payment Mode --}}
                                @if ($fetchFormArr['emp_paymode'] != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>Payment Mode</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                {{ $fetchFormArr['emp_paymode'] }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- Bank --}}
                                @if ($fetchFormArr['emp_bank'] != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>Bank</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                {{ $fetchFormArr['emp_bank'] }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- IFS Code --}}
                                @if ($fetchFormArr['emp_ifsc'] != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>IFS Code</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                {{ $fetchFormArr['emp_ifsc'] }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- Account No --}}
                                @if ($fetchFormArr['emp_acc'] != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>Account No</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                {{ $fetchFormArr['emp_acc'] }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- Gross Salary --}}
                                @if ($fetchFormArr['emp_gsal'] != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>Gross Salary</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                {{ $fetchFormArr['emp_gsal'] }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- Food Allowance --}}
                                @if ($fetchFormArr['emp_food'] != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>Food Allowance</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                {{ $fetchFormArr['emp_food'] }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- Travel Allowance --}}
                                @if ($fetchFormArr['emp_travel'] != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>Travel Allowance</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                {{ $fetchFormArr['emp_travel'] }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- Special Allowance --}}
                                @if ($fetchFormArr['emp_spl'] != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>Special Allowance</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                {{ $fetchFormArr['emp_spl'] }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- Meal Service Availed --}}
                                @if ($fetchFormArr['emp_meal'] != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>Meal Service Availed</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                @if ($fetchFormArr['emp_meal'] == 1)
                                                    Yes
                                                @else
                                                    No
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- Travel Service Availed --}}
                                @if ($fetchFormArr['emp_cab'] != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>Travel Service Availed</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                @if ($fetchFormArr['emp_cab'] == 1)
                                                    Yes
                                                @else
                                                    No
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- Stack Incentive --}}
                                @if ($fetchFormArr['emp_stinc'] != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>Stack Incentive</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                {{ $fetchFormArr['emp_stinc'] }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- Incentive --}}
                                @if ($fetchFormArr['emp_inc'] != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>Incentive</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                {{ $fetchFormArr['emp_inc'] }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- Others --}}
                                @if ($fetchFormArr['emp_other'] != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>Others</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                {{ $fetchFormArr['emp_other'] }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                                {{-- Exit Date --}}
                                @if ($fetchFormArr['emp_exitdate'] != null)
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                <h5>Exit Date</h5>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                                                {{ $fetchFormArr['emp_exitdate'] }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6 pt-3" hidden></div>
                                @endif

                            </div>
                            {{-- Employee Status --}}

                        </div>
                    </div>
                    <!-- End Panel -->
                </div>
            </div>

            <!-- Tab Animation for Details Salary Slip -->
            <h4>Month's Salary Details</h4>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="example-wrap">
                        <div class="nav-tabs-horizontal nav-tabs-inverse nav-tabs-animate" data-plugin="tabs">

                            <ul class="nav nav-tabs nav-tabs-solid" role="tablist">
                                @foreach ($month as $monName)
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link " data-toggle="tab" href="#{{ $monName->att_month }}"
                                            aria-controls="exampleTabsAnimateSlideBottomOne" role="tab"
                                            aria-expanded="true"
                                            onClick="popupfunctioncall('{{ $monName->emp_id }}',' {{ $monName->att_month }}');">
                                            {{ date('F Y', strtotime($monName->att_month)) }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                            <div class="tab-content">
                                @foreach ($month as $monName)
                                    <div class="tab-pane animation-slide-bottom " id="{{ $monName->att_month }}"
                                        role="tabpanel">
                                        {{-- Attendance Sheet --}}
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <p class="text-muted">
                                                            {{ date('F Y', strtotime($monName->att_month)) }} - Attendance
                                                            Sheet</p>
                                                        <div class="table-responsive">
                                                            <table class="table table-vcenter card-table">
                                                                <thead>
                                                                    <tr id="resultskey" class="">
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr id="results">
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Month Details --}}
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">Month Status</h3>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <div class="row">

                                                            {{-- Total Day  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Total Day
                                                                        </div>
                                                                        <span
                                                                            class="counter-number">{{ $monName->totalDay }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Present Day --}}
                                                            {{-- @if ($getEmpAtte->presentDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Present
                                                                            Day</div>
                                                                        <span
                                                                            class="counter-number">{{ $monName->presentDay }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Work From Office Present --}}
                                                            {{-- @if ($getEmpAtte->wfoP != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Work From
                                                                            Office Present</div>
                                                                        <span
                                                                            class="counter-number">{{ $monName->wfoP }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Work From Home Present --}}
                                                            {{-- @if ($getEmpAtte->wfhP != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Work From
                                                                            Home Present</div>
                                                                        <span
                                                                            class="counter-number">{{ $monName->wfhP }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Total late --}}
                                                            {{-- @if ($getEmpAtte->late != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Total
                                                                            Late</div>
                                                                        <span
                                                                            class="counter-number">{{ $monName->late }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Total Absent --}}
                                                            {{-- @if ($getEmpAtte->ab != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Total
                                                                            Absent</div>
                                                                        <span
                                                                            class="counter-number">{{ $monName->ab }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Work From Office Half Day --}}
                                                            {{-- @if ($getEmpAtte->wfoHD != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Work From
                                                                            Office Half Day</div>
                                                                        <span
                                                                            class="counter-number">{{ $monName->wfoHD }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Work From Home Half Day --}}
                                                            {{-- @if ($getEmpAtte->wfhHD != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Work From
                                                                            Home Half Day</div>
                                                                        <span
                                                                            class="counter-number">{{ $monName->wfhHD }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Unpaid Parental leave --}}
                                                            {{-- @if ($getEmpAtte->upl != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Unpaid
                                                                            Parental leave</div>
                                                                        <span
                                                                            class="counter-number">{{ $monName->upl }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Public Holidays --}}
                                                            {{-- @if ($getEmpAtte->ph != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Public
                                                                            Holidays</div>
                                                                        <span
                                                                            class="counter-number">{{ $monName->ph }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Birthday Leave --}}
                                                            {{-- @if ($getEmpAtte->bl != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Birthday
                                                                            Leave</div>
                                                                        <span
                                                                            class="counter-number">{{ $monName->bl }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Total Week Off --}}
                                                            {{-- @if ($getEmpAtte->wo != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Total
                                                                            Week Off</div>
                                                                        <span
                                                                            class="counter-number">{{ $monName->wo }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Total Short Day --}}
                                                            {{-- @if ($getEmpAtte->sd != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Total
                                                                            Short Day</div>
                                                                        <span
                                                                            class="counter-number">{{ $monName->sd }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Leave Bal. at Month Name End --}}
                                                            {{-- @if ($getEmpAtte->sd != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Leave
                                                                            Bal. at
                                                                            Month Name End</div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Half Day(s) Because of Late --}}
                                                            {{-- @if ($getEmpAtte->sd != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Half
                                                                            Day(s)
                                                                            Because of Late</div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Leaves Adjusted --}}
                                                            {{-- @if ($getEmpAtte->sd != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Leaves
                                                                            Adjusted</div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Salary Details --}}
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">Month Salary Details</h3>
                                                    </div>
                                                    <div class="card-body text-center">
                                                        <div class="row">

                                                            {{-- Basic  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Basic
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- HRA  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">HRA
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Statutory Allowance  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Statutory
                                                                            Allowance
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Other Allowance  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Other
                                                                            Allowance
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Special Allowance  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Special
                                                                            Allowance
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Stack Incentive  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Stack
                                                                            Incentive
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Employee PF Contribution  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Employee
                                                                            PF
                                                                            Contribution
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Employer PF Contribution  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Employer
                                                                            PF
                                                                            Contribution
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Employee ESIC Contribution  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Employee
                                                                            ESIC
                                                                            Contribution
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Daily Pay  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Daily Pay
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Leave Bal. at Beginning of OCT  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Leave
                                                                            Bal. at
                                                                            Beginning of OCT
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Fixed OCT Pay  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Fixed OCT
                                                                            Pay
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- TDS Deduction  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">TDS
                                                                            Deduction</div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Penalties Adjustment  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Penalties
                                                                            Adjustment
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Arrears  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Arrears
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Incentive (Referral Bonus)  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Incentive
                                                                            (Referral Bonus)
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Qualified App. Achieved in September  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Qualified
                                                                            App. Achieved in September
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Incentive Qualified  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Incentive
                                                                            Qualified
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- kW Installed  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">kW
                                                                            Installed
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- KW Installation Incentive  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">KW
                                                                            Installation Incentive
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- OTP Installed  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">OTP
                                                                            Installed
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- OTP Installation Incentive  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">OTP
                                                                            Installation Incentive
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Incentive  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Incentive
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Net Salary  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Net
                                                                            Salary
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Deductions  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">
                                                                            Deductions
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                            {{-- Advance Adjustment  --}}
                                                            {{-- @if ($getEmpAtte->totalDay != null) --}}
                                                            <div class="col-lg-3">
                                                                <div class="card card-block p-25 cardblock">
                                                                    <div class="counter counter-lg">
                                                                        <div class="counter-label text-uppercase">Advance
                                                                            Adjustment
                                                                        </div>
                                                                        <span class="counter-number">0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @else
                                                            <div class="col-lg-3" hidden></div>
                                                        @endif --}}

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tab Animation -->

        </div>
    </div>
    <!-- End Page -->
@endsection

@section('js')
    <script type="text/javascript">
        // Details Attendance Modal POPUP
        function popupfunctioncall(empID, month) {
            // alert(empID);
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: '{{ route('finance.attendanceSheet') }}',
                data: {
                    'empID': empID,
                    'month': month
                },
                success: function(result) {
                    console.log(result);
                    // var array = json(result);
                    // alert(array);
                    var obj = $.parseJSON(result.data);
                    // var obj = $.parseJSON(result.data);
                    Object.keys(obj).forEach(function(key) {
                        var value = obj[key];
                        // console.log(key + ' => ' + value);
                        // $('#results').append('<tr><td>' + key + '</td><td>' + value + '</td></tr>');
                        $('#resultskey').append('<th>' + key + '</th>');
                        $('#results').append('<td>' + value + '</td>');
                    });
                },
                error: function() {
                    alert("json not found");
                }
            });
        }
    </script>
@endsection
