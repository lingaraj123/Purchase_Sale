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
			mysql_select_db($mysql_database,$bd) or die("<div class='alert alert-danger' role='alert'>Opps somthing went wrong.</div>");
			
			if(isset($_POST['submit']) || isset($_POST['Pro_Name']) || isset($_POST['Pro_Price'])||isset($_POST['Pro_CS']) ||$_POST['Pro_S_Rate']||$_POST['Pro_Free']){
				/* $date = $_POST['Date']; */
				$pro_name = $_POST['Pro_Name'];
				$pro_price = $_POST['Pro_Price'];
				$pro_CS = $_POST['Pro_CS'];
				/* $pro_EA = $_POST['Pro_EA']; */
			    $pro_S_Rate = $_POST['Pro_S_Rate'];
				$pro_free = $_POST['Pro_Free'];
				/* $pro_gr_amt = $_POST['Pro_Gr_Amount']; */
				$pro_SCH_disc = $_POST['Pro_Sch_Disc'];
				/* $pro_RD_disc = $_POST['Pro_RD_Disc']; */
			    $pro_CD_disc = $_POST['Pro_CD_Disc'];
				$pro_tax = $_POST['Pro_Tax'];
			   /*  $pro_tax_amt = $_POST['Pro_Tax_Amount']; */
			}
			
			/* $date = stripslashes($date); */
			$pro_name = stripslashes($pro_name);
			$pro_price = stripslashes($pro_price);
			$pro_CS = stripslashes($pro_CS);
			$pro_S_Rate = stripslashes($pro_S_Rate);
			$pro_free = stripslashes($pro_free);
			$pro_SCH_disc = stripslashes($pro_SCH_disc);
			$pro_CD_disc = stripslashes($pro_CD_disc);
			$pro_tax = stripslashes($pro_tax);
			
			/* $date = mysql_real_escape_string($date); */
			$pro_name = mysql_real_escape_string($pro_name);
			$pro_price = mysql_real_escape_string($pro_price);
			$pro_CS = mysql_real_escape_string($pro_CS);
			$pro_S_Rate = mysql_real_escape_string($pro_S_Rate);
			$pro_free = mysql_real_escape_string($pro_free);
			$pro_SCH_disc = mysql_real_escape_string($pro_SCH_disc);
			$pro_CD_disc = mysql_real_escape_string($pro_CD_disc);
			$pro_tax = mysql_real_escape_string($pro_tax);
			
            
            $Pro_Gross_Amt = $pro_CS * $pro_S_Rate;
            
           	$Total_Disc_Amt =  (($pro_SCH_disc/100)+($pro_CD_disc/100))*$Pro_Gross_Amt;
           	
           	$Tax_Amt =  ($Pro_Gross_Amt - $Total_Disc_Amt) * $pro_tax/100;
           	
           	$Product_Net_Amt = ($Pro_Gross_Amt + $Tax_Amt) - $Total_Disc_Amt;
           	
           	 /* $date2 = $date;
           	 $date = str_replace('/', '-', $date2);
           	 $pro_date = date('Y-m-d',strtotime($date));  */
           	
           	$pro_date = date("Y/m/d");
            
            echo    "Date:"."<b style='color:red'>".$pro_date."</b>"."<br>".
                    "Pro_Name: "."<b style='color:red'>".$pro_name."</b>"."<br>".
            		"Pro_Price: "."<b style='color:red'>".$pro_price."</b>"."<br>".
            		"Pro_CS: "."<b style='color:red'>".$pro_CS."</b>"."<br>".
            		"Pro_S_Rate: "."<b style='color:red'>".$pro_S_Rate."</b>"."<br>".
            		"Pro_Free: "."<b style='color:red'>".$pro_free."</b>"."<br>".
            		"Pro_Gr_Amount: "."<b style='color:red'>".$Pro_Gross_Amt."</b>"."<br>".
                    "Pro_Sch_Disc: "."<b style='color:red'>".$pro_SCH_disc."</b>"."<br>".
                    "Pro_CD_Disc: "."<b style='color:red'>".$pro_CD_disc."</b>"."<br>".
                    "Total_Disc: "."<b style='color:red'>".	$Total_Disc_Amt."</b>"."<br>".
                    "Pro_Tax: "."<b style='color:red'>".$pro_tax."</b>"."<br>".
                    "Pro_Tax_Amount: "."<b style='color:red'>".$Tax_Amt."</b>"."<br>".
                    "Pro_Net_Amount: "."<b style='color:red'>".$Product_Net_Amt."</b>";
            
            //$sql = "INSERT INTO product (Date,Pro_Name,Pro_Price,Pro_CS,Pro_S_Rate,Pro_Free,Pro_Gr_Amount,Pro_Sch_Disc,Pro_CD_Disc,Total_Disc,Pro_Tax,Pro_Tax_Amount,Pro_Net_Amount) 
                  //  VALUES('$pro_date'.'$pro_name','$pro_price','$pro_CS','$pro_S_Rate','$pro_free','$Pro_Gross_Amt','$pro_SCH_disc','$pro_CD_disc','$Total_Disc_Amt','$pro_tax','$Tax_Amt','$Product_Net_Amt')";

           /*  $sql2 = "INSERT INTO product (Pro_Name)
                    VALUES('$pro_date')";
            if(mysql_query($sql2)){
            	echo  "<h1 style='color:green;'>Date Inserted Successful</h1>";
            }else
            {
            	echo "<br>"."Not Inserted";
            } */
            
            
            $sql = "INSERT INTO product (Date,Pro_Name,Pro_Price,Pro_CS,Pro_S_Rate,Pro_Free,Pro_Gr_Amount,Pro_Sch_Disc,Pro_CD_Disc,Total_Disc,Pro_Tax,Pro_Tax_Amount,Pro_Net_Amount)
                    VALUES('$pro_date','$pro_name','$pro_price','$pro_CS','$pro_S_Rate','$pro_free','$Pro_Gross_Amt','$pro_SCH_disc','$pro_CD_disc','$Total_Disc_Amt','$pro_tax','$Tax_Amt','$Product_Net_Amt')";		
            
            
            if(mysql_query($sql)){
            	echo  "<h1 style='color:green;'>Data Inserted Successful</h1>";
            }else 
            {
            	echo "<br>"."Not Inserted";
            }
            
            ?>
            
            <br>
            <br>
            <a class="btn btn-info" href="http://localhost/Employee_Product/Product/Display/Product_View.php"><b>View</b></a>
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
