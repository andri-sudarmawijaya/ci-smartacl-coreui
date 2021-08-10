<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.12
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
<?php $this->load->view('_layouts/head'); ?>
<link rel="stylesheet" type="text/css" href="/vendors/DataTables/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="/vendors/DataTables/Select-1.3.3/css/select.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="/vendors/DataTables/Select-1.3.3/css/select.dataTables.min.css"/>

    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
        <?php $this->load->view('_layouts/header'); ?>
        <div class="app-body" id="pjax-container">
            <?php $this->load->view('_layouts/sidebar'); ?>
            <main class="main" >
                <!-- Breadcrumb-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">
                        <a href="#">Admin</a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                    <!-- Breadcrumb Menu-->
                    <li class="breadcrumb-menu d-md-down-none">
                        <div class="btn-group" role="group" aria-label="Button group">
                            <a class="btn" href="#">
                                <i class="icon-speech"></i>
                            </a>
                            <a class="btn" href="./">
                                <i class="icon-graph"></i>  Dashboard</a>
                            <a class="btn" href="#">
                                <i class="icon-settings"></i>  Settings</a>
                        </div>
                    </li>
                </ol>
                



                <div class="container-fluid">
                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-0">
                                        <div class="btn-group float-right">
                                            <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-settings"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                        <div class="text-value">9.823</div>
                                        <div>Members online</div>
                                    </div>
                                    <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                                        <canvas class="chart" id="card-chart1" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-info">
                                    <div class="card-body pb-0">
                                        <button class="btn btn-transparent p-0 float-right" type="button">
                                            <i class="icon-location-pin"></i>
                                        </button>
                                        <div class="text-value">9.823</div>
                                        <div>Members online</div>
                                    </div>
                                    <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                                        <canvas class="chart" id="card-chart2" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-warning">
                                    <div class="card-body pb-0">
                                        <div class="btn-group float-right">
                                            <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-settings"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                        <div class="text-value">9.823</div>
                                        <div>Members online</div>
                                    </div>
                                    <div class="chart-wrapper mt-3" style="height:70px;">
                                        <canvas class="chart" id="card-chart3" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-danger">
                                    <div class="card-body pb-0">
                                        <div class="btn-group float-right">
                                            <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-settings"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                        <div class="text-value">9.823</div>
                                        <div>Members online</div>
                                    </div>
                                    <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                                        <canvas class="chart" id="card-chart4" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                        </div>
                        <!-- /.row-->
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h4 class="card-title mb-0">Perusahaan</h4>
                                        <div class="small text-muted">November 2017</div>
                                    </div>
                                    <!-- /.col-->
                                    <div class="col-sm-7 d-none d-md-block">
                                        <button class="btn btn-primary float-right" type="button">
                                            <i class="icon-cloud-download"></i>
                                        </button>
                                        <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                                            <label class="btn btn-outline-secondary">
                                                <input id="option1" type="radio" name="options" autocomplete="off"> Day
                                            </label>
                                            <label class="btn btn-outline-secondary active">
                                                <input id="option2" type="radio" name="options" autocomplete="off" checked=""> Month
                                            </label>
                                            <label class="btn btn-outline-secondary">
                                                <input id="option3" type="radio" name="options" autocomplete="off"> Year
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                </div>
                                <!-- /.row-->



            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('customers/create'), 'Create', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('customers/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('customers/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
        </div>


                                <div class="table-responsive">

        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>CustomerName</th>
		    <th>ContactLastName</th>
		    <th>ContactFirstName</th>
		    <th>Phone</th>
		    <th>AddressLine1</th>
		    <th>AddressLine2</th>
		    <th>City</th>
		    <th>State</th>
		    <th>PostalCode</th>
		    <th>Country</th>
		    <th>SalesRepEmployeeNumber</th>
		    <th>CreditLimit</th>
		    <th width="200px">Action</th>
                </tr>
            </thead>
	    
        </table>


                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="row text-center">
                                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                        <div class="text-muted">Bounce Rate</div>
                                        <strong>40.15%</strong>
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-->
                        <!-- /.row-->
                    </div>
                </div>
            </main>
            <?php $this->load->view('_layouts/aside'); ?>
        </div>
        <?php $this->load->view('_layouts/footer'); ?>
        <?php $this->load->view('_layouts/script'); ?>
        <script type="text/javascript" src="/vendors/DataTables/datatables.min.js"></script>
        


        <script type="text/javascript">
            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                var t = $("#mytable").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "customers/json", "type": "POST"},
                    columns: [
                        {
                            "data": "customerNumber",
                            "orderable": false
                        },{"data": "customerName"},{"data": "contactLastName"},{"data": "contactFirstName"},{"data": "phone"},{"data": "addressLine1"},{"data": "addressLine2"},{"data": "city"},{"data": "state"},{"data": "postalCode"},{"data": "country"},{"data": "salesRepEmployeeNumber"},{"data": "creditLimit"},
                        {
                            "data" : "action",
                            "orderable": false,
                            "className" : "text-center"
                        }
                    ],
                    order: [[0, 'desc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $(function () {
                $(document).ajaxComplete(function () {
                    Pace.restart()
                });
                if ($.support.pjax) {
                    $(document).pjax('a[data-pjax]', '#pjax-container')
                }
            });
        </script>


                
    </body>
</html>



