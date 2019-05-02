<!DOCTYPE html>
<html lang="en">
<head>
	<title>shop qr </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<?php
session_start();
$our_user = $_SESSION['go-uname'];
// echo $our_user;
$root = '';
// use if specifying path from root
//$root = $_SERVER['DOCUMENT_ROOT'];
$path = 'images/';
// End of user modified section
/////////////////////////////////////////////////////////////////////
function getImagesFromDir($path) {
    $images = array();
    if ( $img_dir = @opendir($path) ) {
        while ( false !== ($img_file = readdir($img_dir)) ) {
            // checks for gif, jpg, png
            if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
                $images[] = $img_file;
            }
        }
        closedir($img_dir);
    }
    return $images;
}
function getRandomFromArray($ar) {
    mt_srand( (double)microtime() * 1000000 ); // php 4.2+ not needed
    $num = array_rand($ar);
    return $ar[$num];
}
// Obtain list of images from directory
$imgList = getImagesFromDir($root . $path);
$img = getRandomFromArray($imgList);
//echo "$img";

?>
<body onclick="location.href = 'showitems.php';">

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg#');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
            <?php

						     echo "WELCOME " . strtoupper($our_user);
            ?>

            <h3 style= "color: #A9A9A9;" ><i>TO OUR SHOP</i></h3>
					</span>

					<!-- <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
							</div> -->

<div  align="center" >
  <?php
    function show(){
      header("Location: showitems.php");
    }

 ?>



<meta charset="utf-8" />
<title>Demo</title>
<style type="text/css">
  body { font: 14px/1.3 verdana, arial, helvetica, sans-serif; }
  h1 { font-size:1.3em; }
  h2 { font-size:1.2em; }
  a:link { color:#33c; }
  a:visited { color:#339; }
  p { max-width: 60em; }
  /* so linked image won't have border */
  a img { border:none; }
</style>
<!-- image displays here -->
<!-- <img src="<?php echo $path . $img ?>" align="center" alt="QR Not found"
style="width: 150px; height: 150px; transform: rotate(45deg); border-style: solid;  border-color: orange;"/>
<p>&nbsp;</p> -->

<!-- ///////////////////////////////////////////////////////////////////////////
/////////////////////// Insert into db (usr, shop id , qr )///////////////////////////
//////////////////////////////////////////////////////////////////////////////// -->
<!-- <?php

   // header("Location: login-error.php#");
if (ob_get_level() == 0) ob_start();
{
  include('connected.php');
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  else{echo "cnted";}
  $sql = "INSERT INTO temp_qr (usr,qrvalue)
  VALUES ('$our_user','$img')";
  	if ($conn->query($sql) === TRUE) {
  	    echo "New record created successfully";
  	} else {
  	    echo "Error: " . $sql . "<br>" . $conn->error;
  	}
  $conn->close();
    echo "<br> Line to show.";
    echo str_pad('',4096)."\n";

    ob_flush();
    flush();
    sleep(15);
}

include('connected.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{echo "**cnted**";}
$sql = "DELETE FROM temp_qr WHERE usr='$our_user'";
 if ($conn->query($sql) === TRUE) {
     echo "record DELETED successfully";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
$conn->close();

ob_end_flush();
?> -->

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
