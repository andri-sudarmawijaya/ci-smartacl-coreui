<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.12
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
    <head>
        <?php $this->load->view('_layouts/head'); ?>
        <link rel="stylesheet" type="text/css" href="/vendors/DataTables/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="/vendors/DataTables/Select-1.3.3/css/select.bootstrap4.min.css"/>
        <!-- <link rel="stylesheet" type="text/css" href="/vendors/DataTables/Select-1.3.3/css/select.dataTables.min.css"/> -->
    </head>
    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <?php $this->load->view('_layouts/header'); ?>

        <div class="app-body" id="pjax-container">
    
        <?php $this->load->view('_layouts/sidebar'); ?>
    
            <main class="main" >
            <?php $this->load->view('_layouts/breadcrumb'); ?>

                <div class="container-fluid">
                    <div class="animated fadeIn">
                    <?php $this->load->view('_partials/content_top'); ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h4 class="card-title mb-0"><?php echo $title; ?></h4>
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
                                
                                <div class="table-responsive">

                                    <table class="table table-bordered table-striped" id="mytable">
                                        <thead>
                                            <tr>
                                                <th width="80px">No</th>
                                        <th>CustomerName</th>
                                        <th>Phone</th>
                                        <th>AddressLine1</th>
                                        <th>City</th>
                                        <th>Status</th>
                                        <th width="200px">Action</th>
                                            </tr>
                                        </thead>
                                    
                                    </table>

                                    <div id='updateStatus'>
                                        <label for='selectStatus' class='form-label'> Pilih Status</label>
                                        <select id='selectStatus' class='form-control'>
                                            <option value=''>_Pilih Status_</option>
                                            <option value='Basic'>Basic</option>
                                            <option value='Standard'>Standard</option>
                                            <option value='Premium'>Premium</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row text-center">
                                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                        <div class="text-muted">Visits</div>
                                        <strong>29.703 Users (40%)</strong>
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                        <div class="text-muted">Unique</div>
                                        <strong>24.093 Users (20%)</strong>
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                        <div class="text-muted">Pageviews</div>
                                        <strong>78.706 Views (60%)</strong>
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                        <div class="text-muted">New Users</div>
                                        <strong>22.123 Users (80%)</strong>
                                        <div class="progress progress-xs mt-2">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
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
                    <?php $this->load->view('_partials/content_bottom'); ?>
                        
                    </div>
                </div>
            </main>
            
            <?php $this->load->view('_layouts/aside'); ?>
        </div>
        <?php $this->load->view('_layouts/footer'); ?>        
        <?php $this->load->view('_layouts/script'); ?>

        <script type="text/javascript" src="/vendors/DataTables/datatables.min.js"></script>
        <script type="text/javascript" src="/vendors/DataTables/Select-1.3.3/js/dataTables.select.min.js"></script>
        <script type="text/javascript" src="/vendors/DataTables/Select-1.3.3/js/select.bootstrap4.min.js"></script>
        
        <script type="text/javascript">
            //$(document).ready(function() {
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

                var t = $("#mytable").DataTable({
                    'lengthMenu':[[5, 10, 25, 50, 100, -1 ],[5, 10, 25, 50, 100, 'semua']],
                    dom:'Bflrtip',
                    //scrollY:'400px',
                    //deferRender: true,
                    //scroller:{loadingIndicator:true},
                    
                    //paging:false,
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
                        },{"data": "customerName"},{"data": "phone"},{"data": "addressLine1"},{"data": "city"},{"data": "status"},
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
                    },


                    columnDefs: [
                        {
                            targets: 0,
                            checkboxes: {
                            selectRow: true
                            }
                        }
                    ],
                    select: {
                        style: 'multi',
                        selector: 'td:nth-child(2)'
                    }


                },);
            //}
            //);
            
            t.on('select.dt', function(){
                getDataSelected()
            })
            t.on('deselect', function(){
                getDataSelected()
            })
                
            $('#updateStatus').hide()
            var jum_data = '';
            var isiSelect;
            function getDataSelected(){

                $('#updateStatus').hide()
                var array = [];
                t.rows('.selected').every(function(rowIdx) {
                array.push(t.row(rowIdx).data())
                })

                var dk = [];
                array.forEach(function(entry) {
                    var isi = {};
                    isi.customerNumber = entry.customerNumber;  
                    isi.customerName = entry.customerName;  
                    dk.push(entry);
                })
                                
                jum_data = t.rows({selected:true}).count()
                if(jum_data >= 1){
                    $('#updateStatus').show()
                    isiSelect = dk;
                }
                else{
                    isiSelect = '';
                }
            }

            $('#selectStatus').on('change', function(){
                //console.log(isiSelect)
                if($(this).val() !== ''){
                    if(jum_data >= 1){
                        $.ajax({
                            type:'POST',
                            url: '<?=base_url("customers/updateStatus");?>',
                            dataType : 'JSON',
                            data : {jumUpdateStatus : jum_data, status:$(this).val(),isi:isiSelect}, 
                            success : function(response){
                                console.log(response)
                                t.ajax.reload()
                            },error:function(errors){
                                console.log(errors.responseText)
                            }
                        })
                    }
                    else{
                        alert('tidak ada data')
                    }
                }
            })

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
