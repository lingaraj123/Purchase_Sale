<?php 
	/* session_start(); */	
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
  <body>
		<div class="container-fluid">
		  <div class="row">
		   <div class="col-md-12">
		   <br>
		   <?php /* echo "<div class='alert alert-success' role='alert' style='text-align:center;'>". 'Welcome'.'&nbsp;'.'&nbsp;'.'&nbsp;'.$_SESSION['Username']."</div>" */ ?>
		   
		   <h1 style="text-align: center;color:white;">Sales View</h1>
		   <table class="table table-hover table-bordered" style="font-weight: bold;">
			    <thead class="alert alert-warning">
			      <tr>
			        <th>Sales_Date</th>
			        <th>Buyer_Name</th>
			        <th>Pro_Name</th>
			        <th>Product<br>_Pcs</th>
			        <th>Unique<br>_Product<br>_Sales_Rs</th>
			        <th>Sales_Price</th>
			        <th>Sales_Profit</th>
			        <th>Act_S_Price</th>
			        <th>Discount</th>
			        <th>Rate_Aft_Disc</th>
			        <th>Vat</th>
			        <th>V_Aft_Vat</th>
			        <th>Bill_Amt</th>
			      </tr>
				  </thead> 
			     <tfoot class="alert alert-warning">
		            <tr align="center">
		                <th>Sales_Date</th>
		                <th>Buyer_Name</th>
				        <th>Pro_Name</th>
				        <th>Product<br>_Pcs</th>
				        <th>Unique<br>_Product<br>_Sales_Rs</th>
				        <th>Sales_Price</th>
				        <th>Sales_Profit</th>
				        <th>Act_S_Price</th>
				        <th>Discount</th>
				        <th>Rate_Aft_Disc</th>
				        <th>Vat</th>
				        <th>V_Aft_Vat</th>
				        <th>Bill_Amt</th>
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
/* 							echo "<div class='alert alert-success' role='alert' style='text-align:center;font-weight:bold;color:white;'>Connection Successful</div>";
 */						}
							
						$db = mysql_select_db($mysql_database,$con) or die("<div class='alert alert-success' role='alert'>Opps somthing went wrong.</div>");
								   
			            $sql = "SELECT * FROM sales";
			            $result = mysql_query($sql);
						while ($row = mysql_fetch_array($result)){
						?>	
						<tr class='default' style="background-color:#696969;" align="center">
		                    <td><?php echo $row['Sales_Date'] ?></td>
		                    <th><?php echo $row['Buyer_Name']?></th>
		                  	<td><?php echo $row['Pro_Name'] ?></td>
		                  	<td><?php echo $row['Pro_Pcs'] ?></td>
		                  	<td><?php echo $row['Unique_Prod_S_Price'] ?></td>
		                  	<td><?php echo $row['Sales_Price'] ?></td>
		                  	<td><?php echo $row['Sales_Profit'] ?></td>
		                  	<td><?php echo $row['Act_S_Price'] ?></td>
		                  	<td><?php echo $row['Discount'] ?></td>
		                  	<td><?php echo $row['Rate_Aft_Disc'] ?></td>
		                  	<td><?php echo $row['Vat'] ?></td>
		                  	<td><?php echo $row['V_Aft_Vat'] ?></td>
		                  	<td><?php echo $row['Bill_Amt'] ?></td>
		                </tr> 
			           <?php 
			           }
			           mysql_close($con);
			         ?>
			   </table>
			   <br>
		   </div>
		   <div class="row">
		    <div class="col-md-2"></div> 
		    <div class="col-md-2"></div> 
		    <div class="col-md-2">
		     <a class="btn btn-success" onclick="myFunction()" value="Print Product!" style="color:black;"><b>Sales Print</b></a>
		    </div> 
		    <div class="col-md-2"><?php /* echo "<a href='http://localhost/Employee_Product/Product/Display/Product_view.php' class='btn btn-success' style='color:black;font-weight:bold;' role='button'>View Product</a>" */ ?></div>
		    <div class="col-md-2"></div> <div class="col-md-2"></div> 
		  </div>
		  </div>
		</div>
		 <br>
  </body>
</html>
