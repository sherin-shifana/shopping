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
include('connected.php');
$our_user = $_SESSION['go-uname'];
$sql = "SELECT * FROM items WHERE user='$our_user'";
$ret=mysqli_query( $conn, $sql) or die("Could not execute query: " .mysqli_error($conn));
// $row = mysqli_fetch_assoc($ret);

?>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg#');">
			<div class="wrap-page100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
          <span class="container-logout">
            <button class="btn btn-light" type="button" onclick="location.href = 'logout.php';" value="Logout"> Logout </button>
          </span>
          <span class="login100-form-title p-b-49">
            <?php

                 echo ucfirst($our_user)."'s Cart";
            ?>
          </span>
          <div class="item-container">
          <?php
          $num_row = mysqli_num_rows($ret);
          $total_price = 0;
          $discount_rate = 5;
            for ($n = 0; $n < $num_row; $n++) {
              if($row=mysqli_fetch_array($ret)){
                $_SESSION['item'] = $row['item'];
                $_SESSION['quantity'] = $row['quantity'];
                $_SESSION['price'] = $row['price'];
                $total_price = $total_price + $_SESSION['price'];
          ?>
          <div class = "right" style = "min-width: 25%;  margin-right: 15px;margin-bottom:10px; background-color:lightgrey;">
        		<h5 class = "text-info"><strong>Item&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </strong><span style="color:black;"><?php echo ucfirst($row["item"]); ?></span></h5>
            <h5 class = "text-info"><strong>Quantity : </strong> <span style="color:black;"><?php echo ucfirst($row["quantity"]); ?></span></h5>
         		<h5 class = "text-info"><strong>Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </strong><span style="color:black;"> Rs. <?php echo $row["price"]; ?></span></h5>
          </div>
          					<!-- <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
  					</div> -->
        <?php
          }

        }
        $discount = ($total_price*$discount_rate)/100;
        $total = $total_price - $discount;
        // echo $total_price;

     ?>
   </div>

<div  align="center" >



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

				</form>
			</div>
      <br />
      <br />
      <div class="total">
        <h6 class = "text">&nbsp; Total MRP : <i class="fa fa-inr"></i> <?php echo $total_price; ?></h6>
				<h6 class = "text">- Discount &nbsp;&nbsp;: <i class="fa fa-inr"></i> <?php echo $discount; ?></h6>
				<div class="wrap-input100">
					</div>
				<h4 class = "text"><strong>&nbsp;Total&nbsp;&nbsp;&nbsp;: </strong><i class="fa fa-inr"></i> <?php echo $total; ?></h4>



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
