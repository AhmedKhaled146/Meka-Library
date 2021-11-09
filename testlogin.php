<?php 
		If($_SERVER["REQUEST_METHOD"] == "POST"){
			$conn = mysqli_connect("localhost", "root", "", "newsys") or die("Connection faild");
			if(!empty($_POST['userName'])){
				$userName = filter_input(INPUT_POST, "userName");
				$pass     = filter_input(INPUT_POST, "pass");
				$query    = "SELECT * FROM reglog WHERE userName='$userName' and pass='$pass'";
				$result   = mysqli_query($conn, $query);
				$count    = mysqli_num_rows($result);
				if($count>0){
					include "userpage.php";
					die();
				}else{ 
					$error = "\" Sorry Your User Name or Password Was Wronge ! \""; // keda folaaa awyyyyyy .... :)
				}
			}
		}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="this library important about information .. ">
    <title> Log In </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="CSS style/stylelogin.css">
    <style type="text/css"></style>
  </head>
  <body>
  	<!-- <div class="btn btn-primary"> button</div>  keda a2dr a4t8l 3ady b2a bootstrap and jquery -->
  	<div class="topnav">
	  	<span>Meka Library</span>
	  	<a href="homepage.html">Home</a>
    </div>
      <div>
      	<img src="images/img3.jpg">
        <form method="post" action='<?php echo $_SERVER['PHP_SELF']?>' class="form" >
        	<h1 class="lib-name">Meka Library</h1>
        	<h2>Login</h2>
          <div class="textfield">
            <label>Enter Username : </label>
            <input type="text" name="userName" placeholder=" Enter Your Username" required>
          </div>
          <div class="textfield">
            <label>Enter Password : </label>
            <input type="password" name="pass" placeholder=" Enter Your Password" required>
          </div>
          <p>
          	<?php
          	if(isset($error)){
          		echo $error;
          	}
          	?>
          </p>
          <input type="submit" name="save" value="Log In" class="aaa" > <br> <br>
          <hr>
          <div class="small"> <h3>Don't have an account?</h3> </div>
          <a href="signuppage.html" class="divv">Sign Up</a>
        </form>
      </div>
      <script src="js/jquery-3.6.0.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script>
      	$(document).ready(function(){
      		$("form").animate({
      			width: '500px',
      			height: '670px',
      		}, 500);
      	}); // it will hid0e the login word -->*/
      </script>
  </body>
</html>