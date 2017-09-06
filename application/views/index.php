<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Taxi Cab</title>
        <?php $this->load->view("commoncss");?>
    </head>
    <body class="sw-toggled">
        <?php $this->load->view("header");?>
        <section id="main" data-layout="layout-1">
            <?php $this->load->view("sidebar");?>
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Dashboard / Cab driver details</h2>
                    </div>
<!--                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a href="javascript:void(0)" class="col_features">
                            <div class="card">
                                <div class="card-body card-padding">
                                    <div class="text-center featured_icon">
                                        <i class="zmdi zmdi-file-text zmdi-hc-fw"></i>
                                    </div>
                                    <h4 class="text-center">Driver Details</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <a href="<?php echo base_url()?>admin/registration/" class="col_features">
                            <div class="card">
                                <div class="card-body card-padding">
                                    <div class="text-center featured_icon">
                                        <i class="zmdi zmdi-accounts-add zmdi-hc-fw"></i>
                                    </div>
                                    <h4 class="text-center">Car/ Driver Registration</h4>
                                </div>
                            </div>
                        </a>
                    </div>-->
                    <div class="card">
                        <div class="card-body card-padding">
                            <div class="table-responsive">
                                <table id="data-table-selection" class="table table-striped table-vmiddle">
                                    <thead>
                                        <tr>
                                            <th data-column-id="id" data-type="numeric" data-identifier="true">Sr. No.</th>
                                            <th data-column-id="dname" data-order="desc">Driver Name</th>
                                            <th data-column-id="dmobile">Mobile</th>
                                            <th data-column-id="cname">Car Name</th>
                                            <th data-column-id="cmodel">Car Model</th>
                                            <th data-column-id="cseats">No of seats</th>
                                            <th data-column-id="ccat">Category</th>
                                            <th data-column-id="ctype">Car type</th>
                                            <th data-column-id="actions" data-formatter="actions" data-sortable="false">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Prasad Gote</td>
                                            <td>9860402800</td>
                                            <td>Maruti suzuki</td>
                                            <td>Maruti - 800</td>
                                            <td>4</td>
                                            <td>Cab</td>
                                            <td>AC</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Vishal Patil</td>
                                            <td>9860402800</td>
                                            <td>Maruti suzuki</td>
                                            <td>Maruti - 800</td>
                                            <td>4</td>
                                            <td>Cab</td>
                                            <td>AC</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Priyanka Beldar</td>
                                            <td>9860402800</td>
                                            <td>Maruti suzuki</td>
                                            <td>Maruti - 800</td>
                                            <td>4</td>
                                            <td>Cab</td>
                                            <td>AC</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Poonam Deshmukh</td>
                                            <td>9860402800</td>
                                            <td>Maruti suzuki</td>
                                            <td>Maruti - 800</td>
                                            <td>4</td>
                                            <td>Cab</td>
                                            <td>AC</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>      
                </div>
            </section>
        </section>
        <?php $this->load->view("footer");?>
         <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Please wait...</p>
            </div>
        </div>
         
        <ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
            <li class="mfb-component__wrap">
                <a href="/admin/registration/" data-mfb-label="Add Driver" class="mfb-component__button--main">
                    <i class="mfb-component__main-icon--resting ion-plus-round"></i>
                    <i class="mfb-component__main-icon--active ion-close-round"></i>   
                </a>
            </li>
        </ul>
        
        <?php $this->load->view("commonjs");?>
         <script type="text/javascript">
            $(document).ready(function(){
                //Selection
                $("#data-table-selection").bootgrid({
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-module',
                        iconDown: 'zmdi-expand-more',
                        iconRefresh: 'zmdi-refresh',
                        iconUp: 'zmdi-expand-less'
                    },
                    formatters: {
                        "actions": function(column, row) {
                            return "<button type=\"button\" class=\"btn btn-xs btn-primary btn-edit waves-effect\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-edit\"></span></button> " + 
                                "<button type=\"button\" class=\"btn btn-xs btn-danger btn-delete waves-effect m-l-5\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-delete\"></span></button>";
                        }
                    },
                    selection: true,
                    multiSelect: true,
                    rowSelect: true,
                    keepSelection: true
                });
                
            });
        </script>
    </body>
</html>
