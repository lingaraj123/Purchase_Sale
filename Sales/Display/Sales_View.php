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
  <br><br>
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
     		 </div>
     	</div>
		  <div class="row">
		   <div class="col-md-12">
		   <br>
		   <?php /* echo "<div class='alert alert-success' role='alert' style='text-align:center;'>". 'Welcome'.'&nbsp;'.'&nbsp;'.'&nbsp;'.$_SESSION['Username']."</div>" */ ?>
		   <br>
		   <h1 style="text-align: center;color:white;">Sales View</h1>
		   <table class="table table-hover table-bordered" style="font-weight: bold;">
			    <thead class="alert alert-warning">
			      <tr>
			        <th>Sales_Date</th>
			        <th>Buyer_Name</th>
			        <th>Pro_Name</th>
			        <th>Product<br>_Pcs</th>
			        <th>Unique<br>_Product<br>_Sales_Rs</th>
			        <th>Sales_Price</th>
			        <th>Sales_Profit</th>
			        <th>Act_S_Price</th>
			        <th>Discount</th>
			        <th>Rate_Aft_Disc</th>
			        <th>Vat</th>
			        <th>V_Aft_Vat</th>
			        <th>Bill_Amt</th>
			        <th>Edit</th>
			        <th>Delete</th>
			      </tr>
				  </thead> 
			     <tfoot class="alert alert-warning">
		            <tr align="center">
		                <th>Sales_Date</th>
		                <th>Buyer_Name</th>
				        <th>Pro_Name</th>
				        <th>Product<br>_Pcs</th>
				        <th>Unique<br>_Product<br>_Sales_Rs</th>
				        <th>Sales_Price</th>
				        <th>Sales_Profit</th>
				        <th>Act_S_Price</th>
				        <th>Discount</th>
				        <th>Rate_Aft_Disc</th>
				        <th>Vat</th>
				        <th>V_Aft_Vat</th>
				        <th>Bill_Amt</th>
				        <th>Edit</th>
				        <th>Delete</th>
		            </tr>
		         </tfoot>
			     <?php
			            $mysql_hostname = "localhost";
						$mysql_user = "root";
						$mysql_password = "";
						$mysql_database = "employee_product";
							
						$con = mysql_connect($mysql_hostname,$mysql_user,$mysql_password);
							
						if(!$con){
							echo  die("OPPS something went wrong.");
						}
						else {
							echo "<div class='alert alert-success' role='alert' style='text-align:center;font-weight:bold;color:white;'>Connection Successful</div>";
						}
							
						$db = mysql_select_db($mysql_database,$con) or die("<div class='alert alert-success' role='alert'>Opps somthing went wrong.</div>");
								   
			            $sql = "SELECT * FROM sales";
			            $result = mysql_query($sql);
						while ($row = mysql_fetch_array($result)){
						?>	
						<tr class='default' style="background-color:#696969;" align="center">
		                    <td><?php echo $row['Sales_Date'] ?></td>
		                    <th><?php echo $row['Buyer_Name']?></th>
		                  	<td><?php echo $row['Pro_Name'] ?></td>
		                  	<td><?php echo $row['Pro_Pcs'] ?></td>
		                  	<td><?php echo $row['Unique_Prod_S_Price'] ?></td>
		                  	<td><?php echo $row['Sales_Price'] ?></td>
		                  	<td><?php echo $row['Sales_Profit'] ?></td>
		                  	<td><?php echo $row['Act_S_Price'] ?></td>
		                  	<td><?php echo $row['Discount'] ?></td>
		                  	<td><?php echo $row['Rate_Aft_Disc'] ?></td>
		                  	<td><?php echo $row['Vat'] ?></td>
		                  	<td><?php echo $row['V_Aft_Vat'] ?></td>
		                  	<td><?php echo $row['Bill_Amt'] ?></td>
		                  	<td><a class="btn btn-info" href="http://localhost/Employee_Product/Sales/Update/Sales_Edit.php?Sales_ID=<?php echo $row['Sales_ID'] ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><!-- <b>Edit</b> --></a></td>
		                  	<td><a class="btn btn-danger" href="http://localhost/Employee_Product/Sales/Are-You-Sure-Sales/Sure.php?Sales_ID=<?php echo $row['Sales_ID'] ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span><!-- <b>Delete</b> --></a></td>
		                </tr> 
			           <?php 
			           }
			           mysql_close($con);
			         ?>
			   </table>
			   <br>
			   <table  class="table table-hover table-bordered" style="font-weight: bold;">
			    <tr align="center">
			     <td> <a class="btn btn-info" href="http://localhost/Employee_Product/Sales/Sales_index.php"><b>Insert Another Sales</b></a> </td>
			     <td> <a class="btn btn-info" href="http://localhost/Employee_Product/Sales/Display/Sales_View.php"><b>Sales View</b></a> </td>
			     <td> <a class="btn btn-info" href="http://localhost/Employee_Product/Product/Product_index.php"><b>Insert New Purchase Product</b></a> </td>
			     <td> <a class="btn btn-info" href="http://localhost/Employee_Product/Sales/Stock/Stock.php"><b>Purchase Product Stock</b></a> </td>
			     <td> <a class="btn btn-info" href="http://localhost/Employee_Product/Registration_SignIn/SignIn_Successful.php"><b>Main Entry</b></a> </td>
			    </tr>
			   </table>
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
