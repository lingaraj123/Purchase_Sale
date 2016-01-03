
<?php session_start(); ?>

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
				
     		    <br><br>
     		 </div>
     	</div>
       <div class="row">
         <div class="col-md-3"></div>
            <div class="col-md-6" align="justify">
				   <?php
						/* include '/Config/config.php'; */
				
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
						mysql_select_db($mysql_database,$con) or die("<div class='alert alert-success' role='alert'>Opps Somthing went wrong.</div>");
				
						if(isset($_POST['submit'])){
							$MA_Name = $_POST['MA_Name'];
							$MA_Address = $_POST['MA_Address'];
							$MA_PhoneNo = $_POST['MA_PhoneNo'];
							$MA_TinNo = $_POST['MA_TinNo'];
							$PA_Name = $_POST['PA_Name'];
							$PA_Route_Name = $_POST['PA_Route_Name'];
							$PA_PhoneNo = $_POST['PA_PhoneNo'];
							$PA_TinNo = $_POST['PA_TinNo'];
						}
						
						$MA_Name = stripslashes($MA_Name);
						$MA_Address = stripslashes($MA_Address);
						$MA_PhoneNo = stripslashes($MA_PhoneNo);
						$MA_TinNo = stripslashes($MA_TinNo);
						$PA_Name = stripslashes($PA_Name);
						$PA_Route_Name = stripslashes($PA_Route_Name);
						$PA_PhoneNo = stripslashes($PA_PhoneNo);
						$PA_TinNo = stripslashes($PA_TinNo);
						
						$MA_Name = mysql_real_escape_string($MA_Name);
						$MA_Address = mysql_real_escape_string($MA_Address);
						$MA_PhoneNo = mysql_real_escape_string($MA_PhoneNo);
						$MA_TinNo = mysql_real_escape_string($MA_TinNo);
						$PA_Name = mysql_real_escape_string($PA_Name);
						$PA_Route_Name = mysql_real_escape_string($PA_Route_Name);
						$PA_PhoneNo = mysql_real_escape_string($PA_PhoneNo);
						$PA_TinNo = mysql_real_escape_string($PA_TinNo);
						
						
						echo "Manufacture Agency Name:  "."<b style='color:red'>".$MA_Name."</b>"."<br>".
						     "Manufacture Agency Address:  "."<b style='color:red'>".$MA_Address."</b>"."<br>".
						     "Manufacture Agency Phone No.:  "."<b style='color:red'>".$MA_PhoneNo."</b>"."<br>".
						     "Manufacture Agency Tin No.:  "."<b style='color:red'>".$MA_TinNo."</b>"."<br>".
						     "Purchase Agency Name:  "."<b style='color:red'>".$PA_Name."</b>"."<br>".
						     "Purchase Agency Route Name:  "."<b style='color:red'>".$PA_Route_Name."</b>"."<br>".
						     "Purchase Agency Phone No.:  "."<b style='color:red'>".$PA_PhoneNo."</b>"."<br>".
						     "Purchase Agency Tin No.(Retailer):  "."<b style='color:red'>".$PA_TinNo."</b>"."<br>";
						     
						
						$sql = "INSERT INTO manufacture_purchase (MA_Name,MA_Address,MA_PhoneNo,MA_TinNo,PA_Name,PA_Route_Name,PA_PhoneNo,PA_TinNo) VALUES('$MA_Name','$MA_Address','$MA_PhoneNo','$MA_TinNo','$PA_Name','$PA_Route_Name','$PA_PhoneNo','$PA_TinNo')";
						
						if(mysql_query($sql)){
							echo  "<h1 style='color:green;'>Data Inserted Successful</h1>";
						}	
						
						mysql_close($con);
						
				   ?>
				 
				 <br>
				 <br>
				 <a class="btn btn-info" href="http://localhost/Employee_Product/Agency_Details/Display/Agency_view.php"><b>View</b></a> 
         </div>
         <div class="col-md-3"></div>
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
