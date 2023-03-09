@extends('layouts.app')

@section('css')
    <style>
        .table-vcenter> :not(caption)>*>* {
            vertical-align: middle;
        }
    </style>
@endsection

@section('content')
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Employee</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Employee</a></li>
                <li class="breadcrumb-item active">Attendance</li>
            </ol>
            <div class="page-header-actions">
                <a href="{{ route('hr.manual-attendance') }}" class="btn btn-primary text-white">Manual Attendance
                    Insert</a>
                <a href="{{ route('hr.bulk-attendance') }}" class="btn btn-primary text-white">Generate Bulk
                    Attendance
                    Excel</a>
            </div>
        </div>

        <div class="page-content">
            <!-- Panel Basic -->
            <div class="panel">
                <header class="panel-heading">
                    <div class="panel-actions"></div>
                    <h3 class="panel-title"></h3>
                </header>

                <div class="panel-body">
                    <form class="row" method="" accept="" enctype="">
                        <div class="col-lg-6 ">
                            <h4 class="example-title">Employee ID</h4>
                            <div class="form-group">
                                <select class="form-control" name="empid">
                                    <option value="0">All</option>
                                    @foreach ($user as $emp)
                                        <option value="{{ $emp->emp_id }}"
                                            @if ($empid == $emp->emp_id) selected @endif>{{ $emp->emp_id }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <h4 class="example-title">Select Month</h4>
                            <div class="form-group">
                                <input type="month" class="form-control" name="month_year" placeholder="Select Month">
                            </div>
                        </div>

                        <div class="form-group col-xl-12 text-center padding-top-m">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

                <div class="panel-body table-responsive">
                    <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                        <thead>
                            <tr>
                                <th>EMPLOYEE ID</th>
                                <th>MONTH </th>
                                <th>TOTAL DAY</th>
                                <th>PRESENT DAY</th>
                                <th>DETAILS</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>EMPLOYEE ID</th>
                                <th>MONTH </th>
                                <th>TOTAL DAY</th>
                                <th>PRESENT DAY</th>
                                <th>DETAILS</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($getEmpAtte as $empAtt)
                                <tr>
                                    <td>{{ $empAtt->emp_id }}</td>
                                    <td>{{ date('F Y', strtotime($empAtt->att_month)) }}</td>
                                    <td>{!! $empAtt->totalDay !!}</td>
                                    <td>{{ $empAtt->presentDay }}</td>
                                    <td><a
                                            href="{{ route('hr.viewAttendance', ['emp_id' => $empAtt->emp_id, 'att_month' => $empAtt->att_month]) }}"><i
                                                class="icon wb-eye" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End Panel Basic -->
        </div>
    </div>
    <!-- End Page -->

    <!-- Details Attendance Modal -->
    <div class="modal fade modal-3d-flip-horizontal" id="exampleFormModal" aria-hidden="false"
        aria-labelledby="exampleFormModalLabel" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-simple ">
            <form class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="exampleFormModalLabel">Details Attendance</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                        <table class="table table-hover table-vcenter" data-plugin="">
                            <thead>
                                <tr id="resultskey">
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="results">
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Details Attendance Modal -->
@endsection

@section('js')
    <script type="text/javascript">
        // Details Attendance Modal POPUP
        function popupfunctioncall(empID, month) {
            // alert(empID);
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: '{{ route('hr.popUpDetailsAttendance') }}',
                data: {
                    'empID': empID,
                    'month': month
                },
                success: function(result) {
                    var obj = $.parseJSON(result.data);
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
