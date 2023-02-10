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
                                        <!-- Example Large Columns -->
                                        {{-- <div class="example-wrap">
                                            <h4 class="example-title">Large Columns</h4>
                                            <p>Bootstrap table support large columns, it will auto to show the
                                                horizontal scroll bar.</p>
                                            <div class="example">
                                                <table id="exampleTableLargeColumns" data-show-columns="true"
                                                    data-height="400" data-mobile-responsive="true"></table>
                                            </div>
                                        </div> --}}
                                        <!-- End Example Large Columns -->
                                        <!-- Panel Custom Grid Field -->
                                        {{-- <div class="panel">
                                            <header class="panel-heading">
                                                <h3 class="panel-title">Custom Grid Field</h3>
                                            </header>
                                            <div class="panel-body">
                                                <div id="exampleCustomGridField"></div>
                                            </div>
                                        </div> --}}
                                        <!-- End Panel Custom Grid Field -->
                                        <div class="panel">
                                            <button type="button" onclick="addNewRow()" class="btn btn-primary">Add New
                                                Row
                                            </button>
                                            <button type="button" onclick="deleteRow()" class="btn btn-danger">Delete
                                                Row
                                            </button>
                                            <br>
                                            <br>
                                            <table id="employee-table" class="table table-bordered table-striped">
                                                <tr>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </table>
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
        /* This method will add a new row */
        function addNewRow() {
            var table = document.getElementById("employee-table");
            var rowCount = table.rows.length;
            // alert(rowCount);
            var cellCount = table.rows[0].cells.length;
            var row = table.insertRow(rowCount);
            for (var i = 0; i < cellCount; i++) {
                var cell = row.insertCell(i);
                if (i < cellCount - 1) {
                    // cell.innerHTML = '<input type="text" class="form-control" />';
                    cell.innerHTML =
                        '<select class="form-control" name="status[]" data-fv-notempty="true"> <option value="">Please choose</option> <option value="WFO-P">WFO-P</option> <option value="WFH-P">WFH-P</option> <option value="LATE">LATE</option> <option value="AB">AB</option> <option value="WFO-HD">WFO-HD</option> <option value="WFH-HD">WFH-HD</option> <option value="UPL">UPL</option> <option value="PH">PH</option>  <option value="BL">BL</option></select>';
                } else {
                    cell.innerHTML = '<input class="btn btn-danger" ' +
                        ' type="button" value="delete" onclick="deleteRow(this)" />';
                }
            }
        }
        /* This method will delete a row */
        function deleteRow(ele) {
            var table = document.getElementById('employee-table');
            var rowCount = table.rows.length;
            if (rowCount <= 1) {
                alert("There is no row available to delete!");
                return;
            }
            if (ele) {
                //delete specific row
                ele.parentNode.parentNode.remove();
            } else {
                //delete last row
                table.deleteRow(rowCount - 1);
            }
        }
    </script>

    {{-- <script>
        (function(global, factory) {
            if (typeof define === "function" && define.amd) {
                define('/tables/jsgrid', ['jquery', 'Site'], factory);
            } else if (typeof exports !== "undefined") {
                factory(require('jquery'), require('Site'));
            } else {
                var mod = {
                    exports: {}
                };
                factory(global.jQuery, global.Site);
                global.tablesJsgrid = mod.exports;
            }
        })(this, function(_jquery, _Site) {
            'use strict';

            var _jquery2 = babelHelpers.interopRequireDefault(_jquery);

            (0, _jquery2.default)(document).ready(function($$$1) {
                (0, _Site.run)();
            });

            jsGrid.setDefaults({
                tableClass: "jsgrid-table table table-striped table-hover"
            });

            jsGrid.setDefaults("text", {
                _createTextBox: function _createTextBox() {
                    return (0, _jquery2.default)("<input>").attr("type", "text").attr("class",
                        "form-control input-sm");
                }
            });

            jsGrid.setDefaults("number", {
                _createTextBox: function _createTextBox() {
                    return (0, _jquery2.default)("<input>").attr("type", "number").attr("class",
                        "form-control input-sm");
                }
            });

            jsGrid.setDefaults("textarea", {
                _createTextBox: function _createTextBox() {
                    return (0, _jquery2.default)("<input>").attr("type", "textarea").attr("class",
                        "form-control");
                }
            });

            jsGrid.setDefaults("control", {
                _createGridButton: function _createGridButton(cls, tooltip, clickHandler) {
                    var grid = this._grid;

                    return (0, _jquery2.default)("<button>").addClass(this.buttonClass).addClass(cls).attr({
                        type: "button",
                        title: tooltip
                    }).on("click", function(e) {
                        clickHandler(grid, e);
                    });
                }
            });

            jsGrid.setDefaults("select", {
                _createSelect: function _createSelect() {
                    var $result = (0, _jquery2.default)("<select>").attr("class", "form-control input-sm"),
                        valueField = this.valueField,
                        textField = this.textField,
                        selectedIndex = this.selectedIndex;

                    _jquery2.default.each(this.items, function(index, item) {
                        var value = valueField ? item[valueField] : index,
                            text = textField ? item[textField] : item;

                        var $option = (0, _jquery2.default)("<option>").attr("value", value).text(
                            text).appendTo($result);

                        $option.prop("selected", selectedIndex === index);
                    });

                    return $result;
                }
            });


            // Example Custom Grid Field
            // -------------------------
            (function() {
                var MyDateField = function MyDateField(config) {
                    jsGrid.Field.call(this, config);
                };

                MyDateField.prototype = new jsGrid.Field({
                    sorter: function sorter(date1, date2) {
                        return new Date(date1) - new Date(date2);
                    },

                    itemTemplate: function itemTemplate(value) {
                        return new Date(value).toDateString();
                    },

                    insertTemplate: function insertTemplate() {
                        if (!this.inserting) return "";

                        var $result = this.insertControl = this._createTextBox();
                        return $result;
                    },

                    editTemplate: function editTemplate(value) {
                        if (!this.editing) return this.itemTemplate(value);

                        var $result = this.editControl = this._createTextBox();
                        $result.val(value);
                        return $result;
                    },

                    insertValue: function insertValue() {
                        return this.insertControl.datepicker("getDate");
                    },

                    editValue: function editValue() {
                        return this.editControl.datepicker("getDate");
                    },

                    _createTextBox: function _createTextBox() {
                        return (0, _jquery2.default)("<input>").attr("type", "text").addClass(
                            'form-control input-sm').datepicker({
                            autoclose: true
                        });
                    }
                });

                jsGrid.fields.myDateField = MyDateField;

                (0, _jquery2.default)("#exampleCustomGridField").jsGrid({
                    height: "300px",
                    width: "100%",

                    inserting: true,
                    editing: true,
                    sorting: false,
                    paging: false,

                    data: db.users,

                    fields: [{
                        name: "Account",
                        width: 150,
                        align: "center"
                    }, {
                        name: "Name",
                        type: "text"
                    }, {
                        name: "RegisterDate",
                        type: "myDateField",
                        width: 100,
                        align: "center"
                    }, {
                        type: "control",
                        editButton: false,
                        modeSwitchButton: false
                    }]
                });
            })();
        });
    </script> --}}
@endsection
