

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
  	
  </head>
   <body>
    <?php
		
			$mysql_hostname = "localhost";
			$mysql_user = "root";
			$mysql_password = "";
			$mysql_database = "employee_product";
			
			$bd = mysql_connect($mysql_hostname,$mysql_user,$mysql_password);
			
			if(!$bd){
				echo  die("OPPS something went wrong.");
			}
			else {
				echo "<div class='alert alert-success' role='alert'>Connection Successful</div>";
			}
			
			mysql_select_db($mysql_database,$bd) or die("<div class='alert alert-success' role='alert'>Opps somthing went wrong.</div>");
    ?>
   
                    <!-- Emp id -->
                    <div class="form-group">
				      <label for="Emp_ID">Employee ID:</label>
				      <input type="text"  class="form-control" name="Emp_ID" value="<?php echo $emp_id ?>" placeholder="Enter FirstName">
				    </div>
   </body>
  </html> 
  
