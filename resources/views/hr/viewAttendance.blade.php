@extends('layouts.app')

@section('css')
<style>
    .cardblock {
            /* background-color: #EDEDED !important; */
            height: 150px !important;
        }
</style>
@endsection

@section('content')
    <!-- Page -->
    <div class="page">

        <div class="page-header">
            <h1 class="page-title">Employee ID : {!! $empDetail->emp_id !!}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Employee</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Attendance</a></li>
                <li class="breadcrumb-item active">{!! $empDetail->emp_id !!}</li>
            </ol>
            <div class="page-header-actions">
                <a href="{{ route('hr.attendance') }}" class="btn btn-primary">Record Attendance</a>
            </div>
        </div>

        <div class="page-content container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-block p-25">
                        <div class="counter counter-lg">
                            <div class="counter-label"><h4>Attendance Month: <strong>{{ date('F Y',strtotime($getEmpAtte->att_month)); }}</strong></h4></div>
                            <div class="counter-label"><h4>Employee Name: <strong>{!! $empDetail->emp_name !!}</strong></h4></div>
                            <div class="counter-label"><h4>Employee ID: <strong>{!! $empDetail->emp_id !!}</strong></h4></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                {{-- Total Day  --}}
                @if ($getEmpAtte->totalDay != null)
                    <div class="col-lg-3">
                        <div class="card card-block p-25 cardblock">
                            <div class="counter counter-lg">
                                <div class="counter-label text-uppercase">Total Day</div>
                                <span class="counter-number">{!! $getEmpAtte->totalDay !!}</span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-3" hidden></div>
                @endif

                {{-- Present Day --}}
                @if ($getEmpAtte->presentDay != null)
                    <div class="col-lg-3">
                        <div class="card card-block p-25 cardblock">
                            <div class="counter counter-lg">
                                <div class="counter-label text-uppercase">Present Day</div>
                                <span class="counter-number">{!! $getEmpAtte->presentDay !!}</span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-3" hidden></div>
                @endif

                {{-- Work From Office Present --}}
                @if ($getEmpAtte->wfoP != null)
                    <div class="col-lg-3">
                        <div class="card card-block p-25 cardblock">
                            <div class="counter counter-lg">
                                <div class="counter-label text-uppercase">Work From Office Present</div>
                                <span class="counter-number">{!! $getEmpAtte->wfoP !!}</span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-3" hidden></div>
                @endif

                {{-- Work From Home Present --}}
                @if ($getEmpAtte->wfhP != null)
                    <div class="col-lg-3">
                        <div class="card card-block p-25 cardblock">
                            <div class="counter counter-lg">
                                <div class="counter-label text-uppercase">Work From Home Present</div>
                                <span class="counter-number">{!! $getEmpAtte->wfhP !!}</span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-3" hidden></div>
                @endif

                {{-- Total late --}}
                @if ($getEmpAtte->late != null)
                    <div class="col-lg-3">
                        <div class="card card-block p-25 cardblock">
                            <div class="counter counter-lg">
                                <div class="counter-label text-uppercase">Total Late</div>
                                <span class="counter-number">{!! $getEmpAtte->late !!}</span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-3" hidden></div>
                @endif

                {{-- Total Absent --}}
                @if ($getEmpAtte->ab != null)
                    <div class="col-lg-3">
                        <div class="card card-block p-25 cardblock">
                            <div class="counter counter-lg">
                                <div class="counter-label text-uppercase">Total Absent</div>
                                <span class="counter-number">{!! $getEmpAtte->ab !!}</span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-3" hidden></div>
                @endif

                {{-- Work From Office Half Day --}}
                @if ($getEmpAtte->wfoHD != null)
                    <div class="col-lg-3">
                        <div class="card card-block p-25 cardblock">
                            <div class="counter counter-lg">
                                <div class="counter-label text-uppercase">Work From Office Half Day</div>
                                <span class="counter-number">{!! $getEmpAtte->wfoHD !!}</span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-3" hidden></div>
                @endif

                {{-- Work From Home Half Day --}}
                @if ($getEmpAtte->wfhHD != null)
                    <div class="col-lg-3">
                        <div class="card card-block p-25 cardblock">
                            <div class="counter counter-lg">
                                <div class="counter-label text-uppercase">Work From Home Half Day</div>
                                <span class="counter-number">{!! $getEmpAtte->wfhHD !!}</span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-3" hidden></div>
                @endif

                {{-- Unpaid Parental leave --}}
                @if ($getEmpAtte->upl != null)
                    <div class="col-lg-3">
                        <div class="card card-block p-25 cardblock">
                            <div class="counter counter-lg">
                                <div class="counter-label text-uppercase">Unpaid Parental leave</div>
                                <span class="counter-number">{!! $getEmpAtte->upl !!}</span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-3" hidden></div>
                @endif

                {{-- Public Holidays --}}
                @if ($getEmpAtte->ph != null)
                    <div class="col-lg-3">
                        <div class="card card-block p-25 cardblock">
                            <div class="counter counter-lg">
                                <div class="counter-label text-uppercase">Public Holidays</div>
                                <span class="counter-number">{!! $getEmpAtte->ph !!}</span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-3" hidden></div>
                @endif

                {{-- Birthday Leave --}}
                @if ($getEmpAtte->bl != null)
                    <div class="col-lg-3">
                        <div class="card card-block p-25 cardblock">
                            <div class="counter counter-lg">
                                <div class="counter-label text-uppercase">Birthday Leave</div>
                                <span class="counter-number">{!! $getEmpAtte->bl !!}</span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-3" hidden></div>
                @endif

                {{-- Total Week Off --}}
                @if ($getEmpAtte->wo != null)
                    <div class="col-lg-3">
                        <div class="card card-block p-25 cardblock">
                            <div class="counter counter-lg">
                                <div class="counter-label text-uppercase">Total Week Off</div>
                                <span class="counter-number">{!! $getEmpAtte->wo !!}</span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-3" hidden></div>
                @endif

                {{-- Total Short Day --}}
                @if ($getEmpAtte->sd != null)
                    <div class="col-lg-3">
                        <div class="card card-block p-25 cardblock">
                            <div class="counter counter-lg">
                                <div class="counter-label text-uppercase">Total Short Day</div>
                                <span class="counter-number">{!! $getEmpAtte->sd !!}</span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-3" hidden></div>
                @endif

            </div>

            <div class="row">
                {{-- Attendance Sheet View Data --}}
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h3 class="panel-title">{{ date('F Y',strtotime($getEmpAtte->att_month)); }} - Attendance Sheet</h3>
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

        </div>
    </div>
    <!-- End Page -->
@endsection

@section('js')
    <script>
        // var sites = { json_decode($data) };
        var array = @json($data);
        // alert(array);
        var obj = $.parseJSON(array);
        // const d = new Date(key);
        // alert(d);
        Object.keys(obj).forEach(function(key) {
            var value = obj[key];
            var dt = new Date(key);
            year = dt.getFullYear();
            month = (dt.getMonth() + 1).toString().padStart(2, "0");
            day = dt.getDate().toString().padStart(2, "0");
            $('#resultskey').append('<th style="font-size: .775rem;">' + day + '</th>');
            $('#results').append('<td style="font-size: .775rem;">' + value + '</td>');
        });
    </script>
@endsection
