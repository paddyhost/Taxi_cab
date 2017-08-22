var driver_id ;
$("#btn_submit_driver").click(function () {
    var output = '';
    var driverfname = $("#dfname").val();
    var drivermname = $("#dmname").val();
    var driverlname = $("#dlname").val();
    var drivermno = $("#dmno").val();
    var driverdob = $("#ddob").val();
    var driverexp = $("#dexperience").val();
    var driverlicenseno = $("#dlicenseno").val();
    var driverlicense_exp = $("#dlicenseexp").val();
    var driverstate = $("#dstate option:selected").val();
    var drivercity = $("#dcity").val();
    var driverarea = $("#darea").val();
    if (driverfname === ''){
        showerror('dfname', "Please Enter First Name");
        output = 'isempty';
    }
    if (drivermname === ''){
        showerror('dmname', "Please Enter Middle Name");
        output = 'isempty';
    }
    if (driverlname === ''){
        showerror('dlname', "Please Enter Last Name");
        output = 'isempty';
    }
    if (drivermno === ''){
        showerror('dmno', "Please Enter Mobile Number");
        output = 'isempty';
    } else if (drivermno.length < 10) {
        showerror('dmno', "Invalid Mobile Number");
        output = 'isempty';
    }
    if (driverdob === ""){
        showerror('ddob', "Please Enter Dob");
        output = 'isempty';
    }
    if (driverexp === ""){
        showerror('dexperience', "Please Enter Experience");
        output = 'isempty';
    }
    if (driverlicenseno === "") {
        showerror('dlicenseno', "Please Enter License no.");
        output = 'isempty';
    }
    if (driverlicense_exp === "") {
        showerror('dlicenseexp', "Please Enter Experience");
        output = 'isempty';
    }
    if (driverstate === "") {
        showerror_select('dstate', "Please Select State");
        output = 'isempty';
    }
    if (drivercity === "") {
        showerror_select('dcity', "Please Select City");
        output = 'isempty';
    }
    if (driverarea === "") {
        showerror('darea', "Please Enter Area");
        output = 'isempty';
    }
    if (output !== '') {
        return false;
    }
    else {


       var myKeyVals = { firstname:driverfname,midlename:drivermname,lastname:driverlname,mobile_no:drivermno,dob:driverdob,gender:'M',Expirience_year:driverexp,license_no:driverlicenseno,Expiry_date:driverlicense_exp,format:'json',state:driverstate,city:drivercity,otherAddresss_aria:driverarea };
 

      $.ajax({
                    url: 'http://localhost/taxi_cab/admin/api_registerDriver',
                     type: "POST",
                      dataType: "json",
                    data:myKeyVals,
                  
                    success: function(data){
                     
                     if(data.status=="success")
                     {
                        if(data.count>0)
                        {

                             var result=data.result[0];

                                driver_id=result.driver_id; 
                          //      alert(driver_id);

                           $("#card_driver_details").hide();
                           $("#card_car_details").show();
                           $("#menu_driver").removeClass("incomplete");
                           $("#menu_driver").addClass("active");
                           $("#menu_car").addClass("incomplete");
                        }

                     }
                     else
                     {

                     }



                    },
                error: function(){
                              alert('failure');
            }
            });


return ;

    }
});

