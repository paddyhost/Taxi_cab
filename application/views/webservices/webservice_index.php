<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Onetouch | Web Services</title>
<?php //$this->load->view('adminview/toplinks'); ?>
</head>
<body>
<style>
li {margin-bottom:15px;}

a {
  -moz-animation-duration: 400ms;
  -moz-animation-name: blink;
  -moz-animation-iteration-count: infinite;
  -moz-animation-direction: alternate;
  
  -webkit-animation-duration: 400ms;
  -webkit-animation-name: blink;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-direction: alternate;
  
  animation-duration: 400ms;
  animation-name: blink;
  animation-iteration-count: infinite;
  animation-direction: alternate;
}

@-moz-keyframes blink {
  from {
    opacity: 1;
  }
  
  to {
    opacity: 0;
  }
}

@-webkit-keyframes blink {
  from {
    opacity: 1;
  }
  
  to {
    opacity: 0;
  }
}

@keyframes blink {
  from {
    opacity: 1;
  }
  
  to {
    opacity: 0;
  }
}

</style>
<div class="container">
<legend>List of all Driver App Web Services</legend>

<ul>
  <li><strong>1. Login</strong>
    <ul>
      <li>http://localhost/taxi_cab/api/Driver/login?mobile=[driver mobile]&password=[password]&key=[YOUR API KEY]</li>
      <!--<li>http://localhost/taxi_cab/api/Driver/login?mobile=9975294782&password=521521521&key=44555855sfshgdfjshvjhsdf</li>
      
      -->
    </ul>
  </li>
 	    
</ul>

<?php //$this->load->view('adminview/footerlinks'); ?>
</div>
</body>
</html>
