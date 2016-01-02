<?php 
 
 session_start();
 
 echo "<br>";
 /* echo "<div class='alert alert-warning' role='alert' style='text-align:center;'>"."Welcome            ".$_SESSION['Username']."</div>";
 */
 $mysql_hostname = "localhost";
 $mysql_user = "root";
 $mysql_password = "";
 $mysql_database = "employee_product";
  
 $con = mysql_connect($mysql_hostname,$mysql_user,$mysql_password);
  
 if(!$con){
 	echo  die("OPPS something went wrong.");
 }
 else {
 	echo "<div class='alert alert-success' role='alert' style='text-align:center;'>Connection Successful</div>";
 }
  
 $db = mysql_select_db($mysql_database,$con) or die("<div class='alert alert-success' role='alert'>Opps somthing went wrong.</div>");
  

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
		  </head>
		  <body>
		  	<br>
		    <br>
		   <div class="container">
		   <div class="row">
     	 <div class="col-md-12">
     	  <nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="http://localhost/Employee_Product/Registration_SignIn/SignIn_Successful.php"> Account Details </a>
				    </div>	
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				         <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Agency <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="http://localhost/Employee_Product/Agency_Details/Agency_index.php"> Agency Entry </a></li>
				            <li class="divider"></li>
				            <li><a href="http://localhost/Employee_Product/Agency_Details/Search_Agency/Search_Agency.php"> Search Agency </a></li>
				           	<li class="divider"></li>
				            <li><a href="http://localhost/Employee_Product/Agency_Details/Display/Agency_view.php"> Agency Details </a></li>
				          </ul>
				        </li>
				         <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Employee <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="http://localhost/Employee_Product/Employee/Employee_index.php">Employee Entry</a></li>
				            <li class="divider"></li>
				            <li><a href="http://localhost/Employee_Product/Employee/Search/Employee_Search.php">Employee Search</a></li>
				            <li class="divider"></li>
				            <li><a href="http://localhost/Employee_Product/Employee/Display/Employee_View.php">Employee Details</a></li>
				          </ul>
				        </li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Product <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="http://localhost/Employee_Product/Product/Product_index.php"> Product Purchase Entry </a></li>
				            <li class="divider"></li>
				            <li><a href="http://localhost/Employee_Product/Product/Display/Product_View.php"> Product Details </a></li>
				            <li class="divider"></li>
				            <li><a href="http://localhost/Employee_Product/Product/Search/date_search.php">Product Search On Date </a></li>
				            <li class="divider"></li>
				            <li><a href="http://localhost/Employee_Product/Product/Search/Product_Name_Search.php"> Product Search On Name </a></li>
				            <li class="divider"></li>
				            <li><a href="http://localhost/Employee_Product/Product/Print/Product_Print.php"> Product Print </a></li>
				          </ul>
				        </li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sales <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="http://localhost/Employee_Product/Sales/Sales_index.php">Sales Entry</a></li>
				            <li class="divider"></li>
				            <li><a href="http://localhost/Employee_Product/Sales/Stock/Stock.php">Product Stock</a></li>
				            <li class="divider"></li>
				            <li><a href="http://localhost/Employee_Product/Sales/Stock/Stock.php"> Profit & Loss </a></li>
				            <li class="divider"></li>
				            <li><a href="http://localhost/Employee_Product/Sales/Display/Sales_View.php"> Sales Details </a></li>
				            <li class="divider"></li>
				            <li><a href="http://localhost/Employee_Product/Sales/Search/Sales_Search.php"> Search Sales Record </a></li>
				            <li class="divider"></li>
				            <li><a href="http://localhost/Employee_Product/Sales/Search/Buyer_Search.php"> Buyer Search </a></li>
				          </ul>
				        </li>
				      </ul>
				      <ul class="nav navbar-nav navbar-right">
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="show"> Welcome  <?php echo $_SESSION['Username']; ?> <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="http://localhost/Employee_Product/Registration_SignIn/SignIn_Successful.php"> Main Entry </a></li>
				            <li><a href="http://localhost/Employee_Product/Registration_SignIn/Registration.php"> Registration </a></li>
				            <li><a href="http://localhost/Employee_Product/Registration_SignIn/SignIn.php" id="hide"> SignIn </a></li>
     				        <li class="divider"></li>
				            <li><a href="http://localhost/Employee_Product/Registration_SignIn/logout.php"> Logout </a></li>
				          </ul>
				        </li>
				      </ul>
				    </div>
				  </div>
				</nav>
     		 </div>
     	</div>
				<div class="row">
				   <div class="col-md-2"><?php echo "<a href='http://localhost/Employee_Product/Registration_SignIn/SignIn_Successful.php' class='btn btn-danger' role='button'><b>Main Entry</b></a>"; ?></div>
					   <div class="col-md-8">
							<h1 style="text-align: center;color:white;">Purchase Product Stock View Details:</h1>
					                   <table class="table table-hover table-bordered" style="font-weight: bold;font-family:sans-serif; ; text-align: center;">
			                                    <thead class="alert alert-warning" align="center">
											      <tr>
											        <th>Date</th>
											        <th>Product_Name</th>
											        <th>Available Stock (Purchase)</th>       
											      </tr>
												 </thead> 
											     <tfoot class="alert alert-warning">
										            <tr>
										                <th>Date</th>
										                <th>Product_Name</th>
										                <th>Available Stock (Purchase)</th>
										            </tr>
										         </tfoot>  
					                        <?php 					
					                        /*
					                         * SELECT product.Pro_Name, product.Pro_CS, sales.Pro_Pcs
                                                                                            FROM product
																							INNER JOIN sales
																							ON product.Pro_Name=sales.Pro_Name
					                         * */          
							                  $sql = mysql_query("SELECT Date,Pro_Name,Pro_CS FROM product");
											
											  $sum = 0;

	                                             while($row = mysql_fetch_assoc($sql))
												 {
													$Pro_Name = $row['Pro_Name'];
													$Product_Pieces = $row['Pro_CS'];
												 
											 ?>      
										         <tr align="center">
										          <td><?php echo $row['Date']?></td>
										          <td><?php echo $Pro_Name; ?></td>
										          <td><?php echo $Product_Pieces; ?></td>          
									         </tr>
									         <?php            
											 }
											 
											 mysql_close($con);
											 
										   ?>
						              </table>
						    <br> <br> <br>
						    <table  class="table table-hover table-bordered" style="font-weight: bold;">
							    <tr align="center">
							     <td> <a class="btn btn-info" href="http://localhost/Employee_Product/Sales/Sales_index.php"><b>Sales Entry</b></a> </td>
							     <td> <a class="btn btn-info" href="http://localhost/Employee_Product/Sales/Display/Sales_View.php"><b>Sales View</b></a> </td>
							     <td> <a class="btn btn-info" href="http://localhost/Employee_Product/Product/Product_index.php"><b>Product Purchase Entry</b></a> </td>
							    </tr>
							   </table>
					   </div>
				   <div class="col-md-2">
				   	 
				   </div>
				</div> 
			</div>	
			
			<script>
	  var showElem = document.getElementById("show");
	  var hideElem = document.getElementById("hide");
	
	  showElem.onclick = function() {
	     hideElem.style.visibility = 'hidden';
	  };
	
	  hideElem .onclick = function() {
	     showElem.style.visibility = 'true';
	  };
  </script>
  
    </body>
  </html>
