<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Taxi Cab | Login</title>
        
        <?php $this->load->view('commoncss');?>
        <style>
            .col_login{
                position: absolute;
                left: 0;
                right: 0;
                width: 35%;
                margin: 0 auto;
                display: table-cell;
                top: 12%;
                padding: 15px;
            }
            .col_login .card{
                border-radius: 12px;
                border-top: 4px solid #30cb70;
                border-radius: 12px;
            }
            .col_login label{
                margin-left: 11%;
            }
        </style>
    </head>
    
    <body class="bg-login">
        <div class="container">
            <div class="col_login">
                <h1 class="text-center f-300 c-white m-b-30">Welcome to Taxi Cab !</h1>
                <div class="card m-b-0">
                    <div class="card-body card-padding">
                        <h3 class="text-center m-t-0 m-b-30">Login</h3>
                        <form>
                            <div class="row m-l-0 m-r-0">
                                <label>User Name</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-mood zmdi-hc-fw f-20 c-gray"></i></span>
                                    <div class="fg-line">
                                        <input type="text" placeholder="User Name" class="form-control" id="user_name" name="user_name">
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-l-0 m-r-0 m-t-20">
                                <label>Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-lock-outline zmdi-hc-fw f-20 c-gray"></i></span>
                                    <div class="fg-line">
                                        <input type="password" placeholder="Password" class="form-control" id="password" name="password">
                                        <small style="display: none" class="help-block"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-l-0 m-r-0 m-t-30">
                                <button type="button" id="login"  class="btn btn-block btn-success btn-lg">Login</button>
                            </div>
                            <div class="row m-l-0 m-r-0 m-t-20 text-center">
                                <p><a href="javascript:void(0)" class="c-green f-16"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Create Account</a><span class="c-bluegray m-l-15 m-r-15 f-16">Or</span><a href="javascript:void(0)" class="c-pink f-16"><i class="zmdi zmdi-refresh-alt zmdi-hc-fw"></i> Reset Password</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
    </body>
</html>

  <?php $this->load->view('commonjs');?>

<script type="text/javascript">

$(document).ready(function(){
    $("#login").click(function(){
      

       
    var output = '';
       var user_name = $("#user_name").val();
        var password = $("#password").val();
  
      if (user_name === '')
      {
       showerror('user_name', "Please Enter User Name");
        output = 'isempty';
        alert();
      }
      if (password === '')
      {
       showerror('password', "Please Enter Password");
        output = 'isempty';
         alert();
      }
      if (output !== '')
      {
        return false;
      }     
        else
        {

        //var myKeyVals1 = { format:'json',username:user_name,password:password};


     var myKeyVals1 = { format:'json',username:user_name,password:password};
     $.ajax({
              url: 'http://localhost/taxi_cab/admin/api_login',
              type: "POST",
              dataType: "json",
              data:myKeyVals1,
              success: function(data)
              {
                if(data.status=="Success")
                {
                   
                    if(data.count>0)
                    {
                       
                   //  swal("Good job!", "Login Succesfull !", "success");
                    window.location.href = "http://localhost/taxi_cab/admin/dashboard";
                     
                     return;

    ''
                    }

                }
                else
                {

                     swal("Sorry!", "Login Error !", "error");
                }

            },
                error: function()
                {
                        swal("Sorry!", "Login Error !", "error");
                }
            });



         
        }



    });
});



   /* function login()
    {
    
        var output = '';
        var user_name = $("#user_name").val();
        var password = $("#password").val();
      if (driverfname === '')
      {
        showerror('user_name', "Please Enter User Name");
        output = 'isempty';
      }
      if (drivermname === '')
      {
        showerror('password', "Please Enter Password");
        output = 'isempty';
      }
      if (output !== '')
      {
        //    return false;
      }

      else {


    
     var myKeyVals1 = { format:'json',username:user_name,password:password};
     $.ajax({
              url: 'http://localhost/taxi_cab/admin/api_login',
              type: "POST",
              dataType: "json",
              data:myKeyVals1,
              success: function(data)
              {
                if(data.status=="success")
                {
                    if(data.count>0)
                    {
                       
                     swal("Good job!", "Login Succesfull !", "success");
                     return;

    
                    }

                }
                else
                {

                     swal("Good job!", "Login Succesfull !", "error");
                }

            },
                error: function()
                {
                        swal("Good job!", "Login Succesfull !", "error");
                }
            });


}

}*/

function showerror(id, msg) {
    $("#" + id).closest(".input-group").addClass("has-error");
    $("#" + id).parent().next().show().html(msg);

    $('.fg-line').click(function () {
        $(this).parent().removeClass('has-error');
        $(this).next().empty().hide();
    });
}




// function showerror(id, msg) {
//     $("#" + id).closest(".form-group").addClass("has-error");
//     $("#" + id).parent().next().show().html(msg);

//     $('.fg-line').click(function () {
//         $(this).parent().removeClass('has-error');
//         $(this).next().empty().hide();
//     });
// }




</script>