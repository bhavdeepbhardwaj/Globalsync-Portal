@extends('layouts.app')

@section('content')
    <!-- Page -->
    <div class="page">

        <div class="page-header">
            <h1 class="page-title">Employee</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Employee</a></li>
                <li class="breadcrumb-item active">Attendance</li>
            </ol>
            <div class="page-header-actions">
                <button class="btn btn-primary" data-target="#exampleMultipleOne" data-toggle="modal"
                    type="button">Generate</button>

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

    <!-- Modal -->
    <div class="modal fade modal-3d-flip-horizontal" id="exampleMultipleOne" aria-hidden="true"
        aria-labelledby="exampleMultipleOne" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-simple modal-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Attendance</h4>
                </div>
                <div class="modal-body">
                    <p>What do you</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-target="#exampleFormModal" data-toggle="modal"
                        data-dismiss="modal">Manual Attendance Insert</button>
                    <button type="button" class="btn btn-primary" data-target="#exampleMultipleTwo" data-toggle="modal"
                        data-dismiss="modal">Generate Bulk Attendance Excel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    <!-- Modal -->
    <div class="modal fade modal-3d-flip-horizontal" id="exampleFormModal" aria-hidden="false"
        aria-labelledby="exampleFormModalLabel" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-simple modal-center">
            <form class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="exampleFormModalLabel">Attendance</h4>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" method="POST" action="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6 form-horizontal">
                                <div class="form-group row">
                                    <label class="col-lg-12 col-md-12 form-control-label">Attendance Month<span
                                            class="required">*</span></label>
                                    <div class="col-lg-12 col-md-12">
                                        <input type="month" class="form-control" name="att_month"
                                            placeholder="Attendance Month" value="{{ old('att_month') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 form-horizontal">
                                <div class="form-group row">
                                    <label class="col-lg-12 col-md-12 form-control-label">Excel <span
                                            class="required">*</span></label>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group input-group-file" data-plugin="inputGroupFile">
                                                <input type="text" class="form-control" readonly="">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-outline btn-file">
                                                        <i class="icon wb-upload" aria-hidden="true"></i>
                                                        <input type="file" name="file" multiple="yes">
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 form-horizontal">
                                <div class="form-group row">
                                    <label class="col-lg-12 col-md-12 form-control-label">Attendance Month<span
                                            class="required">*</span></label>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="panel">
                                            <table class="table table-bordered table-striped">
                                                <tbody id="dynamic_field"></tbody>
                                            </table>
                                            <input type='button' class="form-control" value='Add Task' id='addRow'
                                                name='addRow' />
                                        </div>
                                    </div>
                                </div>


                            </div>
                            {{-- Submit Button --}}
                            <div class="form-group col-xl-12 text-center padding-top-m">
                                {{-- <button type="submit" class="btn btn-primary" id="validateButton1">Submit</button> --}}
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            {{-- Submit Button --}}
                    </form>
                </div>
            </form>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Modal -->
    <div class="modal fade modal-3d-flip-horizontal" id="exampleMultipleTwo" aria-hidden="false" role="dialog"
        tabindex="-1">
        <div class="modal-dialog modal-simple modal-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Upload Attendance Excel Sheet</h4>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" method="POST" action="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6 form-horizontal">
                                <div class="form-group row">
                                    <label class="col-lg-12 col-md-12 form-control-label">Attendance Month <span
                                            class="required">*</span></label>
                                    <div class="col-lg-12 col-md-12">
                                        <input type="month" class="form-control" name="att_month"
                                            placeholder="Attendance Month" value="{{ old('att_month') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 form-horizontal">
                                <div class="form-group row">
                                    <label class="col-lg-12 col-md-12 form-control-label">Excel<span
                                            class="required">*</span></label>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group input-group-file" data-plugin="inputGroupFile">
                                                <input type="text" class="form-control" readonly="">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-outline btn-file">
                                                        <i class="icon wb-upload" aria-hidden="true"></i>
                                                        <input type="file" name="file" multiple="yes">
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Submit Button --}}
                        <div class="form-group col-xl-12 text-center padding-top-m">
                            {{-- <button type="submit" class="btn btn-primary" id="validateButton1">Submit</button> --}}
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        {{-- Submit Button --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
@endsection

@section('js')
    {{-- <script src="{{ asset('assets/examples/js/tables/bootstrap.js ') }}"></script> --}}
    {{-- <script src="{{ asset('assets/examples/js/tables/jsgrid-db.js ') }}"></script> --}}
    {{-- <script src="{{ asset('assets/examples/js/tables/jsgrid.js ') }}"></script> --}}

    <script type="text/javascript">
        $(document).ready(function() {
            var i = 64;
            var j = 0;
            let  = new Date();
            const yyyy = loop.getFullYear();
            let mm = loop.getMonth() + 1; // Months start at 0!
            let dd = loop.getDate();
            const formattedToday = dd + '/' + mm + '/' + yyyy;
            let newDate = loop.setDate(loop.getDate() + 1);
            $('#addRow').click(function() {
                i++;
                j++;
                loop++;
                $('#dynamic_field').append('<tr><td class="form-control" id="row_num_' + String
                    .fromCharCode(i) + '">' + String.fromCharCode(i) +
                    '<input type="hidden" name="' + String.fromCharCode(i) +
                    '" class="form-control" value=' + newDate.formattedToday +
                    '></td>' +
                    '<td><select class="form-control" name="status[]" id="status" data-fv-notempty="true"> <option value="">Please choose</option> <option value="WFO-P">WFO-P</option> <option value="WFH-P">WFH-P</option> <option value="LATE">LATE</option> <option value="AB">AB</option> <option value="WFO-HD">WFO-HD</option> <option value="WFH-HD">WFH-HD</option> <option value="UPL">UPL</option> <option value="PH">PH</option> <option value="BL">BL</option> </select>' +
                    '<td><button type="button" name="remove" class="btn btn-danger">X</button></td></tr>'
                );
            });
            $(document).on('click', '.btn_remove', function() {
                $(this).closest("tr").remove(); //use closest here
                $('tbody tr').each(function(index) {
                    //change id of first tr
                    $(this).find("td:eq(0)").attr("id", "row_num" + (index + 1))
                    //change hidden input value
                    $(this).find("td:eq(0)").html((index + 1) +
                        '<input type="hidden" name="task_number[]" value=' + (index + 1) + '>')
                });
                i--;
                j--;
                loop--;
            });
        });
    </script>

@endsection
