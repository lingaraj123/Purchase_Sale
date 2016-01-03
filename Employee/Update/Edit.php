        <?php 
				session_start();		
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
		        
        
			    $emp_id = $_GET['Emp_ID'];
                $sql = mysql_query("SELECT * FROM employee WHERE Emp_ID = '$emp_id'");
                 
                if($result = mysql_fetch_assoc($sql)){
                	$emp_id = $result['Emp_ID'];
                	$emp_firstname = $result['Emp_FirstName'];
                	$emp_lastname = $result['Emp_LastName'];
                	$emp_mobileno = $result['Emp_Mobile_No'];
                	$emp_designation = $result['Emp_Designation'];
                	$emp_salary = $result['Emp_Salary'];
                	$emp_address = $result['Emp_Address'];
                }
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
		       <div class="col-md-6">
		         <form role="form" method="post" action="http://localhost/Employee_Product/Employee/Update/Update.php">
		          	<input type="hidden" name="Emp_ID" value="<?php echo $emp_id ?>">
		         	<div class="form-group">
				      <label for="Emp_FirstName">Employee FirstName:</label>
				      <input type="text"  class="form-control" name="Emp_FirstName" value="<?php echo $emp_firstname ?>" placeholder="Enter FirstName">
				    </div>
				    <div class="form-group">
				      <label for="Emp_LastName">Employee LastName:</label>
				      <input type="text"  class="form-control" name="Emp_LastName" value="<?php echo $emp_lastname ?>" placeholder="Enter FirstName">
				    </div>
				    <div class="form-group">
				      <label for="Emp_Mobile_No">Employee Mobile No.:</label>
				      <input type="number"  class="form-control" name="Emp_Mobile_No" value="<?php echo $emp_mobileno ?>" placeholder="Enter FirstName">
				    </div>
				    <div class="form-group">
				      <label for="Emp_Designation">Employee Designation:</label>
				      <input type="text"  class="form-control" name="Emp_Designation" value="<?php echo $emp_designation ?>" placeholder="Enter FirstName">
				    </div>
				    <div class="form-group">
				      <label for="Emp_Salary">Employee Salary:</label>
				      <input type="number"  class="form-control" name="Emp_Salary" value="<?php echo $emp_salary ?>" placeholder="Enter FirstName">
				    </div>
				    <div class="form-group">
				      <label for="Emp_Address">Employee Address:</label>
				      <input type="text"  class="form-control" name="Emp_Address" value="<?php echo $emp_address ?>" placeholder="Enter FirstName">
				    </div>
				    <button type="submit" name="update" class="btn btn-danger">Update</button>
		         </form>
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
        
        
        
        
        
        
        
       


