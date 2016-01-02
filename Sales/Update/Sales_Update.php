<?php 
 
 session_start();
 
 /* echo "<div class='alert alert-success' role='alert' style='text-align:center;'>"."Welcome            ".$_SESSION['Username']."</div>";
 */ echo "<br>";
  

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
				   <div class="col-md-2"></div>
				   <div class="col-md-8">
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
						
							
				            if(isset($_POST['submit']) || isset($_GET['Sales_ID']) || isset($_GET['Pro_Sl_No'])){
				            	echo "Sales ID: ".$sales_id = mysql_real_escape_string($_GET['Sales_ID'])."<br>";
								echo "Product Name: ". $pro_name = mysql_real_escape_string($_POST['Pro_Name'])."<br>";
								echo "Product Serial Id:  ".$Pro_Sl_No = mysql_real_escape_string($_GET['Pro_Sl_No'])."<br>";
								$sales_prod_pcs = $_POST['Pro_Pcs']."<br>";
								$add_Pro_Pcs_1 = $_POST['Pro_Pcs_1']."<br>";
								$remove_Pro_Pcs_1 = $_POST['Pro_Pcs_2']."<br>";
								$sales_prod_profit = $_POST['Pro_S_Profit']."<br>";
								$sales_prod_disc = $_POST['Discount']."<br>";
								$sales_prod_vat = $_POST['Vat']."<br>";							
					        
				            }
				          
					        
					        if($add_Pro_Pcs_1>0)
					        {	
					        	echo "<span style='color:red;'>New Sales Product Pieces: </span>".$new_sales_pro_pcs = $sales_prod_pcs + $add_Pro_Pcs_1;
					        	
					        	$sql = mysql_query("SELECT * FROM sales WHERE Sales_ID = '$sales_id'");
					        	
						        	if($row = mysql_fetch_array($sql))
						        	{
						        		$Unique_Prod_S_Price = $row['Unique_Prod_S_Price'];
						        		
						        		$Sales_Price = $Unique_Prod_S_Price * $new_sales_pro_pcs;
						        		
						        		$Act_S_Price = $Sales_Price + ($Sales_Price * $sales_prod_profit/100);
						        		
						        		$Rate_Aft_Disc = $Act_S_Price - ($Act_S_Price * $sales_prod_disc/100);
						        		
						        		$Value_Aft_Vat = $Rate_Aft_Disc * ($sales_prod_vat/100);
						        		
						        		$Bill_Amt = $Rate_Aft_Disc + $Value_Aft_Vat;
						        		
						        		$sql2 = "UPDATE sales SET Pro_Pcs = '$new_sales_pro_pcs',
						        		                          Sales_Price = '$Sales_Price',
						        								  Act_S_Price = '$Act_S_Price',Rate_Aft_Disc = '$Rate_Aft_Disc'
						        		                          ,V_Aft_Vat = '$Value_Aft_Vat',Bill_Amt = '$Bill_Amt' WHERE Sales_ID = '$sales_id'";
						        		if(mysql_query($sql2)){
						        			echo  "<h3 style='color:green;'>Sales Table Update Successful</h3>";
						        		}
						        		else
						        		{
						        			echo "<br>"."Sales Table Updation Unsuccessful";
						        		}
						        			
						        	 }  
					         } 

					       
					         if($add_Pro_Pcs_1>0)
					         { 
					           $sql = "SELECT * FROM product WHERE Pro_Sl_No = '$Pro_Sl_No'";
					         
					           $result = mysql_query($sql) or die(mysql_errno());
					         
					           while($row = mysql_fetch_array($result))
					           {
					         	echo "<span style='color:red;'>Current Product Pieces: </span>".$Pro_CS = $row['Pro_CS']."<br>";
					         	
					         	echo "<span style='color:red;'>Update Product Pieces: </span>".$NEW_Pro_CS = $Pro_CS - $add_Pro_Pcs_1."<br>";
					         	
					         	echo "<span style='color:red;'>Product Sales Rate: </span>".$Pro_S_Rate = $row['Pro_S_Rate']."<br>";
					         	
					         	$Pro_Gr_Amount = $Pro_S_Rate * $NEW_Pro_CS;
					         	
					         	echo "<span style='color:red;'>Product Scheme Discount: </span>".$Pro_Sch_Disc = $row['Pro_Sch_Disc']."<br>";
					         	
					         	echo "<span style='color:red;'>Product City Distributor Discount: </span>".$Pro_CD_Disc = $row['Pro_CD_Disc']."<br>";
					         	
					         	$Total_Disc = $Pro_Gr_Amount * (($Pro_Sch_Disc/100) + ($Pro_CD_Disc/100));
					         	
					         	$Pro_Tax = $row['Pro_Tax'];
					         	
					         	$Pro_Tax_Amount = ($Pro_Gr_Amount - $Total_Disc) * $Pro_Tax/100;
					         	
					         	$Pro_Net_Amount = ($Pro_Gr_Amount + $Pro_Tax_Amount) - $Total_Disc;
					         	
					         	$sql4 = "UPDATE product SET Pro_CS='$NEW_Pro_CS',Pro_Gr_Amount='$Pro_Gr_Amount',Total_Disc='$Total_Disc',Pro_Tax_Amount='$Pro_Tax_Amount',
					         	Pro_Net_Amount='$Pro_Net_Amount' WHERE Pro_Sl_No='$Pro_Sl_No'";
					         	
					         	$result2 = mysql_query($sql4);
					         	
					         	if($result2 == 1)
					         	{
					         		echo  "<h3 style='color:green;'>Product Table Update Successful</h3>";
					         	}
					         	else
					         	{
					         		echo "<br>"."Product Table Updation Unsuccessful";
					         	}
					         	
					         }

					       }
					       

					        if($remove_Pro_Pcs_1>0)
					        {
					        	echo "<span style='color:red;'>No of Product Removed For Sales: </span>".$remove_Pro_Pcs_1;
					        	
					        	echo "<span style='color:red;'>Remove Sales Product Pieces: </span>".$rev_sales_pro_pcs = $sales_prod_pcs - $remove_Pro_Pcs_1;
					        	
					        	$sql = mysql_query("SELECT * FROM sales WHERE Sales_ID = '$sales_id'");
					        	
					        	if($row = mysql_fetch_array($sql))
					        	{
					        		$Unique_Prod_S_Price = $row['Unique_Prod_S_Price'];
					        	
					        		$Sales_Price = $Unique_Prod_S_Price * $rev_sales_pro_pcs;
					        	
					        		$Act_S_Price = $Sales_Price + ($Sales_Price * $sales_prod_profit/100);
					        	
					        		$Rate_Aft_Disc = $Act_S_Price - ($Act_S_Price * $sales_prod_disc/100);
					        	
					        		$Value_Aft_Vat = $Rate_Aft_Disc * ($sales_prod_vat/100);
					        	
					        		$Bill_Amt = $Rate_Aft_Disc + $Value_Aft_Vat;
					        	
					        		$sql2 = "UPDATE sales SET Pro_Pcs = '$rev_sales_pro_pcs',
			        	                                  	  Sales_Price = '$Sales_Price',
					        		                          Act_S_Price = '$Act_S_Price',
					        		                          Rate_Aft_Disc = '$Rate_Aft_Disc',
					        		                          V_Aft_Vat = '$Value_Aft_Vat',
					        		                          Bill_Amt = '$Bill_Amt' WHERE Sales_ID = '$sales_id'";
					        		
					        		if(mysql_query($sql2)){
					        			echo  "<h3 style='color:green;'>Sales Table Update Successful</h3>";
					        		}
					        		else
					        		{
					        			echo "<br>"."Sales Table Updation Unsuccessful";
					        		}
					        		 
					        	}
					        	
					        }
					        
					      if($remove_Pro_Pcs_1>0)
                          {
					        $sql = "SELECT * FROM product WHERE Pro_Sl_No = '$Pro_Sl_No'";
					        
					        $result = mysql_query($sql) or die(mysql_errno());
					        
					        while($row = mysql_fetch_array($result))
					        {
					        	echo "<span style='color:red;'>Current Product Pieces: </span>".$Pro_CS = $row['Pro_CS']."<br>";
					        	 
					        	echo "<span style='color:red;'>Update Product Pieces: </span>".$NEW_Pro_CS = $Pro_CS + $remove_Pro_Pcs_1."<br>";
					        	 
					        	echo "<span style='color:red;'>Product Sales Rate: </span>".$Pro_S_Rate = $row['Pro_S_Rate']."<br>";
					        	 
					        	$Pro_Gr_Amount = $Pro_S_Rate * $NEW_Pro_CS;
					        	 
					        	echo "<span style='color:red;'>Product Scheme Discount: </span>".$Pro_Sch_Disc = $row['Pro_Sch_Disc']."<br>";
					        	 
					        	echo "<span style='color:red;'>Product City Distributor Discount: </span>".$Pro_CD_Disc = $row['Pro_CD_Disc']."<br>";
					        	 
					        	$Total_Disc = $Pro_Gr_Amount * (($Pro_Sch_Disc/100) + ($Pro_CD_Disc/100));
					        	 
					        	$Pro_Tax = $row['Pro_Tax'];
					        	 
					        	$Pro_Tax_Amount = ($Pro_Gr_Amount - $Total_Disc) * $Pro_Tax/100;
					        	 
					        	$Pro_Net_Amount = ($Pro_Gr_Amount + $Pro_Tax_Amount) - $Total_Disc;
					        	 
					        	$sql4 = "UPDATE product SET Pro_CS='$NEW_Pro_CS',Pro_Gr_Amount='$Pro_Gr_Amount',Total_Disc='$Total_Disc',Pro_Tax_Amount='$Pro_Tax_Amount',
					        	Pro_Net_Amount='$Pro_Net_Amount' WHERE Pro_Sl_No='$Pro_Sl_No'";
					        	 
					        	$result2 = mysql_query($sql4);
					        	 
					        	if($result2 == 1)
					        	{
					        		echo  "<h3 style='color:green;'>Product Table Update Successful</h3>";
					        	}
					        	else
					        	{
					        		echo "<br>"."Product Table Updation Unsuccessful";
					        	}
					        	 
					        }
					        
                          }

                          mysql_close($bd);
                          
                          
						?>
											  
				  <br>
			      <br>
				 <a class="btn btn-info" href="http://localhost/Employee_Product/Sales/Display/Sales_View.php"><b>View</b></a>
     		   </div>
     			<br>
				<br>				
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
