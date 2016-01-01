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
    function checkPass()
    {
       
        var pass1 = document.getElementById('pass1');
        var pass2 = document.getElementById('pass2');
        
        var message = document.getElementById('confirmMessage');
        
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        
        if(pass1.value == pass2.value){
            
            pass2.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "<?php echo "&nbsp;.<div class='alert alert-success' role='alert' style='text-align:center;'><b>Passwords Match!</b></div>";?>"
        }else{
           
            pass2.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = " <?php echo "&nbsp;.<div class='alert alert-warning' role='alert' style='text-align:center;'><b>Passwords Do Not Match!</b></div>";?>"
        }
    }  
  </script>
  	
  	
  </head>
  <body>
   <br>
  
  <div class="container">
     	<div class="row">
     	    <div class="col-md-3"></div>
     		<div class="col-md-6">
	          <form class="form-registration" role="form" method="post" action="db_registration.php">
			    <div class="form-group">
			      <label for="username">Enter Your Username:</label>
			      <input type="text"  class="form-control" name="Uname" placeholder="Enter username with char and number" required="required">
			    </div>
			    <div class="form-group">
			      <label for="email">Enter Your Email Address:</label>
			      <input type="email"  class="form-control" name="Email" placeholder="Enter Your Email" required="required">
			    </div>
			    <div class="form-group">
			      <label for="password">Enter Your Password:</label>
			      <span class="glyphicon glyphicon-lock"></span><input type="password"  class="form-control" name="pwd1" id="pass1" placeholder="Enter password" required="required">
			    </div>
			    <div class="form-group">
			      <label for="Confirm_password">Confirm Password:</label>
			      <span class="glyphicon glyphicon-lock"></span><input type="password" class="form-control" name="pwd2" id="pass2" onkeyup="checkPass(); return false;" placeholder="Enter Confirm password"  required="required">
			      <span id="confirmMessage" class="confirmMessage"></span>
			    </div> 
			    <button type="submit" name="register" class="btn btn-danger">Register</button><?php echo "&nbsp;"."&nbsp;"."&nbsp;"."<a href='http://localhost/Employee_Product/Registration_SignIn/SignIn.php' class='btn btn-danger' role='button'>Sign In</a>" ?>
			    <br>
			    <br>
			  </form>
     		</div>
     		<div class="col-md-3"></div>
     	</div>
     </div>
    </body>	
  </html> 
