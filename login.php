<?php 
require_once 'library/config.php';
require_once 'library/functions.php';
include('connection.php');
if(isset($_POST['login'])){
    $email= $_POST['email'];
    $password=$_POST['password'];
      $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        session_start();
        $_SESSION['email']=$email;
        echo 'login successfull';
        echo "id: " . $row["uid"]. " - Name: " . $row["email"]. " " . $row["password"]. "<br>";
       header('Location: index.php');
    }
} else {
    echo "Login password failed";
}
$conn->close();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login</title>
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
<div class="title">Login</div>
<div class="catBoxContent1">

<form action="login.php" method="POST">
                <div class="row">
                  
                    
    <div class="form-group">
    </br>
        <label for="email"><h7 style="color:black;margin-left:50px;">Email:</h4></label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" style="margin-left: 28px;" required="true">
    </div>
           </br> 
        <label for="pwd"><h7 style="color:black;margin-left:50px;">Password:</h4></label>
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" required="true">
    </div>
    <div class="checkbox">
        <label><input type="checkbox" style="margin-left: 50px;"> <h7 style="color:black;">Remember me</h4></label>
    </div>
    </br>
    <h4 style="color:black;margin-left:150px;"><input type="submit" name="login" class="btn btn-default value="submit" ></h4>
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