<?php 
      
		session_start();

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
				   <div class="col-md-2">
                   <?php  echo "<div class='alert alert-success' role='alert' style='text-align:center;'>"."Welcome            ".$_SESSION['Username']."</div>"."<br>";  ?>
				   </div>		
				   <div class="col-md-8">
							<!-- <form class="form-search" method="post" action="search.php">
								    <input type="text" name="search" class="form-control" />
								    <button type="submit" name="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Search</button>
							</form>
							<br> -->
							<h2 style="color: red;">Product Search</h2>
							<br>
							<br>
							<form class="form-search" method="post" action="Buyer_Search.php">
								<div class="input-group">
									  <input type="text" name="search" placeholder="Enter Buyer Name" class="form-control">
									  <span class="input-group-btn">
									    <button class="btn btn-info" type="submit" name="submit"><span class="glyphicon glyphicon-search"></span>Search</button>
									  </span>
	                             </div>
                             </form>	  
							<br>
							<table class="table table-hover table-bordered" style="font-weight: bold;text-align: center;">
							    <thead style="background-color:#696969;text-align: center;">
							      <tr>
							        <th style="text-align: center;">Date</th>
							        <th style="text-align: center;">Buyer_Name</th>
							        <th style="text-align: center;">Pro_Name</th>
							        <th style="text-align: center;">Pro_Net_Amt</th>
							      </tr>
							    </thead> 
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
									echo "<div class='alert alert-success' role='alert' style='text-align:center;'>Connection Successful</div>";
								}
								
						     	 mysql_select_db($mysql_database,$bd) or die("<div class='alert alert-success' role='alert'>Opps somthing went wrong.</div>");
								
								 $output = null;
								
								if(isset($_POST['search'])){
									
									$search = mysql_real_escape_string($_POST['search']);	 
									 
								    $sql = "SELECT * FROM sales WHERE Buyer_Name LIKE '$search'";
								 
								 	$result = mysql_query($sql);
								 	
								 	/* if($result){
									   echo "<br>"."TRUE";
                                     }else {
 								   	  echo "FALSE";
                                     }  */
								 	
								 	$count = mysql_num_rows($result);
								 	
								 	/* echo $count; */
								 	
								 	if($count == 0){
										$output = "<div class='alert alert-danger' role='alert'>No Rerecords Are Present.</div>";
                                        echo $output;
								 	 ?>
								 		
								 		<?php	
								 		}
								 	else 
								    {
								 		while ($row = mysql_fetch_assoc($result)){
											$pro_date = $row['Sales_Date'];
											$buyer_Name = $row['Buyer_Name'];
								 			$pro_name = $row['Pro_Name'];
								 			$pro_net_Amt = $row['Bill_Amt'];
								 			?>
								 			<tr class='success'>
								 			  <td><?php  echo $pro_date  ?></td>
								 			  <td><?php  echo $buyer_Name ?></td>
								 			  <td><?php  echo $pro_name ?></td>
								 			  <td><?php  echo $pro_net_Amt ?></td>
								 			</tr>
								 <?php 
									}
								}
							}	
                            ?>
                            
                         </table>
						<br>
						<br>
						<a class="btn btn-info" href="http://localhost/Employee_Product/Sales/Sales_index.php"><b>Insert New Record</b></a>
						<br>
						<br>
						<a class="btn btn-info" href="http://localhost/Employee_Product/Sales/Display/Sales_View.php"><b>View</b></a>
					 </div>
					<div class="col-md-2"><?php echo "<a href='http://localhost/Employee_Product/Registration_SignIn/logout.php' class='btn btn-info' role='button' style='text-align:right;'>Log Out</a>";?></div>		
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
