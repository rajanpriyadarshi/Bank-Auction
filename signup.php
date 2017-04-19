<?php 
require_once 'library/config.php';
require_once 'library/functions.php';
include('connection.php');//connetion to server.....
if(isset($_POST['register'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $name=$_POST['firstname'];
    $lastname=$_POST['lastname'];
$sql = "INSERT INTO user (email,password,firstname,lastname)
VALUES ('$email', '$password', '$name','$lastname')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
     header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Sign Up</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="css/menu.css" type="text/css">
<link rel="stylesheet" href="css/print.css" type="text/css" media="print">
<script language="javascript" src="javascript/jquery.min.js"></script>
<script language="javascript" src="javascript/jquery.bxSlider.js"></script>
<script language="javascript" src="javascript/jcarousellite_1.0.1.js"></script>    
<!--[if IE]>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection">
<![endif]-->
<style>
body{ margin-top:10px; background:#ffffff url(images/bg-body.jpg) repeat-x; }
#catBox1 { font-family:Verdana,Arial,Sans-Serif;font-size:12px; margin-top:10px;margin-bottom:10px;}
#catBox1 .title { text-align:left; font-size:16px; font-weight:bold; padding:5px; padding-left:20px; border-bottom:1px dashed #0066B3; color:#0066B3;}
.catBoxContent1 p { padding-left:10px; padding-top:10px; padding-right:10px;}
.catBoxContent1 ul li{ list-style:none; display:block; padding-bottom:5px;}
.catBoxContent1 a { text-decoration:none;}

</style>
<script type="text/javascript">
	$(document).ready(function(){
        $(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 3,
		auto:500,
		speed:1000
	});
});
</script>
<style>
</style>
</head>

<body>

<div class="container">
	<div id="header" class="span-24">
		<img src="images/logo.jpg" />
    </div>
 <?php include('menu.php');?>
   
  <div id="sidebar-1" class="span-5 border">
  	<?php include('left.php');?>
	
    </div>
<div id="content" class="span-13 border">

<div class="span-12">
<div id="catBox1">    
<div class="title">Sign up for Auction Details</div>
<div class="catBoxContent1">

<form action="signup.php" method="POST">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group"></br>
<label style="margin-left: 60px;">First Name</label><input type="text" name="firstname" id="first_name"  class="form-control input-sm"  style="margin-left: 80px;" required="true">
</div>
</div>
</br>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
	<label style="margin-left: 60px;">Last Name</label><input type="text" name="lastname" id="last_name" class="form-control input-sm" style="margin-left: 80px;" required="true">
</div>
</div>
</div>
</br>
<div class="form-group">
<label style="margin-left: 60px;">Email</label><input type="email" name="email" id="email" class="form-control input-sm" style="margin-left: 114px;" required="true">
</div>

<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6"></br>
<div class="form-group">
	<label style="margin-left: 60px;">Password</label><input type="password" name="password" id="password" class="form-control input-sm"  style="margin-left: 85px;" required="true">
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group"></br>
	<label style="margin-left: 60px;">Confirm Password</label><input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" style="margin-left: 25px;" required="true">
</div>
</div>
</div>
</br>
<input type="submit" name="register" value="Register" class="btn btn-info btn-block" style="margin-left: 200px;">
			    		
			    		</form>

</div> <!-- catBoxLeft-->
</div><!-- catBox-->
</div><!-- span-13 -->


</div>

<div class="span-6 last">
	<?php include('slider.php'); ?>

<hr/>
      <?php include('footer.php'); ?>
	  
</div>

</body>
</html>