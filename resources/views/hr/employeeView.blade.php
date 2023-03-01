@extends('layouts.app')

@section('content')
    <!-- Page -->
    <div class="page">
        <div class="page-content container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Widget -->
                    <div class="card card-shadow text-center">
                        <div class="example">
                            <div class="ribbon ribbon-clip ribbon-primary">
                                <span class="ribbon-inner">{{ $roleName->role_name }}</span>
                            </div>
                        </div>
                        <div class="card-block">
                            <a class="avatar avatar-lg" href="javascript:void(0)">
                                <img src="../../../global/portraits/5.jpg" alt="...">
                            </a>
                            <h4 class="profile-user">{{ $fetchFormArr['emp_name'] }}</h4>
                            <p class="profile-job">{{ $fetchFormArr['emp_desg'] }}</p>
                            <p>{{ $fetchFormArr['emp_desp'] }}</p>
                            {{-- <div class="profile-social">
                                <a class="icon bd-twitter" href="javascript:void(0)"></a>
                                <a class="icon bd-facebook" href="javascript:void(0)"></a>
                                <a class="icon bd-dribbble" href="javascript:void(0)"></a>
                                <a class="icon bd-github" href="javascript:void(0)"></a>
                            </div>
                            <button type="button" class="btn btn-primary">Follow</button> --}}
                        </div>
                        {{-- <div class="card-footer">
                            <div class="row no-space">
                                <div class="col-4">
                                    <strong class="profile-stat-count">260</strong>
                                    <span>Follower</span>
                                </div>
                                <div class="col-4">
                                    <strong class="profile-stat-count">180</strong>
                                    <span>Following</span>
                                </div>
                                <div class="col-4">
                                    <strong class="profile-stat-count">2000</strong>
                                    <span>Tweets</span>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <!-- End Page Widget -->
                </div>

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
        </div>
    </div>
    <!-- End Page -->
@endsection