/*Car validation*/
$("#btn_submit_car").click(function()
{
    var output = '';
    var carname = $("#cname").val();
    var carmodel = $("#cmodel").val();
    var carseat = $("#cseat").val();
    var carcategory = $("#ccat").val();
    var carpassingno = $("#cpass").val();
    var carpassingtype = $("#cpass_type").val();
    var carcolor = $("#ccolor").val();
    var carpassingdate = $("#cpass_date").val();
    var carpassingexp = $("#cpass_exp").val();
    var carinsuranceno = $("#cinsurance_no").val();
    var carinsuranceexp = $("#cinsurance_exp").val();


    if (carname === '') {
        showerror('cname', "Please Enter Car Name");
        output = 'isempty';
    }
    if (carmodel === '') {
        showerror('cmodel', "Please Enter Car Model No.");
        output = 'isempty';
    }
    if (carseat === '') {
        showerror('cseat', "Please Enter No. of Seats");
        output = 'isempty';
    }
    if (carcategory === '') {
        showerror_select('ccat', "Please Enter Car Category");
        output = 'isempty';
    }
    if (carpassingno === '') {
        showerror('cpass', "Please Enter Car Passing No.");
        output = 'isempty';
    }
    if (carpassingtype === '') {
        showerror_select('cpass_type', "Please Enter Car Passing Type");
        output = 'isempty';
    }
    if (carcolor === '') {
        showerror('ccolor', "Please Enter Car Color");
        output = 'isempty';
    }
    if (carpassingdate === '') {
        showerror('cpass_date', "Please Enter Car Passing Date");
        output = 'isempty';
    }
    if (carpassingexp === '') {
        showerror('cpass_exp', "Please Enter Car Passing Expiry");
        output = 'isempty';
    }
    if (carinsuranceno === '') {
        showerror('cinsurance_no', "Please Enter Car Insurance No.");
        output = 'isempty';
    }
    if (carinsuranceexp === '')
    {
        showerror('cinsurance_exp', "Please Enter Car Insurance Exp");
        output = 'isempty';
    }
    if (output !== '') 
    {
        return false;
    }
    else {


             

//carcolor  carpassingexp



            var myKeyVals1 = { name:carname,model_no:carmodel,no_of_seat:carseat,category:carcolor,passing_no:carpassingno,passing_type:carpassingtype,ac_type:carcategory,passing_expiery_date:carpassingexp,Ensurance_no:carinsuranceno,ensurance_expiry_date:carinsuranceexp,driver_id: driver_id,format:'json'};
 

      $.ajax({
                    url: 'http://localhost/taxi_cab/admin/api_registerCar',
                     type: "POST",
                      dataType: "json",
                    data:myKeyVals1,
                  
                    success: function(data){
                     
                     if(data.status=="success")
                     {
                        if(data.count>0)
                        {

                             var result=data.result[0];

        swal("Good job!", "Registration Succesfull !", "success");
        return;

          $("#card_car_details").hide();
          $("#card_upload_doc").show();
          $("#menu_car").removeClass("incomplete");
          $("#menu_car").addClass("active");
          $("#menu_doc").addClass("incomplete");
                           }

                     }
                     else
                     {

                     }



                    },
                error: function(){
                              alert('failure');
            }
            });














 }
});

/*Document validation*/
$(document).on("click","#btn_submit_doc",function(){
    var driverimg = $("#img_driver").val();
    var carimg = $("#img_car").val();
    var addproof = $("#doc_address").val();
    var photoid = $("#doc_id").val();
    
    if (driverimg === '') {
        alert('Please select driver image');
    }
    if (carimg === '') {
        alert('Please select car image');
    }
    if (addproof === '') {
        alert('Please select address proof');
    }
    if (photoid === '') {
        alert('Please select photo id');
    }
    else{
        $("#menu_doc").removeClass("incomplete");
        $("#menu_doc").addClass("active");
        swal("Good job!", "Registration Succesfull !", "success");
    }
});

function showerror(id, msg) {
    $("#" + id).closest(".form-group").addClass("has-error");
    $("#" + id).parent().next().show().html(msg);

    $('.fg-line').click(function () {
        $(this).parent().removeClass('has-error');
        $(this).next().empty().hide();
    });
}
function showerror_select(id, msg) {
    $("#" + id).next(".bootstrap-select").addClass("select-error");
    $("#" + id).next().next().show().html(msg).css("color", "#f6675d");

    $(".bootstrap-select").click(function () {
        $(this).removeClass("select-error");
        $(this).next().empty().hide();
    });
}


