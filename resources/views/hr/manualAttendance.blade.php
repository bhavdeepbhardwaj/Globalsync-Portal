@extends('layouts.app')

@section('css')
    <style>
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
            <h1 class="page-title">Employee</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Employee</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Attendance</a></li>
                <li class="breadcrumb-item active">Manual</li>
            </ol>
            <div class="page-header-actions">
                <a href="{{ route('hr.attendance') }}" class="btn btn-primary">Record Attendance</a>
                {{-- <a href="" class="btn btn-primary" >Generate Bulk Attendance Excel</a> --}}

            </div>
        </div>

        <div class="page-content container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Panel -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Employee Attendance</h3>
                        </div>

                        <div class="panel-body">

                            {{-- Employee Status --}}
                            <div class="row row-lg">
                                <div class="col-md-12">
                                    <form autocomplete="off" method="POST"
                                        action="{{ route('hr.manual-attendance-save') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-lg-6 form-horizontal">
                                                <div class="form-group row">
                                                    <label class="col-lg-12 col-md-12 ">Attendance Month <span
                                                            class="required">*</span></label>
                                                    <div class="col-lg-12 col-md-12">
                                                        <input type="month" class="form-control" id="att_month"
                                                            name="att_month" placeholder="Attendance Month">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 form-horizontal">
                                                <div class="form-group row">
                                                    <label class="col-lg-12 col-md-12 ">Employee ID <span
                                                            class="required">*</span></label>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <select class="form-control" name="emp_id"
                                                                data-fv-notempty="true">
                                                                <option value="">Please choose Country</option>
                                                                @foreach ($getdata as $data)
                                                                    <option value="{{ $data->emp_id }}">{{ $data->emp_id }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 form-horizontal">
                                                <div class="form-group row">
                                                    <label class="col-lg-12 col-md-12 ">Attendance Days <span
                                                            class="required">*</span></label>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="panel-body  table-responsive">
                                                            <table
                                                                class="table table-bordered table-striped table-hover w-full"
                                                                data-plugin="" id="tableremovefield">
                                                                <thead class="text-center">
                                                                    <tr>
                                                                        <th class="">Day</th>
                                                                        <th class="">Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="dynamic_field"></tbody>
                                                            </table>
                                                            <input type='button' class="form-control" value='Add Days'
                                                                id='addRow' name='addRow' />
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            {{-- Submit Button --}}
                                            <div class="form-group col-xl-12 text-center padding-top-m">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                            {{-- Submit Button --}}
                                    </form>
                                </div>
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

@section('js')
    <!-- jQuery library -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#addRow').click(function() {
                $("#tableremovefield").find("tr.bhavdeep").remove();
                var fulldetail = $('#att_month').val();
                if (fulldetail == '') {
                    alert('Please seelct the month');
                    window.location.reload();
                } else {
                    var yeardetail = fulldetail.slice(0, 4);
                    var monthdetail = fulldetail.slice(5);

                    function daysInMonth(month, year) {
                        return new Date(year, month, 0).getDate();
                    }
                    var l = 0;
                    var dayInMonth = daysInMonth(monthdetail, yeardetail);
                    for (let i = 0; i < dayInMonth; i++) {
                        l = l + 1;
                        // j = 65 + i
                        // String.fromCharCode(j)
                        var fullMonthDetail = fulldetail + '-' + l;
                        $('#dynamic_field').append('<tr class="text-center bhavdeep"><td  id="row_num_' +
                            fullMonthDetail + '">' + fullMonthDetail +
                            '<td ><select class="form-control" name="status[' + fullMonthDetail +
                            ']" id="status" data-fv-notempty="true"> <option value="">Please choose</option> <option value="WFO-P">WFO-P</option> <option value="WFH-P">WFH-P</option> <option value="LATE">LATE</option> <option value="AB">AB</option> <option value="WFO-HD">WFO-HD</option> <option value="WFH-HD">WFH-HD</option> <option value="UPL">UPL</option> <option value="PH">PH</option> <option value="BL">BL</option> <option value="W/O">W/O</option> <option value="SD">SD</option></select>' +
                            '<td hidden><button type="button"  name="remove" class="btn btn-danger btn_remove">X</button></td></tr>'
                        );

                        $(document).on('click', '.btn_remove', function() {
                            $(this).closest("tr").remove(); //use closest here
                            $('tbody tr').each(function(index) {
                                //change id of first tr
                                $(this).find("td:eq(0)").attr("id", "row_num" + (index + 1))
                                //change hidden input value
                                $(this).find("td:eq(0)").html((index + 1) +
                                    '<input type="hidden" name="task_number[]" value=' +
                                    (
                                        index + 1) +
                                    '>')
                            });
                        });
                    }
                }
            });
        });
    </script>
@endsection
