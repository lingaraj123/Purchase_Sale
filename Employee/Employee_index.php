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
   <?php 
/*         echo "<div class='alert alert-warning' role='alert' style='text-align:center;'>"."Welcome            ".$_SESSION['Username']."</div>";
 */   ?>
   
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
     	    <div class="col-md-3">
     	     <?php 
     		     echo "<a href='http://localhost/Employee_Product/Registration_SignIn/SignIn_Successful.php' class='btn btn-danger' role='button'><b>Main Entry</b></a>".'&nbsp;'."<a class='btn btn-danger' href='http://localhost/Employee_Product/Sales/Display/Sales_View.php'><b>Sales View</b></a>"
     		  ?>
     	    </div>
     		<div class="col-md-6">
	          <form class="form-signin" role="form" method="post" action="http://localhost/Employee_Product/Employee/Insert/insert.php">
	           <h2 class="form-signin-heading">Employee Registration</h2>
			    <!-- <div class="form-group">
			      <label for="Emp_ID">Employee ID:</label>
			      <input type="text"  class="form-control" name="Emp_ID" placeholder="Enter Employee ID" required="required">
			    </div> -->
			    <div class="form-group">
			      <label for="Emp_FirstName">Employee FirstName:</label>
			      <input type="text"  class="form-control" name="Emp_FirstName" placeholder="Enter Employee FirstName" required="required">
			    </div>
			    <div class="form-group">
			      <label for="Emp_LastName">Employee LastName:</label>
			      <input type="text"  class="form-control" name="Emp_LastName" placeholder="Enter Employee LastName" required="required">
			    </div>
			    <div class="form-group">
			      <label for="Emp_Mobile_No">Employee Mobile No.:</label>
			      <input type="number" class="form-control" name="Emp_Mobile_No" placeholder="Enter Employee Mobile No." required="required">
			    </div>
			    <div class="form-group">
			      <label for="Emp_Designation">Employee Designation:</label>
			      <input type="text" class="form-control" name="Emp_Designation" placeholder="Enter Employee Designation" required="required">
			    </div>
			    <div class="form-group">
			      <label for="Emp_Salary">Employee Salary:</label>
			      <input type="number" class="form-control" name="Emp_Salary" placeholder="Enter Employee Salary" required="required">
			    </div>
			    <div class="form-group">
			      <label for="Emp_Address">Employee Address:</label>
			      <input type="text" class="form-control" name="Emp_Address" placeholder="Enter Employee Address" required="required">
			    </div>
			    <button type="submit" name="submit" class="btn btn-danger" style="font-weight:bold;">Submit</button>
			    <br>
			    <br>
			  </form>
     		</div>
     		<div class="col-md-3">
     		  <?php 
     		     echo "<a href='http://localhost/Employee_Product/Registration_SignIn/logout.php' class='btn btn-danger' role='button'><b>Log Out</b></a>".'&nbsp;&nbsp;'."<a class='btn btn-danger' href='http://localhost/Employee_Product/Product/Display/Product_View.php'><b>View Product <br> Purchase Details</b></a>"
     		  ?>
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
     	
