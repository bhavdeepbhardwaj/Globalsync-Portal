@extends('layouts.app')

@section('css')
    <style>
        .example-wrap {
            margin-bottom: 0px;
        }

        .example {
            margin-top: 0px;
            margin-bottom: 0px;
        }

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
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Employee</a></li>
                <li class="breadcrumb-item active">Add</li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-sm btn-primary btn-round" href="http://globalsync.com.au" target="_blank">
                    <i class="icon md-link" aria-hidden="true"></i>
                    <span class="hidden-sm-down">Official Website</span>
                </a>
            </div>
        </div>

        <div class="page-content container-fluid">
            {{-- Message  --}}
            @include('flush.alert')
            {{-- Message  --}}
            <form id="exampleFullForm" autocomplete="off" method="POST" action="{{ route('hr.update-details') }}"
                enctype="multipart/form-data">
                {{-- <form id="exampleFullForm" autocomplete="off" method="POST" action="{{ route('hr.employeeDataJsonSave') }}" enctype="multipart/form-data"> --}}
                {{ csrf_field() }}

                {{-- hidden Item --}}
                <input type="text" name="user_id" class="form-control" value="{{ $userEdit->id }}" hidden />
                {{-- hidden Item --}}

                {{-- ***************************************************************************************************************************************************** --}}

                {{-- Part 1 --}}
                <div class="row">

                    <div class="col-lg-6">
                        <!-- Panel Wizard Form -->
                        <!-- Employee Employee Credentials Details Panel Full Example -->
                        <div class="panel" id="">
                            <div class="panel-heading">
                                <h3 class="panel-title">Employee Credentials
                                    <span class="panel-desc">Basic validation will display a label with the error after the
                                        form
                                        control. </span>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <!-- Wizard Content -->
                                <div class="wizard-content">
                                    {{-- Employee Employee Credentials --}}
                                    <div class="row row-lg">
                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Email
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="icon wb-envelope" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="email" class="form-control" name="email"
                                                            placeholder="email@email.com" required=""
                                                            value="{{ $userEdit->email }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Password
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="icon wb-lock" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="password" class="form-control" id="pwd"
                                                            name="password" placeholder="Min length 8" required=""
                                                            value="{{ $userEdit->password }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- Employee Employee Credentials --}}
                                </div>
                                <!-- End Wizard Content -->
                            </div>
                        </div>
                        <!-- Employee Employee Credentials Details Panel Full Example -->

                        <!-- Employee Employee Status Details Panel Full Example -->
                        <!-- Panel Wizard Form Container -->
                        <div class="panel" id="pan">
                            <div class="panel-heading">
                                <h3 class="panel-title">Employee Status
                                    <span class="panel-desc">Basic validation will display a label with the error after the
                                        form
                                        control. </span>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <!-- Wizard Content -->
                                <div class="wizard-content">
                                    {{-- Employee Employee Status --}}
                                    <div class="row row-lg">

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Employee Id <span
                                                        class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="emp_id"
                                                        placeholder="Employee ID" required=""
                                                        value="{{ $empEdit->emp_id }}" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Employee Status
                                                    <span class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <select class="form-control" name="emp_status" data-fv-notempty="true">
                                                        <option value="">Please choose</option>
                                                        <option value="1"
                                                            @if ($userEdit->emp_status == 1) selected @endif>
                                                            Active
                                                        </option>
                                                        <option value="0"
                                                            @if ($userEdit->emp_status == 0) selected @endif>Inactive
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Country Status
                                                    <span class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <select class="form-control" name="country_type"
                                                        data-fv-notempty="true">
                                                        <option value="">Please choose Country</option>
                                                        <option value="{{ $userEdit->country_type }}"
                                                            @if ($userEdit->country_type == 'In') selected @endif>
                                                            India
                                                        </option>
                                                        <option value="{{ $userEdit->country_type }}"
                                                            @if ($userEdit->country_type == 'Au') selected @endif>
                                                            Australia
                                                        </option>
                                                        <option value="{{ $userEdit->country_type }}"
                                                            @if ($userEdit->country_type == 'Ph') selected @endif>
                                                            philippines
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Employee Role
                                                    <span class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <select class="form-control" name="role_id" data-fv-notempty="true">
                                                        <option value="">Please choose Role</option>
                                                        <?php $rolename = \App\Models\Role::where('id', $userEdit->role_id)->first(); ?>
                                                        <option value="{{ $userEdit->role_id }}" selected>
                                                            {{ $rolename->role_name }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- Employee Employee Status --}}
                                </div>
                                <!-- Wizard Content -->
                            </div>
                        </div>
                        <!-- End Panel Wizard Form Container -->
                        <!-- Employee Employee Status Details Panel Full Example -->

                        <!-- Employee Allowances Details Panel Full Example -->
                        <!-- Panel Wizard Form -->
                        <div class="panel" id="pan">
                            <div class="panel-heading">
                                <h3 class="panel-title">Allowances
                                    <span class="panel-desc">Basic validation will display a label with the error after the
                                        form
                                        control. </span>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <!-- Wizard Content -->
                                <div class="wizard-content">
                                    {{-- Employee Employee Credentials --}}
                                    <div class="row row-lg">
                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Food Allowance
                                                    <span class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="emp_food"
                                                        placeholder="Search..." value="{{ $fetchFormArr['emp_food'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Special Allowances
                                                    <span class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="emp_spl"
                                                        placeholder="Search..." value="{{ $fetchFormArr['emp_spl'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Travel Allowance
                                                    <span class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="emp_travel"
                                                        placeholder="Search..."
                                                        value="{{ $fetchFormArr['emp_travel'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Service Availed
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-lg-12 col-md-9">
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <div class="input-group">
                                                                <div class="checkbox-custom checkbox-primary">
                                                                    <input type="hidden" value="0"
                                                                        name="emp_meal" />
                                                                    <input type="checkbox" id="emp_meal" name="emp_meal"
                                                                        data-fv-notempty="true"
                                                                        data-fv-notempty-message="This is required"
                                                                        value="1"
                                                                        {{ $fetchFormArr['emp_meal'] == 1 ? 'checked' : '' }}>
                                                                    <label for="emp_meal">Meal Service Availed</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="input-group">
                                                                <div class="checkbox-custom checkbox-primary">
                                                                    <input type="hidden" value="0"
                                                                        name="emp_cab" />
                                                                    <input type="checkbox" id="emp_cab" name="emp_cab"
                                                                        data-fv-notempty="true"
                                                                        data-fv-notempty-message="This is required"
                                                                        value="1"
                                                                        {{ $fetchFormArr['emp_cab'] == 1 ? 'checked' : '' }}>


                                                                    <label for="emp_cab">Travel Service Availed</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Employee Employee Credentials --}}
                                </div>
                                <!-- End Wizard Content -->
                            </div>
                        </div>
                        <!-- End Panel Wizard One Form -->
                        <!-- Employee Allowances Details Panel Full Example -->

                        <!-- End Employee Incentives & Deductions Details Panel Full Example -->
                        <!-- Panel Wizard Form -->
                        <div class="panel" id="pan">
                            <div class="panel-heading">
                                <h3 class="panel-title">Incentives & Deductions
                                    <span class="panel-desc">Basic validation will display a label with the error after the
                                        form
                                        control. </span>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <!-- Wizard Content -->
                                <div class="wizard-content">
                                    {{-- Employee Incentives & Deductions --}}
                                    <div class="row row-lg">
                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Stack Incentive
                                                    <span class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="emp_stinc"
                                                        placeholder="Search..." value="{{ $fetchFormArr['emp_stinc'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Incentive
                                                    <span class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="emp_inc"
                                                        placeholder="Search..." value="{{ $fetchFormArr['emp_inc'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Others
                                                    <span class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="emp_other"
                                                        placeholder="Search..." value="{{ $fetchFormArr['emp_other'] }}">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- Employee Incentives & Deductions --}}
                                </div>
                                <!-- End Wizard Content -->
                            </div>
                        </div>
                        <!-- End Employee Incentives & Deductions Details Panel Full Example -->

                        <!-- Payment  Details Panel Full Example -->
                        <!-- Panel Wizard Form -->
                        <div class="panel" id="pan">
                            <div class="panel-heading">
                                <h3 class="panel-title">Payment Details
                                    <span class="panel-desc">Basic validation will display a label with the error after the
                                        form
                                        control. </span>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <!-- Wizard Content -->
                                <div class="wizard-content">
                                    {{-- Employee Incentives & Deductions --}}
                                    <div class="row row-lg">
                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Payment Mode
                                                    <span class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <select class="form-control" id="pay_mode" name="emp_paymode"
                                                        required="">
                                                        <option value="">Choose a Payment Mode</option>
                                                        <option value="Bank Transfer"
                                                            @if ($fetchFormArr['emp_paymode'] == 'Bank Transfer') selected @endif>Bank Transfer
                                                        </option>
                                                        <option value="Wire Transfer"
                                                            @if ($fetchFormArr['emp_paymode'] == 'Wire Transfer') selected @endif>Wire Transfer
                                                        </option>
                                                        <option value="Cash"
                                                            @if ($fetchFormArr['emp_paymode'] == 'Cash') selected @endif>Cash</option>
                                                        <option value="Cheque"
                                                            @if ($fetchFormArr['emp_paymode'] == 'Cheque') selected @endif>Cheque
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Bank
                                                    <span class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="emp_bank"
                                                        placeholder="Bank" required=""
                                                        value="{{ $fetchFormArr['emp_bank'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">IFSC
                                                    <span class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="emp_ifsc"
                                                        placeholder="IFSC Code" required=""
                                                        value="{{ $fetchFormArr['emp_ifsc'] }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-xl-12 col-md-12 form-control-label">Transport
                                                    Reimbursement
                                                    Applicable.</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="transport_r_a"
                                                        placeholder="Transport Reimbursement Applicable." required=""
                                                        value="{{ $fetchFormArr['transport_r_a'] }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Account No.
                                                    <span class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="emp_acc"
                                                        data-fv-stringlength="true" data-fv-stringlength-max="16"
                                                        data-fv-stringlength-min="12"
                                                        data-fv-stringlength-message="Please enter valid Account No."
                                                        placeholder="Account No" data-fv-field="emp_acc"
                                                        value="{{ $fetchFormArr['emp_acc'] }}">
                                                    <small class="invalid-feedback" data-fv-validator="stringLength"
                                                        data-fv-for="emp_acc" data-fv-result="INVALID"
                                                        style="display: none;">Please
                                                        enter valid Account No.</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Gross Salary
                                                    <span class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="emp_gsal"
                                                        placeholder="Gross Salary"
                                                        value="{{ $fetchFormArr['emp_gsal'] }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Annual CTC<span
                                                        class="required">*</span></label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="annual_ctc"
                                                        placeholder="Annual CTC"
                                                        value="{{ $fetchFormArr['annual_ctc'] }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">IN Hand
                                                    <span class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control"
                                                        name="in_hand_salary_with_stack" placeholder="IN Hand"
                                                        required=""
                                                        value="{{ $fetchFormArr['in_hand_salary_with_stack'] }}" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- Employee Incentives & Deductions --}}
                                </div>
                                <!-- End Wizard Content -->
                            </div>
                        </div>
                        <!-- End Panel Wizard One Form -->
                        <!-- Payment  Details Panel Full Example -->

                        <!-- Employee Family Details Panel Full Example -->
                        <!-- Panel Wizard Form -->
                        <div class="panel" id="pan">
                            <div class="panel-heading">
                                <h3 class="panel-title">Employee Family Details
                                    <span class="panel-desc">Basic validation will display a label with the error after the
                                        form
                                        control. </span>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <!-- Wizard Content -->
                                <div class="wizard-content">
                                    {{-- Employee Incentives & Deductions --}}
                                    <div class="row row-lg">
                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Father Name <span
                                                        class="required">*</span></label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="father_name"
                                                        placeholder="Father Name"
                                                        value="{{ $fetchFormArr['father_name'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Nominee Details <span
                                                        class="required">*</span></label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="nominee_details"
                                                        placeholder="Nominee Details"
                                                        value="{{ $fetchFormArr['nominee_details'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Relation <span
                                                        class="required">*</span></label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="relation"
                                                        placeholder="Relation" value="{{ $fetchFormArr['relation'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Address
                                                    <span class="required">*</span></label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <textarea class="form-control" name="address" rows="4" placeholder="Type something…" required=""
                                                        data-fv-field="address" value="{{ $fetchFormArr['address'] }}">{{ $fetchFormArr['address'] }}</textarea>
                                                    <small class="invalid-feedback" data-fv-validator="notEmpty"
                                                        data-fv-for="address" data-fv-result="NOT_VALIDATED"
                                                        style="display: none;">Type something…</small><small
                                                        class="invalid-feedback" data-fv-validator="stringLength"
                                                        data-fv-for="address" data-fv-result="NOT_VALIDATED"
                                                        style="display: none;">Please enter a value
                                                        with valid length</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">No Of Family
                                                    Member</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="total_member"
                                                        placeholder="No Of Family Member"
                                                        value="{{ $fetchFormArr['total_member'] }}">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- Employee Incentives & Deductions --}}
                                </div>
                                <!-- End Wizard Content -->
                            </div>
                        </div>
                        <!-- End Panel Wizard One Form -->
                        <!-- Employee Family Details Panel Full Example -->

                        <!-- End Panel Wizard One Form -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Employee Exit & Description Details Panel Full Example -->
                        <!-- Panel Wizard Form -->
                        <div class="panel" id="pan">
                            <div class="panel-heading">
                                <h3 class="panel-title">Exit & Description
                                    <span class="panel-desc">Basic validation will display a label with the error after the
                                        form
                                        control. </span>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <!-- Wizard Content -->
                                <div class="wizard-content">
                                    {{-- Employee Exit & Description --}}
                                    <div class="row row-lg">
                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Employee Exit
                                                    Date</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="date" class="form-control" name="emp_exitdate"
                                                        placeholder="email@email.com" required=""
                                                        value="{{ $fetchFormArr['emp_exitdate'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Exit
                                                    Formalities</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <select class="form-control" name="exit_formalities"
                                                        data-fv-notempty="true">
                                                        <option value="">Please choose</option>
                                                        <option value="Processing"
                                                            @if ($fetchFormArr['exit_formalities'] == 'Processing') selected @endif>Processing
                                                        </option>
                                                        <option value="Hold"
                                                            @if ($fetchFormArr['exit_formalities'] == 'Hold') selected @endif>Hold
                                                        </option>
                                                        <option value="Done"
                                                            @if ($fetchFormArr['exit_formalities'] == 'Done') selected @endif>Done
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Reason Of
                                                    Leaving</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <textarea class="form-control" name="reason_of_leaving" rows="2" placeholder="Reason Of Leaving"
                                                        required="" value="{{ $fetchFormArr['reason_of_leaving'] }}">{{ $fetchFormArr['reason_of_leaving'] }}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Full and Final
                                                    Settlement</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <textarea class="form-control" name="fnf" rows="2" placeholder="Full and Final Settlement" required=""
                                                        value="{{ $fetchFormArr['fnf'] }}">{{ $fetchFormArr['fnf'] }}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Description</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <textarea class="form-control" name="emp_desp" rows="4" placeholder="Description" required=""
                                                        value="{{ $fetchFormArr['emp_desp'] }}">{{ $fetchFormArr['emp_desp'] }}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- Employee Exit & Description --}}
                                </div>
                                <!-- End Wizard Content -->
                            </div>
                        </div>
                        <!-- End Panel Wizard One Form -->
                        <!-- Employee Exit & Description Details Panel Full Example -->

                        <!-- Employee Details Panel Full Example -->
                        <!-- Panel Wizard Form -->
                        <div class="panel" id="">
                            <div class="panel-heading">
                                <h3 class="panel-title">Employee Details
                                    <span class="panel-desc">Basic validation will display a label with the error after the
                                        form
                                        control. </span>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <!-- Wizard Content -->
                                <div class="wizard-content">
                                    {{-- Employee Details --}}
                                    <div class="row row-lg">
                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Profile Photo
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <!-- Example max file size -->
                                                    <div class="example-wrap">
                                                        <div class="example">
                                                            <input type="file" id="input-file-max-fs"
                                                                data-plugin="dropify" data-max-file-size="10M"
                                                                name="emp_pic" />
                                                        </div>
                                                    </div>
                                                    <!-- End Example max file size -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Full Name <span
                                                        class="required">*</span></label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="emp_name"
                                                        placeholder="Full Name" value="{{ $fetchFormArr['emp_name'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Date Of Join
                                                    <span class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="date" class="form-control" name="emp_doj"
                                                        placeholder="YYYY/MM/DD" required=""
                                                        value="{{ $fetchFormArr['emp_doj'] }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Designation
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control" name="emp_desg"
                                                        placeholder="Designation"
                                                        value="{{ $fetchFormArr['emp_desg'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Department
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-lg-12 col-md-9">
                                                    <select class="form-control" id="department" name="emp_dept"
                                                        required="">
                                                        <option value="">Choose a Department</option>
                                                        @foreach ($deptData as $dData)
                                                            <option value="{{ $dData->id }}"
                                                                @if ($fetchFormArr['emp_dept'] == $dData->id) selected @endif>
                                                                {{ $dData->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Gender <span
                                                        class="required">*</span></label>
                                                <div class="col-lg-12 col-md-9">
                                                    <select class="form-control" id="gen" name="gender"
                                                        required="">
                                                        <option value="">Choose a Gender</option>
                                                        <option value="Male"
                                                            @if ($fetchFormArr['gender'] == 'Male') selected @endif>Male
                                                        </option>
                                                        <option value="Female"
                                                            @if ($fetchFormArr['gender'] == 'Female') selected @endif>Female
                                                        </option>
                                                        <option value="Other"
                                                            @if ($fetchFormArr['gender'] == 'Other') selected @endif>Other
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">PAN No.
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control" name="emp_pan"
                                                        placeholder="PAN Number" required=""
                                                        value="{{ $fetchFormArr['emp_pan'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">UAN No.</label>
                                                <div class="col-lg-12 col-md-9">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="emp_uan"
                                                            data-fv-stringlength="true" data-fv-stringlength-max="12"
                                                            data-fv-stringlength-message="UAN is a 12-digit identification number"
                                                            placeholder="UAN Number"
                                                            value="{{ $fetchFormArr['emp_uan'] }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">ESI No.</label>
                                                <div class="col-lg-12 col-md-9">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="emp_esi"
                                                            data-fv-stringlength="true" data-fv-stringlength-max="17"
                                                            data-fv-stringlength-message="UAN is a 17-digit identification number"
                                                            placeholder="ESI Number"
                                                            value="{{ $fetchFormArr['emp_esi'] }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Nick Name</label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control" name="nick_name"
                                                        placeholder="Nick Name" required=""
                                                        value="{{ $fetchFormArr['nick_name'] }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Joining Month <span
                                                        class="required">*</span></label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="month" class="form-control" name="joining_month"
                                                        placeholder="Joining Month"
                                                        value="{{ $fetchFormArr['joining_month'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Date of
                                                    Hitting</label></label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="date" class="form-control" name="date_of_hitting"
                                                        placeholder="YYYY/MM/DD" required=""
                                                        value="{{ $fetchFormArr['date_of_hitting'] }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Rejoin on</label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="date" class="form-control" name="rejoing_on"
                                                        placeholder="YYYY/MM/DD" required=""
                                                        value="{{ $fetchFormArr['rejoing_on'] }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Date of
                                                    Confirmation</label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="date" class="form-control"
                                                        name="date_of_confirmation" placeholder="YYYY/MM/DD"
                                                        required=""
                                                        value="{{ $fetchFormArr['date_of_confirmation'] }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Ageing</label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control" name="ageing"
                                                        data-fv-lessthan="true" data-fv-lessthan-value="72"
                                                        data-fv-greaterthan-message="please enter less than 72"
                                                        placeholder="Ageing" data-fv-field="ageing"
                                                        value="{{ $fetchFormArr['ageing'] }}">
                                                    <small class="invalid-feedback" data-fv-validator="lessThan"
                                                        data-fv-for="ageing" data-fv-result="NOT_VALIDATED"
                                                        style="display: none;">Please enter a value
                                                        less than or equal to
                                                        %s</small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- Employee Details --}}
                                </div>
                                <!-- End Wizard Content -->
                            </div>
                        </div>
                        <!-- End Panel Wizard One Form -->
                        <!-- Employee Details Panel Full Example -->

                        <!-- Employee Education Details Panel Full Example -->
                        <!-- Panel Wizard Form -->
                        <div class="panel" id="pan">
                            <div class="panel-heading">
                                <h3 class="panel-title">Employee Education
                                    <span class="panel-desc">Basic validation will display a label with the error after the
                                        form
                                        control. </span>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <!-- Wizard Content -->
                                <div class="wizard-content">
                                    {{-- Employee Education --}}
                                    <div class="row row-lg">
                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Secondary School
                                                    Certificate</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <!-- Example max file size -->
                                                    <div class="example-wrap">
                                                        <div class="example">
                                                            <input type="file" id="input-file-max-fs"
                                                                data-plugin="dropify" data-max-file-size="10M"
                                                                name="ssc" />
                                                        </div>
                                                    </div>
                                                    <!-- End Example max file size -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-xl-12 col-md-12 form-control-label">Higher Secondary
                                                    School Certificate</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <!-- Example max file size -->
                                                    <div class="example-wrap">
                                                        <div class="example">
                                                            <input type="file" id="input-file-max-fs"
                                                                data-plugin="dropify" data-max-file-size="10M"
                                                                name="hsc" />
                                                        </div>
                                                    </div>
                                                    <!-- End Example max file size -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Graduation</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <!-- Example max file size -->
                                                    <div class="example-wrap">
                                                        <div class="example">
                                                            <input type="file" id="input-file-max-fs"
                                                                data-plugin="dropify" data-max-file-size="10M"
                                                                name="graduation" />
                                                        </div>
                                                    </div>
                                                    <!-- End Example max file size -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Experience
                                                    Relieving</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <!-- Example max file size -->
                                                    <div class="example-wrap">
                                                        <div class="example">
                                                            <input type="file" id="input-file-max-fs"
                                                                data-plugin="dropify" data-max-file-size="10M"
                                                                name="experience_relieving" />
                                                        </div>
                                                    </div>
                                                    <!-- End Example max file size -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- Employee Education --}}

                                </div>
                                <!-- End Wizard Content -->
                            </div>
                        </div>
                        <!-- End Panel Wizard One Form -->
                        <!-- Employee Education Details Panel Full Example -->
                    </div>

                </div>
                {{-- Part 1 --}}

                {{-- ***************************************************************************************************************************************************** --}}

                {{-- Part 2 --}}
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Employee Journey Details Panel Full Example -->
                        <!-- Panel Wizard Form -->
                        <div class="panel" id="pan">
                            <div class="panel-heading">
                                <h3 class="panel-title">Employee Journey
                                    <span class="panel-desc">Basic validation will display a label with the error after the
                                        form
                                        control. </span>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <!-- Wizard Content -->
                                <div class="wizard-content">
                                    {{-- Employee Journey --}}
                                    <div class="row row-lg">
                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Performer
                                                    Month</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="month" class="form-control" name="performer_month"
                                                        placeholder="Performer Month" required=""
                                                        value="{{ $fetchFormArr['performer_month'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Line Manager<span
                                                        class="required">*</span></label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="line_manager"
                                                        placeholder="Line Manager" required=""
                                                        value="{{ $fetchFormArr['line_manager'] }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Type Of
                                                    Attrition</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="type_of_attrition"
                                                        placeholder="Type Of Attrition"
                                                        value="{{ $fetchFormArr['type_of_attrition'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">PIP Issue
                                                    Date</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="date" class="form-control" name="pip_issue_date"
                                                        placeholder="PIP Issue Date"
                                                        value="{{ $fetchFormArr['pip_issue_date'] }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Total Verbal
                                                    Warning</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="no_verbal_warning"
                                                        placeholder="Total Verbal Warning"
                                                        value="{{ $fetchFormArr['no_verbal_warning'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Date Of Verbal
                                                    Warning</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="date" class="form-control"
                                                        name="date_of_verbal_warning" placeholder="Date Of Verbal Warning"
                                                        value="{{ $fetchFormArr['date_of_verbal_warning'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Reason Of Verbal
                                                    Warning</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <textarea class="form-control" name="reason_of_verbal_warning" rows="3" placeholder="Type something…"
                                                        required="" data-fv-field="reason_of_verbal_warning" value="{{ $fetchFormArr['reason_of_verbal_warning'] }}"> {{ $fetchFormArr['reason_of_verbal_warning'] }}</textarea>
                                                    <small class="invalid-feedback" data-fv-validator="notEmpty"
                                                        data-fv-for="reason_of_verbal_warning"
                                                        data-fv-result="NOT_VALIDATED" style="display: none;">Type
                                                        something…</small><small class="invalid-feedback"
                                                        data-fv-validator="stringLength"
                                                        data-fv-for="reason_of_verbal_warning"
                                                        data-fv-result="NOT_VALIDATED" style="display: none;">Please enter
                                                        a value
                                                        with valid length</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Reasson of
                                                    Warning</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <textarea class="form-control" name="reason_of_warning" rows="3" placeholder="Type something…" required=""
                                                        data-fv-field="reason_of_warning" value="{{ $fetchFormArr['reason_of_warning'] }}">{{ $fetchFormArr['reason_of_warning'] }}</textarea>
                                                    <small class="invalid-feedback" data-fv-validator="notEmpty"
                                                        data-fv-for="reason_of_warning" data-fv-result="NOT_VALIDATED"
                                                        style="display: none;">Type something…</small><small
                                                        class="invalid-feedback" data-fv-validator="stringLength"
                                                        data-fv-for="reason_of_warning" data-fv-result="NOT_VALIDATED"
                                                        style="display: none;">Please enter a value
                                                        with valid length</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Total Written
                                                    Warning</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="text" class="form-control" name="no_of_warning"
                                                        placeholder="Total Written Warning"
                                                        value="{{ $fetchFormArr['no_of_warning'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Date Of Written
                                                    Warning</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="date" class="form-control"
                                                        name="date_of_written_warning"
                                                        placeholder="Date Of Written Warning"
                                                        value="{{ $fetchFormArr['date_of_written_warning'] }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Appraisal
                                                    Letter</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <!-- Example max file size -->
                                                    <div class="example-wrap">
                                                        <div class="example">
                                                            <input type="file" id="input-file-max-fs"
                                                                data-plugin="dropify" data-max-file-size="10M"
                                                                name="appraisal_letter" />
                                                        </div>
                                                    </div>
                                                    <!-- End Example max file size -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Appraisal Letter
                                                    First</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <!-- Example max file size -->
                                                    <div class="example-wrap">
                                                        <div class="example">
                                                            <input type="file" id="input-file-max-fs"
                                                                data-plugin="dropify" data-max-file-size="10M"
                                                                name="appraisal_1" />
                                                        </div>
                                                    </div>
                                                    <!-- End Example max file size -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Appraisal Letter
                                                    Second</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <!-- Example max file size -->
                                                    <div class="example-wrap">
                                                        <div class="example">
                                                            <input type="file" id="input-file-max-fs"
                                                                data-plugin="dropify" data-max-file-size="10M"
                                                                name="appraisal_2" />
                                                        </div>
                                                    </div>
                                                    <!-- End Example max file size -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Appraisal Letter
                                                    Third</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <!-- Example max file size -->
                                                    <div class="example-wrap">
                                                        <div class="example">
                                                            <input type="file" id="input-file-max-fs"
                                                                data-plugin="dropify" data-max-file-size="10M"
                                                                name="appraisal_3" />
                                                        </div>
                                                    </div>
                                                    <!-- End Example max file size -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Appraisal Letter
                                                    Fourth</label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <!-- Example max file size -->
                                                    <div class="example-wrap">
                                                        <div class="example">
                                                            <input type="file" id="input-file-max-fs"
                                                                data-plugin="dropify" data-max-file-size="10M"
                                                                name="appraisal_4" />
                                                        </div>
                                                    </div>
                                                    <!-- End Example max file size -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- Employee Journey --}}
                                </div>
                                <!-- End Wizard Content -->
                            </div>
                        </div>
                        <!-- End Panel Wizard One Form -->
                        <!-- Employee Journey Details Panel Full Example -->

                        <!-- Employee Personal Details Panel Full Example -->
                        <!-- Panel Wizard Form -->
                        <div class="panel" id="">
                            <div class="panel-heading">
                                <h3 class="panel-title">Employee Personal Details
                                    <span class="panel-desc">Basic validation will display a label with the error after the
                                        form
                                        control. </span>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <!-- Wizard Content -->
                                <div class="wizard-content">
                                    {{-- Employee Details --}}
                                    <div class="row row-lg">
                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Marital Status <span
                                                        class="required">*</span></label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <select class="form-control" name="marital_status"
                                                        data-fv-notempty="true">
                                                        <option value="">Please choose</option>
                                                        <option value="Married"
                                                            @if ($fetchFormArr['marital_status'] == 'Married') selected @endif>Married
                                                        </option>
                                                        <option value="Single"
                                                            @if ($fetchFormArr['marital_status'] == 'Single') selected @endif>Single
                                                        </option>
                                                        <option value="Divorced"
                                                            @if ($fetchFormArr['marital_status'] == 'Divorced') selected @endif>Divorced
                                                        </option>
                                                        <option value="Separated"
                                                            @if ($fetchFormArr['marital_status'] == 'Separated') selected @endif>Separated
                                                        </option>
                                                        <option value="Widowed"
                                                            @if ($fetchFormArr['marital_status'] == 'Widowed') selected @endif>Widowed
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Date Of Birthday<span
                                                        class="required">*</span></label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <input type="date" class="form-control" name="dob"
                                                        placeholder="Father Name" value="{{ $fetchFormArr['dob'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Primary Email
                                                    <span class="required">*</span>
                                                </label>
                                                <div class=" col-lg-12 col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="icon wb-envelope" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="email" class="form-control" name="primary_email"
                                                            placeholder="email@email.com" required=""
                                                            value="{{ $fetchFormArr['primary_email'] }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Blood Group <span
                                                        class="required">*</span></label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control" name="blood_group"
                                                        placeholder="Blood Group"
                                                        value="{{ $fetchFormArr['blood_group'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Aadhaar No <span
                                                        class="required">*</span></label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control" name="aadhaar"
                                                        placeholder="Aadhaar No" value="{{ $fetchFormArr['aadhaar'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Total Bank</label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control" name="total_bank"
                                                        placeholder="Total Bank"
                                                        value="{{ $fetchFormArr['total_bank'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Total family
                                                    Member</label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control" name="total_member"
                                                        placeholder="Total family Member"
                                                        value="{{ $fetchFormArr['total_member'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Mobile Link UAN
                                                    No <span class="required">*</span></label>
                                                <div class="col-lg-12 col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="icon wb-mobile" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" class="form-control" id="inputlink"
                                                            data-plugin="formatter" data-pattern="[[999]][[999]][[9999]]"
                                                            name="mob_link_uan_no"
                                                            value="{{ $fetchFormArr['mob_link_uan_no'] }}">
                                                    </div>
                                                    <p class="text-help">1231231234</p>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Phone <span
                                                        class="required">*</span></label>
                                                <div class="col-lg-12 col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="icon wb-mobile" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" class="form-control" id="inputPhone"
                                                            data-plugin="formatter" data-pattern="[[999]][[999]][[9999]]"
                                                            name="phone" value="{{ $fetchFormArr['phone'] }}">
                                                    </div>
                                                    <p class="text-help">1231231234</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Mobile <span
                                                        class="required">*</span></label>
                                                <div class="col-lg-12 col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="icon wb-mobile" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" class="form-control" id="inputMobile"
                                                            data-plugin="formatter"
                                                            data-pattern="[[999]][[999]][[9999]]" name="mobile"
                                                            value="{{ $fetchFormArr['mobile'] }}">
                                                    </div>
                                                    <p class="text-help">1231231234</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Emergency Contact
                                                    Email<span class="required">*</span></label>
                                                <div class="col-lg-12 col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="icon wb-envelope" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="email" class="form-control"
                                                            name="emy_contact_email" placeholder="email@email.com"
                                                            required=""
                                                            value="{{ $fetchFormArr['emy_contact_email'] }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Emergency
                                                    Number<span class="required">*</span></label>
                                                <div class="col-lg-12 col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="icon wb-mobile" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" class="form-control"
                                                            name="emy_contact_no" placeholder="Emergency Number"
                                                            value="{{ $fetchFormArr['emy_contact_no'] }}">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Emergency Contact
                                                    Relation<span class="required">*</span></label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control"
                                                        name="emy_contact_relation"
                                                        placeholder="Emergency Contact Relation"
                                                        value="{{ $fetchFormArr['emy_contact_relation'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Permanent Aaddress
                                                    H.no
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control" name="per_address_h_no"
                                                        placeholder="H.no"
                                                        value="{{ $fetchFormArr['per_address_h_no'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Permanent Lacality
                                                    Building<span class="required">*</span></label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control"
                                                        name="per_lacality_building"
                                                        placeholder="Permanent Lacality Building"
                                                        value="{{ $fetchFormArr['per_lacality_building'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Permanent Area
                                                    <span class="required">*</span></label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control" name="per_area"
                                                        placeholder="Permanent Area"
                                                        value="{{ $fetchFormArr['per_area'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Permanent
                                                    District<span class="required">*</span></label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control" name="per_district"
                                                        placeholder="Permanent District"
                                                        value="{{ $fetchFormArr['per_district'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Permanent State<span
                                                        class="required">*</span></label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control" name="per_state"
                                                        placeholder="Permanent State"
                                                        value="{{ $fetchFormArr['per_state'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Permanent Post
                                                    Code<span class="required">*</span></label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control" name="per_post_code"
                                                        placeholder="Permanent Post Code"
                                                        value="{{ $fetchFormArr['per_post_code'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Present
                                                    Aaddress</label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control"
                                                        name="present_address_h_no" placeholder="H.no"
                                                        value="{{ $fetchFormArr['present_address_h_no'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Present Lacality
                                                    Building</label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control"
                                                        name="lacality_building" placeholder="Lacality Building"
                                                        value="{{ $fetchFormArr['lacality_building'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Present Area</label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control" name="area"
                                                        placeholder="area" value="{{ $fetchFormArr['area'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Present
                                                    District</label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control" name="district"
                                                        placeholder="District" value="{{ $fetchFormArr['district'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Present
                                                    State</label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control" name="state"
                                                        placeholder="State" value="{{ $fetchFormArr['state'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Present Post
                                                    Code</label>
                                                <div class="col-lg-12 col-md-9">
                                                    <input type="text" class="form-control" name="post_code"
                                                        placeholder="Post Code"
                                                        value="{{ $fetchFormArr['post_code'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Salary Ship</label>
                                                <div class="col-lg-12 col-md-9">
                                                    <!-- Example max file size -->
                                                    <div class="example-wrap">
                                                        <div class="example">
                                                            <input type="file" id="input-file-max-fs"
                                                                data-plugin="dropify" data-max-file-size="10M"
                                                                name="salary_slip" />
                                                        </div>
                                                    </div>
                                                    <!-- End Example max file size -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Bank
                                                    Statement</label>
                                                <div class="col-lg-12 col-md-9">
                                                    <!-- Example max file size -->
                                                    <div class="example-wrap">
                                                        <div class="example">
                                                            <input type="file" id="input-file-max-fs"
                                                                data-plugin="dropify" data-max-file-size="10M"
                                                                name="bank_statement" />
                                                        </div>
                                                    </div>
                                                    <!-- End Example max file size -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-12 col-md-12 form-control-label">Cancel
                                                    Cheque</label>
                                                <div class="col-lg-12 col-md-9">
                                                    <!-- Example max file size -->
                                                    <div class="example-wrap">
                                                        <div class="example">
                                                            <input type="file" id="input-file-max-fs"
                                                                data-plugin="dropify" data-max-file-size="10M"
                                                                name="cancel_cheque" />
                                                        </div>
                                                    </div>
                                                    <!-- End Example max file size -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- Employee Details --}}
                                </div>
                                <!-- End Wizard Content -->
                            </div>
                        </div>
                        <!-- End Panel Wizard One Form -->
                        <!-- Employee Personal Details Panel Full Example -->
                    </div>
                </div>
                {{-- Part 2 --}}

                {{-- ***************************************************************************************************************************************************** --}}

                {{-- Submit Button --}}
                <div class="form-group col-xl-12 text-center padding-top-m">
                    {{-- <button type="submit" class="btn btn-primary" id="validateButton1">Submit</button> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                {{-- Submit Button --}}

            </form>
        </div>
    </div>
    <!-- End Page -->
@endsection


@section('js')
    <!-- Page -->

    {{-- <script>
        $('.btn').on("click", function() {
            swal({
                title: "Good job!",
                text: "You clicked the button!",
                type: "success",
                showCancelButton: false,
                confirmButtonClass: "btn-success",
                confirmButtonText: 'OK',
                closeOnConfirm: false
            });
        });
    </script> --}}
    {{-- <script>
        $(document).on('submit', '[id^=exampleFullForm]', function(e) {
            // e.preventDefault();
            var data = $(this).serialize();
            swal({
                title: "Good job!",
                text: "You clicked the button!",
                type: "success",
                // showCancelButton: false,
                // confirmButtonClass: "btn-success",
                // confirmButtonText: 'OK',
                // closeOnConfirm: false
            });
            // return false;
        });
    </script> --}}
@endsection
