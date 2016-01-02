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
	            
		   /*  echo "<div class='alert alert-warning' role='alert' style='text-align:center;'>"."Welcome            ".$_SESSION['Username']."</div>";
		   */  echo "<br>";
	    
	    ?>
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
     	    <div class="col-md-3"><?php echo "<a href='http://localhost/Employee_Product/Registration_SignIn/SignIn_Successful.php' class='btn btn-danger' role='button'><b>Main Entry</b></a>"; ?></div>
     		<div class="col-md-6">
	          <form class="form-signin" role="form" method="post" action="http://localhost/Employee_Product/Product/Insert/insert.php">
	           <h2 class="form-signin-heading">Product Purchase Entry</h2>
			    <!-- <div class="form-group">
			      <label for="Pro_Sl_No">Product Serial No.:</label>
			      <input type="number"  class="form-control" name="Pro_Sl_No" placeholder="Enter Product Serial No." required="required">
			    </div> -->
			    <!-- <div class="form-group">
			      <label for="Date">Enter Date:</label>
			      <input type="date"  class="form-control" name="Date" placeholder="Enter Date" required="required">
			    </div>  -->
			    <div class="form-group">
			      <label for="Pro_Name">Product Name:</label>
			      <input type="text"  class="form-control" name="Pro_Name" placeholder="Enter Product Name" required="required">
			    </div>
			    <div class="form-group">
			      <label for="Pro_Price">Product Price(MRP):</label>
			      <input type="number"  class="form-control" name="Pro_Price" placeholder="Enter Product Price In MRP" min="0" step="0.01" required="required">
			    </div>
			    <div class="form-group">
			      <label for="Pro_CS">Product Pieces:</label>
			      <input type="number" class="form-control" name="Pro_CS" placeholder="Enter Product no. of pieces" step="0" required="required">
			    </div>
			   <!--  <div class="form-group">
			      <label for="Pro_EA">Product EA:</label>
			      <input type="number" class="form-control" name="Pro_EA" placeholder="Enter Products EA" step="0" required="required">
			    </div> -->
			    <div class="form-group">
			      <label for="Pro_S_Rate">Product Sales_Rate(MRP):</label>
			      <input type="number" class="form-control" name="Pro_S_Rate" placeholder="Enter Product Sales_Rate" min="0" step="0.01" required="required">
			    </div>
			    <div class="form-group">
			      <label for="Pro_Free">Free Product:</label>
			      <input type="number" class="form-control" name="Pro_Free" placeholder="Enter Product Free" step="0" required="required">
			    </div>
			   <!--  <div class="form-group">
			      <label for="Pro_Gr_Amount">Gross Amount:</label>
			      <input type="number" class="form-control" name="Pro_Gr_Amount" placeholder="Enter Product Gross Amount" min="0" step="0.01" required="required">
			    </div> -->
			    <div class="form-group">
			      <label for="Pro_Sch_Disc">Scheme_Disc(%):</label>
			      <input type="number" class="form-control" name="Pro_Sch_Disc" placeholder="Enter Product Scheme_Disc" min="0" step="0.01" required="required">
			    </div>
			    <div class="form-group">
			      <label for="Pro_CD_Disc">City_Dist_Disc(%):</label>
			      <input type="number" class="form-control" name="Pro_CD_Disc" placeholder="Enter Product City Distributor Discount" min="0" step="0.01" required="required">
			    </div>
			    <div class="form-group">
			      <label for="Pro_Tax">Tax(%):</label>
			      <input type="number" class="form-control" name="Pro_Tax" placeholder="Enter Product Tax In %" min="0" step="0.01" required="required">
			    </div>
			    <button type="submit" name="submit" class="btn btn-danger" style='text-align:right;font-weight:bold;'>Insert Product</button> 
			    <br>
			    <br>
			    
			  </form>
     		</div>
     		<div class="col-md-3"><?php echo "<a href='http://localhost/Employee_Product/Registration_SignIn/logout.php' class='btn btn-danger' role='button' style='text-align:right;font-weight:bold;'>Log Out</a>".'&nbsp;&nbsp;'."&nbsp;"."&nbsp;".'<a class="btn btn-danger" href="http://localhost/Employee_Product/Product/Display/Product_view.php" style="text-align:right;font-weight:bold;"><b>View Product <br> Purchase Details</b></a>';?></div>
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
     	
