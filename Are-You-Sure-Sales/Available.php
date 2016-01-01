<?php 
 
 session_start();
 
 echo "<div class='alert alert-success' role='alert' style='text-align:center;'>"."Welcome            ".$_SESSION['Username']."</div>";
 echo "<br>";
  
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
		    
		    <!-- <script type="text/javascript">   
				function Redirect() 
				{  
				window.location="http://www.newpage.com"; 
				} 
				document.write("You will be redirected to a new page in 5 seconds"); 
				setTimeout('Redirect()', 5000);   
             </script> -->
	
		  	
		  </head>
		  <body>
		  	<br>
		    <br>
		   <div class="container">
				<div class="row">
				   <div class="col-md-2"></div>
				   <div class="col-md-8">
				   
				     <?php 
				     
				        echo "<div class='alert alert-danger' role='alert' style='text-align:center;font-weight:bold;'>Product is not Available</div>";
				        echo "<br>"."<br>";
				        echo"<script> setTimeout(function(){
				        	window.open('http://localhost/Employee_Product/Sales/Display/Sales_View.php','_self');
				            }, 1500);</script>";
				     ?>
				   
				   </div>
				   <div class="col-md-2"></div>
				</div>
		   </div>
  </body>
 </html>    		    
