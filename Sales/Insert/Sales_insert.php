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
    <!-- <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://getbootstrap.com/examples/signin/signin.css"> -->
  	
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
         <div class="col-md-3"></div>
            <div class="col-md-6" align="justify">
	        <?php
	                
	        echo "<div class='alert alert-success' role='alert' style='text-align:center;'>". 'Welcome               '.$_SESSION['Username']."</div>";
	        echo "<br>";
			$mysql_hostname = "localhost";
			$mysql_user = "root";
			$mysql_password = "";
			$mysql_database = "employee_product";
				
			$bd = mysql_connect($mysql_hostname,$mysql_user,$mysql_password);
				
			if(!$bd){
				echo  die("<div class='alert alert-danger' role='alert'>OPPS something went wrong.</div>");
			}
			else {
				echo "<div class='alert alert-success' role='alert' style='text-align:center;'>Connection Successful</div>";
			}
			$db = mysql_select_db($mysql_database,$bd) or die("<div class='alert alert-danger' role='alert'>Opps somthing went wrong.</div>");
			
			if(isset($_POST['submit'])||isset($_POST['Discount'])||isset($_POST['Vat'])){
			    $prod_name_id = $_POST['Pro_Sl_No'];
				$sales_prod_pcs  = $_POST['Pro_Pcs'];
				$sales_prod_profit = $_POST['Pro_S_Profit'];
				$sales_prod_disc = $_POST['Discount'];
				$sales_prod_vat = $_POST['Vat'];
				$sales_prod_buyer_name = $_POST['Buyer_Name'];	
			}
			
		    $prod_name_id = stripslashes($prod_name_id);
			$sales_prod_pcs = stripslashes($sales_prod_pcs);
			$sales_prod_profit = stripslashes($sales_prod_profit);
			$sales_prod_disc = stripslashes($sales_prod_disc);
			$sales_prod_vat = stripslashes($sales_prod_vat);
			$sales_prod_buyer_name = stripslashes($sales_prod_buyer_name);
			
		    $prod_name_id = mysql_real_escape_string($prod_name_id);
			$sales_prod_pcs = mysql_real_escape_string($sales_prod_pcs);
			$sales_prod_profit = mysql_real_escape_string($sales_prod_profit);
			$sales_prod_disc = mysql_real_escape_string($sales_prod_disc);
			$sales_prod_vat = mysql_real_escape_string($sales_prod_vat);
			$sales_prod_buyer_name = stripslashes($sales_prod_buyer_name);
		
			
			/*Product Purchase Updation*/ /* SELECT * From product WHERE Pro_Name LIKE '%$sales_prod_name%' */
			
           	$sql = mysql_query("SELECT * From product WHERE Pro_Sl_No = '$prod_name_id'");
           	
			
			while ($row = mysql_fetch_array($sql))
			{	
					$pro_id = $row['Pro_Sl_No'];
					
				  	$pro_Name = $row['Pro_Name'];
				    
				  	$Pro_CS =  $row['Pro_CS']; 
				        
				    $pro_S_Rate = $row['Pro_S_Rate'];
				       
				    $pro_SCH_disc = $row['Pro_Sch_Disc'];
				    
				    $pro_CD_disc =  $row['Pro_CD_Disc'];
				       
				    $pro_tax = $row['Pro_Tax'];
				    
			}
			
			$date = date('d-m-Y');
			
			$Update_Pro_Pcs = $Pro_CS - $sales_prod_pcs;
			
			$Pro_Gross_Amt = $Update_Pro_Pcs * $pro_S_Rate;
			 
			$Total_Disc_Amt =  (($pro_SCH_disc/100)+($pro_CD_disc/100))*$Pro_Gross_Amt;
			 
			$Tax_Amt =  ($Pro_Gross_Amt - $Total_Disc_Amt) * $pro_tax/100;
			 
			$Product_Net_Amt = ($Pro_Gross_Amt + $Tax_Amt) - $Total_Disc_Amt;
			
			$sql = "UPDATE product SET Pro_CS='$Update_Pro_Pcs', Pro_Gr_Amount='$Pro_Gross_Amt', Total_Disc='$Total_Disc_Amt', Pro_Tax_Amount='$Tax_Amt', Pro_Net_Amount='$Product_Net_Amt'
			WHERE Pro_Sl_No = '$pro_id'";
			
			if(mysql_query($sql)){
				echo  "<h3 style='color:green;'>Product Table Update Successful</h3>";
			}
			else
			{
				echo "<br>"."Updation Unsuccessful";
			}
			
			
			
	      /*Sales Insertion*/  
	        
	      echo  "<span style='color:red;'>Unique Product Sales Price: </span>".$Unique_Prod_S_Price = ($Product_Net_Amt-$Tax_Amt)/$Update_Pro_Pcs."<br>";
	        
	      echo  "<span style='color:red;'>Sales Price: </span>".$sales_price = $Unique_Prod_S_Price * $sales_prod_pcs."<br>";
	        
	      echo  "<span style='color:red;'>Product Sales Actual Price: </span>".$Prod_S_Act_Price = $sales_price + ($sales_price * $sales_prod_profit/100)."<br>";
	        
	      echo  "<span style='color:red;'>Sales Rate After Discount: </span>".$Rate_Aft_Disc = $Prod_S_Act_Price - ($Prod_S_Act_Price * $sales_prod_disc/100)."<br>";
	        
	      echo  "<span style='color:red;'>Sales Value After Vat: </span>".$Value_Aft_Vat = $Rate_Aft_Disc * ($sales_prod_vat/100)."<br>";
	        
	      echo  "<span style='color:red;'>Bill Amount: </span>".$Bill_Amt = $Rate_Aft_Disc + $Value_Aft_Vat; 
	        
	        
           
          $sql = "INSERT INTO sales (Sales_Date,Buyer_Name,Pro_Name,Pro_Pcs,Unique_Prod_S_Price,Sales_Price,Sales_Profit,Act_S_Price,Discount,Rate_Aft_Disc,Vat,V_Aft_Vat,Bill_Amt)
                  VALUES('$date','$sales_prod_buyer_name','$pro_Name','$sales_prod_pcs','$Unique_Prod_S_Price','$sales_price'
                           ,'$sales_prod_profit','$Prod_S_Act_Price','$sales_prod_disc','$Rate_Aft_Disc',
                            '$sales_prod_vat','$Value_Aft_Vat','$Bill_Amt')";		
            
            
	            if(mysql_query($sql)){
	            	echo  "<h3 style='color:green;'>Data Inserted Successful</h3>";
	            }
	            
	            else 
	            {
	            	echo "<br>"."Insertion Unsuccessfull";
	            }
	 
	            
	        ?>
	        
            <br>
            <br>
            <a class="btn btn-info" href="http://localhost/Employee_Product/Sales/Display/Sales_View.php"><b>View</b></a>
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
