@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-bs4/dataTables.bootstrap4.css ') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css ') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css ') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css ') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css ') }}">
    <link rel="stylesheet" href="{{ asset('global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css ') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css ') }}">
    <link rel="stylesheet"
        href="{{ asset('global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/examples/css/tables/datatable.css ') }}">
@endsection

@section('content')
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Employees</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Employees</a></li>
                <li class="breadcrumb-item active">All</li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-sm btn-primary btn-round" href="http://globalsync.com.au" target="_blank">
                    <i class="icon md-link" aria-hidden="true"></i>
                    <span class="hidden-sm-down">Official Website</span>
                </a>
            </div>
        </div>

        <div class="page-content">
            <!-- Panel Basic -->
            <div class="panel">
                <header class="panel-heading">
                    <div class="panel-actions"></div>
                    <h3 class="panel-title">Basic</h3>
                </header>
                <div class="panel-body table-responsive">
                    {{-- Message  --}}
                    @include('flush.alert')
                    {{-- Message  --}}
                    <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                        <thead>
                            <tr>
                                <th>EMPLOYEE ID</th>
                                <th>NAME</th>
                                <th>DESIGNATION</th>
                                <th>DEPARTMENT</th>
                                <th>DOJ</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>EMPLOYEE ID</th>
                                <th>NAME</th>
                                <th>DESIGNATION</th>
                                <th>DEPARTMENT</th>
                                <th>DOJ</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($emplist as $emp)
                                <tr>
                                    @php
                                        $fetchFormArr = json_decode($emp->formdata, true);
                                        $deptName = \App\Models\Department::where('id', $fetchFormArr['emp_dept'])->first();
                                        
                                    @endphp

                                    <td>{{ $emp->emp_id }}</td>
                                    <td>{{ $fetchFormArr['emp_name'] }}</td>
                                    <td>{{ $fetchFormArr['emp_desg'] }}</td>
                                    <td>
                                        {{ $deptName->name }}
                                    </td>
                                    <td>{{ $fetchFormArr['emp_doj'] }}</td>
                                    <td>
                                        @if ($emp->emp_status == '1')
                                            <span class="badge badge-outline badge-success">Active</span>
                                        @else
                                            <span class="badge badge-outline badge-warning">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('hr.edit-details', [$emp->emp_id]) }}" class="">
                                            <div class="icondemo vertical-align-middle">
                                                <i class="icon wb-edit" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{ route('hr.view-details', [$emp->emp_id]) }}" class="">
                                            <div class="icondemo vertical-align-middle">
                                                <i class="icon wb-eye" aria-hidden="true"></i>
                                            </div>
                                        </a>
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
@endsection
