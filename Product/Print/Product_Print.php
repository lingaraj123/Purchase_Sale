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
  	   <script type="text/javascript">
  	    function myFunction() {
	   	    window.print();
	   	}
       </script>
  </head>
  <body><br><br>
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
		   <br>
		   <div class="col-md-12">
		      <?php  echo "<a href='http://localhost/Employee_Product/Registration_SignIn/logout.php' class='btn btn-info' role='button'>Log Out</a>"; ?>
		   <br>
		   <br>
		   <?php
	            echo "<br>";
	            $mysql_hostname = "localhost";
				$mysql_user = "root";
				$mysql_password = "";
				$mysql_database = "employee_product";
					
				$con = mysql_connect($mysql_hostname,$mysql_user,$mysql_password);
					
				if(!$con){
					echo  "<div class='alert alert-danger' role='alert' style='text-align:center;'>Opps Somthing Went Wrong...</div>";
				}
				else {
					echo "<div class='alert alert-success' role='alert' style='text-align:center;'>Connection Successful</div>";
				}
				$db = mysql_select_db($mysql_database,$con) or die("<div class='alert alert-success' role='alert'>Opps somthing went wrong.</div>");		   
			?>
		     
		     <br>
		    <div id="print-content"> 
		    <div class="alert alert-warning" style="text-align: center;">
		     		<strong>DELIVERY CHALLAN</strong> 
		    </div>
		    <?php      		        
     		         $sql2 = "SELECT * FROM manufacture_purchase";
     		         $result2 = mysql_query($sql2);
     		         $count = mysql_num_rows($result2);
     		         if($count == 0){
						echo "Ok";
					 }else {
					  while ($Row = mysql_fetch_assoc($result2)){
     		        ?>
     		<table class="table table-hover table-bordered" style="font-weight: bold;">
            	    <thead class="alert alert-info" align="center">
            	     <tr>
            	      <td><b><?php echo "Manufacture Agency Name: ".$Row['MA_Name']; ?> <br> <?php echo "Manufacture Agency Address: ".$Row['MA_Address']; ?><br> <?php echo "Manufacture Agency Phone No.:".$Row['MA_PhoneNo']; ?> <br> <?php echo "Manufacture Agency Tin No.:".$Row['MA_TinNo']; ?> <br></b></td>
            	      <td><b><?php echo "Purchase Agency Name: ".$Row['PA_Name']; ?><br><?php echo "Purchase Agency Route Name: ".$Row['PA_Route_Name']; ?><br><?php echo "Purchase Agency Phone No: ".$Row['PA_PhoneNo']; ?><br> <?php echo "Purchase Agency TinNo.: ".$Row['PA_TinNo']; ?></b></td>
            	     </tr>
            	    </thead>
           </table>
       <?php 
          
          }
          
         } 
	
       ?> 
		   <table class="table table-hover table-bordered" style="font-weight: bold;">
		    <thead class="alert alert-danger">
		    <colgroup>
             <col class="col-md-4">
             <col class="col-md-8">
            </colgroup>
		      <tr>
		        <th class="col-md-1">Sl_No</th>
		        <th class="col-md-4">Name</th>
		        <th class="col-md-0.5">Price</th>
		        <th class="col-md-0.5">Pieces</th>
		        <th class="col-md-0.5">S_Rate</th>
		        <th class="col-md-0.5">Free</th>
		        <th class="col-md-0.5">Gr_Amount</th>
		        <th class="col-md-0.5">Sch_Disc</th>
		        <th class="col-md-0.5">CD_Disc</th>
		        <th class="col-md-0.5">Total_Disc</th>
		        <th class="col-md-0.5">Tax</th>
		        <th class="col-md-0.5">Tax_Amount</th>
		        <th class="col-md-1">Net_Amount</th>
		      </tr>
			 </thead> 
			   
			<?php 		
						$sum1 = 0;
						$sum2 = 0;
						$sum3 = 0;
						$sum4 = 0;
						$sum5 = 0;
						$sum6 = 0;
						$sum7 = 0;
						$sum8 = 0;
						$sum9 = 0;
						$sum10 = 0;
						$sum11 = 0;
			            $sql = "SELECT * FROM product";
			            $result = mysql_query($sql);
						while ($row = mysql_fetch_array($result)){
						?>	
						<tr class='success'>
		                    <td><?php echo $row['Pro_Sl_No'] ?></td>
		                  	<td><?php echo $row['Pro_Name'] ?></td>
		                  	<td><?php echo $row['Pro_Price'];
								$sum10 = $sum10 + $row['Pro_Price'];												
		                  	?></td>
		                  	<td><?php echo $row['Pro_CS'];
 								$sum1 = $sum1 + $row['Pro_CS'];						
		                  	?></td>
		                  	<td><?php echo $row['Pro_S_Rate'];
                                $sum11 = $sum11 + $row['Pro_S_Rate'];
		                  	?></td>
		                  	<td><?php echo  $row['Pro_Free'];
								$sum3 = $sum3 + $row['Pro_Free'];
		                  	 ?></td>
		                  	<td><?php echo $row['Pro_Gr_Amount'];
                                $sum4 = $sum4 + $row['Pro_Gr_Amount'];
		                  	?></td>
		                  	<td><?php echo $row['Pro_Sch_Disc'];
                                $sum5 = $sum5 + $row['Pro_Sch_Disc'];
		                  	?></td>
		                  	<td><?php echo $row['Pro_CD_Disc'];
                                $sum7 = $sum7 + $row['Pro_CD_Disc'];
		                  	?></td>
		                  	<td><?php echo $row['Total_Disc'];
                                $sum6 = $sum6 + $row['Total_Disc'];
		                  	?></td>
		                  	<td><?php echo $row['Pro_Tax'];?></td>
		                  	<td><?php echo $row['Pro_Tax_Amount'];
		                  	$sum8 = $sum8 + $row['Pro_Tax_Amount'];
		                  	?></td>
		                  	<td><?php echo $row['Pro_Net_Amount'];
		                  	    $sum9 = $sum9 + $row['Pro_Net_Amount'];
		                  	?></td>
		                </tr> 
			           <?php 
			           }
			         ?>
			         <tfoot style="background-color:#696969;">
				      <tr>
				        <th>Sl_No</th>
				        <th>Name</th>
				        <th>Price = <?php echo $sum10; ?></th>
				        <th>Pieces = <?php echo $sum1 ?></th>
				        <th>S_Rate = <?php echo $sum11; ?></th>
				        <th>Free = <?php echo $sum3;  ?></th>
				        <th>Gr_Amount = <?php echo $sum4; ?> </th>
				        <th>Sch_Disc = <?php echo $sum5; ?></th>
				        <th>CD_Disc  = <?php echo $sum7; ?></th>
				        <th>Total_Disc_Amt = <?php echo $sum6 ?>
				        <th>Tax</th>
				        <th>Tax_Amount = <?php echo $sum8; ?></th>
				        <th>Net_Amount = <?php echo $sum9; ?></th>
				      </tr>
			         </tfoot> 
			         <br>
			         <tr>
			           <table class="table table-hover table-bordered">
			             <thead class="alert alert-danger">
			              <tr>
			               <td>Tax Description</td>
			               <td>Tax</td>
			               <td>Taxable Amount</td>
			               <td>Tax Amount</td>
			              </tr>
			             </thead>
			             <tbody>
			              <tr>
			               <td>Vat Tax:<br>Vat Tax:</td>
			               <td>5.00<br>13.50</td>
			               <td>22848.83<br>63271.11</td>
			               <td>1142.44<br>8541.60</td>
			             </tr>
			            </tbody> 
			           </table>
			           <br>
			           <table class="table table-hover table-bordered">
			            <thead style="background-color:olive;">
			             	<tr>
			             	 <td>Gross Amount:   &nbsp; <b>90160</b></td>
			             	 <td>Total Deduction:  &nbsp;<b> 4040 </b></td>
			             	 <td>Tota Addition:  &nbsp;  <b> 9648 </b></td>
			             	 <td>Net Amount:  &nbsp;  <b> 95804 </b></td>
			             	</tr>
			            </thead>
			           </table>
			         </tr>
			   </table> 
			   </div>  
		   </div> 
		  </div>
		  <div class="row">
		    <div class="col-md-2"></div> 
		    <div class="col-md-2"></div> 
		    <div class="col-md-2">
		     <a class="btn btn-success" onclick="myFunction()" value="Print Product!" style="color:black;"><b>Product Print</b></a>
		    </div> 
		    <div class="col-md-2"><?php echo "<a href='http://localhost/Employee_Product/Product/Display/Product_View.php' class='btn btn-success' style='color:black;font-weight:bold;' role='button'>View Product</a>" ?></div>
		    <div class="col-md-2"></div> <div class="col-md-2"></div> 
		  </div>
		</div>
		
		<br>
		<br>
		<?php mysql_close($con) ?>
		
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
