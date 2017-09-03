   <!DOCTYPE html>
<html>
   

 <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Taxi Cab | Registration</title>
        <?php $this->load->view('commoncss');?>
    </head>
    <body class="sw-toggled">
        <?php $this->load->view('header');?>
        <section id="main" data-layout="layout-1">
            <?php $this->load->view('sidebar');?>
            <section id="content">
                <div class="container">
                    <div class="wizard m-b-20">
                        <ul class="wizard_menu">
                            <li id="menu_driver" class="incomplete">


                                <a href="javascript:void(0)">1</a>
                                <span>Driver Registration</span>
                            </li>
                            <li id="menu_car">
                                <a href="javascript:void(0)">2</a>
                                <span>Car Registration</span>
                            </li>
                            <li id="menu_doc">
                                <a href="javascript:void(0)">3</a>
                                <span>Upload Documents</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card" id="card_driver_details">
                        <div class="card-header">
                            <h2>Driver Details</h2>
                        </div>
                        <div class="card-body card-padding">
                            <form class="frm_driver_registration row" name="frm_driver_registration" method="post" action="">
                                <div class="col-md-12 col-sm-12 col-xs-12 p-l-0 p-r-0">
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>First Name</label>
                                        <div class="fg-line">
                                            <input class="form-control" placeholder="First Name" type="text" name="dfname" id="dfname">
                                        </div>
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Middle Name</label>
                                        <div class="fg-line">
                                            <input class="form-control" placeholder="Middle Name" type="text" name="dmname" id="dmname">
                                        </div>
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Last Name</label>
                                        <div class="fg-line">
                                            <input class="form-control" placeholder="Last Name" type="text" name="dlname" id="dlname">
                                        </div>
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 p-l-0 p-r-0">
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Mobile No.</label>
                                        <div class="fg-line">
                                            <input class="form-control" placeholder="Mobile No." type="text" name="dmno" id="dmno" data-mask="0000000000">
                                        </div>
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>DOB</label>
                                        <div class="form-group m-b-0">
                                            <div class="dtp-container fg-line">
                                                <input type='text' class="form-control date-picker" placeholder="Click here..." name="ddob" id="ddob">
                                            </div>
                                            <small style="display: none" class="help-block"></small>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Gender</label><br>
                                        <label class="radio radio-inline m-r-20 m-t-10">
                                            <input type="radio" name="dgender" value="male" checked>
                                            <i class="input-helper"></i>  
                                            Male
                                        </label>
                                        <label class="radio radio-inline m-r-20 m-t-10">
                                            <input type="radio" name="dgender" value="female">
                                            <i class="input-helper"></i>  
                                            Female
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 p-l-0 p-r-0">
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Experience</label>
                                        <div class="fg-line">
                                            <input class="form-control" placeholder="Experience in year" type="text" name="dexperience" id="dexperience" data-mask="00">
                                        </div>
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Driving License No.</label>
                                        <div class="fg-line">
                                            <input class="form-control" placeholder="Driving Licence No." type="text" name="dlicenseno" id="dlicenseno" data-mask="0000-000-0000">
                                        </div>
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>License Expiry Date</label>
                                        <div class="form-group m-b-0">
                                            <div class="dtp-container fg-line">
                                                <input type='text' class="form-control date-picker" placeholder="Click here..." name="dlicenseexp" id="dlicenseexp">
                                            </div>
                                            <small style="display: none" class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 p-l-0 p-r-0">
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Address 1</label>
                                        <select class="selectpicker" title="Select State" name="dstate" id="dstate">
                                            <option>Maharashtra</option>
                                        </select>
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Address 2</label>
                                        <select class="selectpicker" title="Select City" name="dcity" id="dcity">
                                            <option>Aurangabad</option>
                                        </select>
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Area/ Other</label>
                                        <div class="fg-line">
                                            <input class="form-control" placeholder="Area/ Other" type="text" name="darea" id="darea">
                                        </div>
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 text-right m-t-20">
                                    <button type="button" class="btn btn-success waves-effect" id="btn_submit_driver">Save & Proceed</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card" style="display: none" id="card_car_details">
                        <div class="card-header">
                            <h2>Car Details</h2>
                        </div>
                        <div class="card-body card-padding">
                            <form class="frm_car_registration row">
                                <div class="col-md-12 col-sm-12 col-xs-12 p-l-0 p-r-0">
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Car Name</label>
                                        <div class="fg-line">
                                            <input class="form-control" placeholder="Car Name" type="text" id="cname" name="cname">
                                        </div>
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Model No.</label>
                                        <div class="fg-line">
                                            <input class="form-control" placeholder="Model No." type="text" id="cmodel" name="cmodel">
                                        </div>
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>No. of seats</label>
                                        <div class="fg-line">
                                            <input class="form-control" placeholder="No. of seats (capacity)" type="text" id="cseat" name="cseat" data-mask="00">
                                        </div>
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 p-l-0 p-r-0">
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Category</label>
                                        <select class="selectpicker" title="Select category" id="ccat" name="ccat">
                                            <option>Cab</option>
                                        </select>
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Passing No.</label>
                                        <div class="fg-line">
                                            <input class="form-control" placeholder="Passing No." type="text" id="cpass" name="cpass" data-mask="000000000000">
                                        </div>
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Passing Type</label>
                                        <select class="selectpicker" title="Select Passing Type" id="cpass_type" name="cpass_type">
                                            <option>Cab</option>
                                        </select>
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 p-l-0 p-r-0">
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Car Type</label><div class="clearfix"></div>
                                        <label class="radio radio-inline m-r-20 m-t-10">
                                            <input type="radio" name="inlineRadioOptions" value="option1" checked>
                                            <i class="input-helper"></i>  
                                            AC
                                        </label>
                                        <label class="radio radio-inline m-r-20 m-t-10">
                                            <input type="radio" name="inlineRadioOptions" value="option2">
                                            <i class="input-helper"></i>  
                                            Non AC
                                        </label>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Color</label>
                                        <div class="fg-line">
                                            <input class="form-control" placeholder="Color" type="text" id="ccolor" name="ccolor">
                                        </div>
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Passing Date</label>
                                        <div class="form-group m-b-0">
                                            <div class="dtp-container fg-line">
                                                <input type='text' class="form-control date-picker" placeholder="Click here..." id="cpass_date" name="cpass_date">
                                            </div>
                                            <small style="display: none" class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 p-l-0 p-r-0">
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Passing Expiry Date</label>
                                        <div class="form-group m-b-0">
                                            <div class="dtp-container fg-line">
                                                <input type='text' class="form-control date-picker" placeholder="Click here..." id="cpass_exp" name="cpass_exp">
                                            </div>
                                            <small style="display: none" class="help-block"></small>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Insurance No.</label>
                                        <div class="fg-line">
                                            <input class="form-control" placeholder="Insurance No." type="text" id="cinsurance_no" name="cinsurance_no" data-mask="000000000000">
                                        </div>
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <label>Insurance Expiry Date</label>
                                        <div class="form-group m-b-0">
                                            <div class="dtp-container fg-line">
                                                <input type='text' class="form-control date-picker" placeholder="Click here..." id="cinsurance_exp" name="cinsurance_exp">
                                            </div>
                                            <small style="display: none" class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 text-right m-t-20">
                                    <button type="button" class="btn btn-success waves-effect" id="btn_submit_car">Save & Proceed</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card" style="display: none" id="card_upload_doc">
                        <div class="card-header">
                            <h2>Upload Documents</h2>
                        </div>
                        <div class="card-body card-padding row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <label>Driver Photo</label>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                        <div>
                                            <span class="btn btn-info btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" id="img_driver" name="img_driver">
                                                <small style="display: none" class="help-block"></small>
                                            </span>
                                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <label>Car Photo</label>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                        <div>
                                            <span class="btn btn-info btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" id="img_car" name="img_car">
                                                <small style="display: none" class="help-block"></small>
                                            </span>
                                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <label>Address Proof</label>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                        <div>
                                            <span class="btn btn-info btn-file">
                                                <span class="fileinput-new">Select Document</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" id="doc_address" name="doc_address">
                                                <small style="display: none" class="help-block"></small>
                                            </span>
                                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <label>Photo ID Proof</label>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                        <div>
                                            <span class="btn btn-info btn-file">
                                                <span class="fileinput-new">Select Document</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" id="doc_id" name="doc_id">
                                                <small style="display: none" class="help-block"></small>
                                            </span>
                                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 text-right m-t-20">
                                <button type="button" class="btn btn-success waves-effect" id="btn_submit_doc">Submit Form</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <?php $this->load->view('footer');?>
         <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Please wait...</p>
            </div>
        </div>
        
        <?php $this->load->view('commonjs');?>
    </body>
</html>
