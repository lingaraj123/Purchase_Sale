<?php	
 
               session_start();

				$mysql_hostname = "localhost";
				$mysql_user = "root";
				$mysql_password = "";
				$mysql_database = "employee_product";
					
				$con = mysql_connect($mysql_hostname,$mysql_user,$mysql_password);
				mysql_select_db($mysql_database,$con) or die("<div class='alert alert-success' role='alert'>Opps somthing went wrong.</div>");
				
				if(!$con){
					die("<div class='alert alert-danger' role='alert' style='text-align:center;'>Opps Somthing Went Wrong...</div>");
						
				}
				else {
					echo "<div class='alert alert-success' role='alert' style='text-align:center;'><b>Connection Successful</b></div>";
				}
				
				if(isset($_POST['Uname']) || isset($_POST['Email']) || isset($_POST['pwd1']) || isset($_POST['pwd2'])){
					$user_name = $_POST['Uname'];
					$email = $_POST['Email'];
					$password = $_POST['pwd1'];
					$confirm_password = $_POST['pwd2'];
        
                $user_name = stripslashes($user_name);
                $email = stripslashes($email);
                $password = stripslashes($password);
                $confirm_password = stripslashes($confirm_password);
                
                $user_name = mysql_real_escape_string($user_name);
                $email = mysql_real_escape_string($email);
                $password = mysql_real_escape_string($password);
                $confirm_password = mysql_real_escape_string($confirm_password);	
                
				
				echo  $user_name."&nbsp;".$email."&nbsp;".$password."&nbsp;".$confirm_password;
				
				$sql = "INSERT INTO users (username, email, password,confirm_password) VALUES ('$user_name','$email','$password','$confirm_password')";
				
				if(mysql_query($sql)){
					 $_SESSION['Uname'] = $user_name;
					 header("location: http://localhost/Employee_Product/Registration_SignIn/Registration_Successful.php");
				 }
				 else 
				 {
				 	echo "<div class='alert alert-warning' role='alert' style='text-align:center;'><b>Registration Unsuccessfull</b></div>";
				 	header("location: http://localhost/Employee_Product/Registration_SignIn/Registration.php");
				 	
				 }
		 
				}			
   ?>
