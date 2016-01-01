
<?php
   session_start();
   if(isset($_SESSION['Username'])){
   	header("http://localhost/Employee_Product/Registration_SignIn/SignIn_Successful.php");
   }
   $mysql_hostname = "localhost";
   $mysql_user = "root";
   $mysql_password = "";
   $mysql_database = "employee_product";
   
   $con = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("<div class='alert alert-warning' role='alert' style='text-align:center;'><b>OPPS Something went wrong.</b></div>");
   mysql_select_db($mysql_database,$con) or die("<div class='alert alert-warning' role='alert' style='text-align:center;'><b>OPPS Something went wrong.</b></div>");

   if(isset($_POST['Username']) || isset($_POST['password']))
	{
		$username = mysql_real_escape_string($_POST['Username']);
		$pwd = mysql_real_escape_string($_POST['password']);
		$sql = "SELECT userid FROM users WHERE username = '$username' and password = '$pwd'";
		$result = mysql_query($sql);
		$count = mysql_num_rows($result);
		
		if($count == 1){
		   $_SESSION['Username'] = $username;
		   header("location: http://localhost/Employee_Product/Registration_SignIn/SignIn_Successful.php"); 
        }
		else 
		{
			echo "<div class='alert alert-danger' role='alert'>You Entered Username And Password is Incorrect.</div>";
		}
	}
   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://bootswatch.com/darkly/bootstrap.min.css">
     <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
     <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script> 
    <script type="text/javascript">
	    function noBack()
	    {
	        window.history.forward()
	    }
		   noBack();
		   window.onload = noBack;
		   window.onpageshow = function(evt) { if (evt.persisted) noBack() }
		   window.onunload = function() { void (0) }
    </script>
  </head>
  <body>
   <br>
   <br>
     <div class="container">
     	<div class="row">
     	    <div class="col-md-3"></div>
     		<div class="col-md-6">
	         <form class="form-signin" role="form" method="post" action="">
			    <div class="form-group">
			      <label for="username">Enter Your Username:</label>
			      <input type="text"  class="form-control" name="Username" placeholder="Enter username" required="required"> 
			    </div>
			    <div class="form-group">
			      <label for="password">Enter Your Password:</label>
			      <input type="password"  class="form-control" name="password" placeholder="Enter password" required="required">
			    </div>
			    <button type="submit" class="btn btn-danger">LogIn</button>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://localhost/Employee_Product/Registration_SignIn/Registration.php" class="btn btn-danger" role="button">Registration</a>
			    <br>
			    <br>
			  </form>
     		</div>
     		<div class="col-md-3"></div>
     	</div>
     </div>
    </body>
   </html>  	
