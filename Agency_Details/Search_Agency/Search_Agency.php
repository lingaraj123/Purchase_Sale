<?php
								
  session_start();

/*   echo "<div class='alert alert-success' role='alert' style='text-align:center;'>". 'Welcome'.'&nbsp;'.'&nbsp;'.'&nbsp;'.$_SESSION['Username']."</div>";
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
								
						     	 mysql_select_db($mysql_database,$con) or die("<div class='alert alert-success' role='alert'>Opps somthing went wrong.</div>");
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
		      <div class="container-fluid">
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
				
     		    <br><br>
     		 </div>
     	</div>
				<div class="row">
				   <div class="col-md-2"></div>		
				   <div class="col-md-8">
							<!-- <form class="form-search" method="post" action="search.php">
								    <input type="text" name="search" class="form-control" />
								    <button type="submit" name="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Search</button>
							</form>
							<br> -->
							<h2 style="color: red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agency Search</h2>
							<br>
							<br>
							<form class="form-search" method="post" action="Search_Agency.php">
								<div class="input-group">
									  <input type="text" name="search" placeholder="Search Agency" class="form-control">
									  <span class="input-group-btn">
									    <button class="btn btn-info" type="submit" name="submit"><span class="glyphicon glyphicon-search"></span> Search</button>
									  </span>
	                             </div>
                             </form>	  
							<br>
						   
							<?php 
								
							    $output = null;
								
								if(isset($_POST['search'])){
									
									$search = mysql_real_escape_string($_POST['search']);
									
									//$search = preg_replace("#[^0-9a-z]i#", "", $search);
								
								    $sql = "SELECT * FROM manufacture_purchase WHERE MA_Name LIKE '%$search%'";
								
								 	$row = mysql_query($sql);
								 	
								 	echo '<table class="table table-hover table-bordered" style="font-weight: bold;">
										    <thead style="background-color:red;">
										      <tr>
										        <th width="2px">MA_Name</th>
										        <th>MA_Address</th>
										        <th width="2px">MA_PhoneNo</th>
										        <th width="2px">MA_TinNo</th>
										        <th>PA_Name</th>
										        <th width="2px">PA_Route_Name</th>
										        <th width="2px">PA_PhoneNo</th>
										        <th width="2px">PA_TinNo</th>
										      </tr>
											  </thead> 
										     ';
								 	
								 	if($row){   
										while ($row1 = mysql_fetch_assoc($row)){
											$MA_Name =  $row1['MA_Name'];
											$MA_Address = $row1['MA_Address'];
											$MA_PhoneNo = $row1['MA_PhoneNo'];
											$MA_TinNo = $row1['MA_TinNo'];
											$PA_Name = $row1['PA_Name'];
											$PA_Route_Name = $row1['PA_Route_Name'];
											$PA_PhoneNo = $row1['PA_PhoneNo'];
											$PA_TinNo = $row1['PA_TinNo'];
												
											/* echo $output = "<h2>".$emp_id."&nbsp;&nbsp;&nbsp;&nbsp;".$emp_lastname."</h2>"; */
											/* echo $output = "<div class='alert alert-warning' role='alert' style='color:black;font-weight:bold;'>".$Manu_Purchase_id.'&nbsp;&nbsp;'
													.$MA_Name.'&nbsp;&nbsp'
															.$MA_Address.'&nbsp;&nbsp;'
																	.$MA_PhoneNo.'&nbsp;&nbsp;'
																			.$PA_Name.'&nbsp;&nbsp;'.
																			$PA_Route_Name.'&nbsp;&nbsp;'
																					.$PA_PhoneNo.'&nbsp;&nbsp;'.$PA_TinNo."</div>"; */
                                                   

													echo '<td>'.$MA_Name.'</td>';
													echo '<td>'.$MA_Address.'</td>';
													echo '<td>'.$MA_PhoneNo.'</td>';
													echo '<td>'.$MA_TinNo.'</td>';
													echo '<td>'.$PA_Name.'</td>';
													echo '<td>'.$PA_Route_Name.'</td>';
													echo '<td>'.$PA_PhoneNo.'</td>';
													echo '<td>'.$PA_TinNo.'</td>';
													echo '</table>';
											 }
										
								 		
								 	}
								 	else 
                                    {
								 		$output = "<div class='alert alert-danger' role='alert'>No Rerecords Are Present.</div>";
                                        echo $output;
								 	}
								}
								
								mysql_close($con);
                       ?>
							
							<table class="table table-hover table-bordered" style="font-weight: bold;">
							 <tr align="center">
							  <td><a class="btn btn-warning" href="http://localhost/Employee_Product/Employee/index.php"><b>Insert New Record</b></a></td><td><a class="btn btn-warning" href="http://localhost/Employee_Product/Agency_Details/Display/Agency_view.php"><b>View</b></a></td>
							 </tr>
							</table>	
					</div>
					<div class="col-md-2"></div>		
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
