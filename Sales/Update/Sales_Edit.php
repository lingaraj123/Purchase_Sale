
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
		 
		$db = mysql_select_db($mysql_database,$bd) or die("<div class='alert alert-success' role='alert'>Opps somthing went wrong.</div>");
		
		if(isset($_GET['Sales_ID'])){
			$pro_sl_id = $_GET['Sales_ID'];
		}
		
		$sql = mysql_query("SELECT Pro_Name , Pro_Pcs , Sales_Profit , Discount , Vat FROM sales WHERE Sales_ID = '$pro_sl_id'");
		
		if($row = mysql_fetch_array($sql)){
			$Pro_Name = $row['Pro_Name'];
			$Pro_Pcs = $row['Pro_Pcs'];
			$Sales_Profit = $row['Sales_Profit'];
			$Discount = $row['Discount'];
		    $Vat = $row['Vat'];
		}
		
		$sql = mysql_query("SELECT Pro_Sl_No FROM product WHERE Pro_Name = '$Pro_Name'");
		
		if($row = mysql_fetch_array($sql))
		{
			 $Pro_Sl_No = $row['Pro_Sl_No'];
			 
		}
		
		if(isset($Pro_Sl_No) == NULL AND  empty($Pro_Sl_No))
		{
			header("location: http://localhost/Employee_Product/Sales/Available/Product-Unavailable.php");
			/* echo "<script>alert('Product is not available.')</script>"; */	
		}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sales</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://bootswatch.com/darkly/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script> 
    
  </head>
  <body>
    <br>
	    <?php 
	            
		   /*  echo "<div class='alert alert-success' role='alert' style='text-align:center;'>"."Welcome            ".$_SESSION['Username']."</div>";
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
     	    <div class="col-md-3"></div>
     		<div class="col-md-6">
	          <form class="form-signin" role="form" method="post" action="http://localhost/Employee_Product/Sales/Update/Sales_Update.php?Sales_ID=<?php echo $pro_sl_id; ?>&Pro_Sl_No=<?php echo $Pro_Sl_No;?>">
	           <h2 class="form-signin-heading">Product Sales Entry</h2>
	           
			    <div class="form-group">
			     <label for="Pro_Name">Product Name:</label>
			     <input type="text" class="form-control" name="Pro_Name" value="<?php echo $Pro_Name; ?>" placeholder="Enter Product Name" required="required">
			    </div>
			    <div class="form-group">
			      <label for="Pro_Pcs"> No. Of Pieces:</label>
			      <input type="number" class="form-control" name="Pro_Pcs" value="<?php echo $Pro_Pcs; ?>" placeholder="Enter Product in no. of pieces" step="0" required="required">
			    </div>
			    <div class="form-group">
			      <label for="Pro_Pcs_1">Add Extra No. Of Pieces: (If No Set To Zero)</label>
			      <input type="number" class="form-control" name="Pro_Pcs_1" value="0" placeholder="Enter Product in no. of pieces" step="0" required="required">
			    </div>
			    <div class="form-group">
			      <label for="Pro_Pcs_2">Remove No. Of Pieces: (If No Set To Zero)</label>
			      <input type="number" class="form-control" name="Pro_Pcs_2" value="0" placeholder="Enter Product in no. of pieces" step="0" required="required">
			    </div>
			    <div class="form-group">
			      <label for="Pro_S_Profit">Product Sales Profit(%):</label>
			      <input type="number" class="form-control" name="Pro_S_Profit" value="<?php echo $Sales_Profit; ?>"  placeholder="Enter Product Sales Profit in %" min="0" step="0.01" required="required">
			    </div>
			    <div class="form-group">
			      <label for="Discount">Product Sales Disc(%):</label>
			      <input type="number" class="form-control" name="Discount" value="<?php echo $Discount; ?>" placeholder="Enter Product Sales Discount" min="0" step="0.01" required="required">
			    </div>
			    <div class="form-group">
			      <label for="Vat">Vat(%):</label>
			      <input type="number" class="form-control" name="Vat" value="<?php echo $Vat; ?>" placeholder="Enter Product Sales Tax In %" min="0" step="0.01" required="required">
			    </div>
			    <button type="submit" name="submit" class="btn btn-danger" style='text-align:right;color:black;font-weight:bold;'>Update Sales</button> 
			    <br>
			    <br>
			    
			  </form>
     		</div>
     		<div class="col-md-3"><?php echo "<a href='http://localhost/Employee_Product/Registration_SignIn/logout.php' class='btn btn-warning' role='button' style='text-align:right;color:black;font-weight:bold;'>Log Out</a>".'&nbsp;&nbsp;'."&nbsp;"."&nbsp;".'<a class="btn btn-warning" href="http://localhost/Employee_Product/Sales/Display/Sales_View.php" style="text-align:right;color:black;font-weight:bold;"><b>View</b></a>';?></div>
     	</div>
   </div>
   
   <?php mysql_close($bd); ?>
   
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
     	
