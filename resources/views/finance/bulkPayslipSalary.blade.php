@extends('layouts.app')

@section('css')
@endsection

@section('content')
    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">Bulk Pay Slip Salary</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Payroll</a></li>
                <li class="breadcrumb-item active">Bulk Pay Slip Salary</li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-primary" href="">Bulk Import</a>
            </div>
        </div>

        <div class="page-content container-fluid">
            <!-- Panel Allowances -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Allowances</h3>
                </div>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-md-6 col-lg-3 ">
                            <!-- Example Food Allowance -->
                            <div class="example-wrap">
                                <h4 class="example-title">Food Allowance</h4>
                                <input type="text" class="form-control focus" name="food_allw" value="2200"
                                    id="food_allw">
                            </div>
                            <!-- End Example Food Allowance -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Panel Allowances -->
        </div>
    </div>
    <!-- End Page -->
@endsection

@section('js')
@endsection
