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
    <title>Agency View Details</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://bootswatch.com/darkly/bootstrap.min.css">
     <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
            <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script> 
  	
  </head>
  <body>
  <br><br><br>
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
		   <div class="col-md-12">
		   <br>
		   <?php /* echo "<div class='alert alert-success' role='alert' style='text-align:center;'>". 'Welcome'.'&nbsp;'.'&nbsp;'.'&nbsp;'.$_SESSION['Username']."</div>" */ ?>
		   <br>
		   <table class="table table-hover table-bordered" style="font-weight: bold;">
			    <thead style="background-color:red;">
			      <tr>
			        <th>Manu_Purchase_id</th>
			        <th width="2px">MA_Name</th>
			        <th>MA_Address</th>
			        <th width="2px">MA_PhoneNo</th>
			        <th width="2px">MA_TinNo</th>
			        <th>PA_Name</th>
			        <th width="2px">PA_Route_Name</th>
			        <th width="2px">PA_PhoneNo</th>
			        <th width="2px">PA_TinNo</th>
			        <th>Edit</th>
			        <th>Delete</th>
			      </tr>
				  </thead> 
			     <tfoot style="background-color:red;">
		            <tr>
		               <th>Manu_Purchase_id</th>
		               <th>MA_Name</th>
		               <th>MA_Address</th>
		               <th>MA_PhoneNo</th>
		               <th>MA_TinNo</th>
		               <th>PA_Name</th>
		               <th>PA_Route_Name</th>
		               <th>PA_PhoneNo</th>
		               <th>PA_TinNo</th>
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
							echo "<div class='alert alert-success' role='alert' style='text-align:center;font-weight:bold;color:black;'>Connection Successful</div>";
						}
							
						mysql_select_db($mysql_database,$con) or die("<div class='alert alert-success' role='alert'>Opps somthing went wrong.</div>");
								   
			            $sql = "SELECT * FROM manufacture_purchase";
			            $result = mysql_query($sql);
						while ($row = mysql_fetch_array($result)){
				  ?>	
						<tr class='success'>
		                    <td><?php echo $row['Manu_Purchase_id'] ?></td>
		                  	<td><?php echo $row['MA_Name'] ?></td>
		                  	<td><?php echo $row['MA_Address'] ?></td>
		                  	<td><?php echo $row['MA_PhoneNo'] ?></td>
		                  	<td><?php echo $row['MA_TinNo'] ?></td>
		                  	<td><?php echo $row['PA_Name'] ?></td>
		                  	<td><?php echo $row['PA_Route_Name'] ?></td>
		                  	<td><?php echo $row['PA_PhoneNo'] ?></td>
		                  	<td><?php echo $row['PA_TinNo'] ?></td>
		                  	<td><a class="btn btn-info" href="http://localhost/Employee_Product/Agency_Details/Update/Agency_Edit.php?Manu_Purchase_id=<?php echo $row['Manu_Purchase_id'] ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><!-- <b>Edit</b> --></a></td>
		                  	<td><a class="btn btn-danger" href="http://localhost/Employee_Product/Agency_Details/Delete/Agency_Delete.php?Manu_Purchase_id=<?php echo $row['Manu_Purchase_id'] ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span><!-- <b>Delete</b> --></a></td>
		                </tr> 
			           <?php 
			           }
			           mysql_close($con);
			         ?>
			   </table>
			   <br>
			   <table  class="table table-hover table-bordered" style="font-weight: bold;">
			    <tr align="center">
			     <td> <a class="btn btn-warning" href="http://localhost/Employee_Product/Agency_Details/Agency_index.php"><b>Insert New Agency Details</b></a> </td>
			     <td> <a class="btn btn-warning" href="http://localhost/Employee_Product/Agency_Details/Search_Agency/Search_Agency.php"><b>Search</b></a> </td>
			     <td> <a class="btn btn-warning" href="http://localhost/Employee_Product/Product/Product_index.php"><b>Insert New Product</b></a> </td>
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
