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
                <div class="panel-body">
                    <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Damon</td>
                                <td>5516 Adolfo Green</td>
                                <td>Littelhaven</td>
                                <td>85</td>
                                <td>2014/06/13</td>
                                <td>$553,536</td>
                            </tr>
                            <tr>
                                <td>Torrey</td>
                                <td>1995 Richie Neck</td>
                                <td>West Sedrickstad</td>
                                <td>77</td>
                                <td>2014/09/12</td>
                                <td>$243,577</td>
                            </tr>
                            <tr>
                                <td>Miracle</td>
                                <td>176 Hirthe Squares</td>
                                <td>Ryleetown</td>
                                <td>82</td>
                                <td>2013/09/27</td>
                                <td>$784,802</td>
                            </tr>
                            <tr>
                                <td>Wilhelmine</td>
                                <td>44727 O&#x27;Hara Union</td>
                                <td>Dibbertfurt</td>
                                <td>68</td>
                                <td>2013/06/28</td>
                                <td>$207,291</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End Panel Basic -->

        </div>
    </div>
    <!-- End Page -->
@endsection
