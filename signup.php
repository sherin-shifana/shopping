
<html>
<meta http-equiv="refresh" content="19999" >
 </html>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
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
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Shop Signup
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Name</span>
						<input class="input100" type="text"    name="uname"      placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password"     name="pwd"        placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
          <br>
          <div class="wrap-input100 validate-input m-b-23" data-validate = "must be a email">
						<span class="label-input100">e-mail id</span>
						<input class="input100" type="text"     name="email"     placeholder="e-mail@abc.com">
						<span class="focus-input100" data-symbol="&#x1F48C;"></span>
					</div>
          <div class="wrap-input100 validate-input m-b-23" data-validate = "location">
            <span class="label-input100">location</span>
            <input class="input100" type="text"        name="loc"         placeholder="your location">
            <span class="focus-input100" data-symbol="&#x1F4CD;"></span>
          </div>

					<div class="wrap-input100 validate-input" data-validate="amount">
						<span class="label-input100">Link bank account </span>
             <button class="btn info">Link account</button>
             <style>
            .btn {
              border: none;
              margin-left: 100px;
              color: white;
              padding: 6px 28px;
              font-size: 16px;
              cursor: pointer;
            }
            .info {background-color: #2196F3;} /* Blue */
            .info:hover {background: #0b7dda;}
            </style>
						<input class="input100" type="number"         name="bank"       placeholder="click to enter value">
						<span class="focus-input100" data-symbol="&#x1F4B0;"></span>
					</div>
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Help.
						</a>
					</div>

					<?php

					////////////////////////////////////////////////////////////////////////////
					//////////////////////////////////////////////////////////////////////////////////
					////////////////////////////////////////////////////////////////////////////////
					if( isset($_POST['uname']) and isset($_POST['pwd']) and isset($_POST['email']) and isset($_POST['loc']) and isset($_POST['bank']) ) {
							include('connected.php'); //code is given below (used for database connection)
							$user=$_POST['uname'];
							$pass=$_POST['pwd'];
              $em=$_POST['email'];
              $loc=$_POST['loc'];
              $bk=$_POST['bank'];
echo $user;
							$ret=mysqli_query( $conn, "INSERT INTO users1 (id,name,pswd,addr,balance,email)
              VALUES ('332','$user','$pass','$loc','$bk','$em')") or die("Could not execute query: " .mysqli_error($conn));
              header('Location: login.php');
            	// $row = mysqli_fetch_assoc($ret);
							// if(!$row) {		header("Location: login-error.php#");			}
							// else {
              //
							// header('Location: login.php');
							// }
					}
					////////////////////////////////////////////////////////////////////////////
					//////////////////////////////////////////////////////////////////////////////////
					////////////////////////////////////////////////////////////////////////////////
					?>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>

							<button class="login100-form-btn" type="submit" value="Login">
								signup
							</button>
              </div>
					</div>
        <br>  <center><a href="index.php">log in</a></center>
					</div>
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
