<?php 
 
 session_start();
 
 echo "<div class='alert alert-success' role='alert' style='text-align:center;'>"."Welcome            ".$_SESSION['Username']."</div>";
 echo "<br>";
  
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
		    <link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.min.css">
		    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
            <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script> 
            
		 	<script type="text/javascript">
			(function ($) {
			    $.fn.progressTimer = function (options) {
					var settings = $.extend({}, $.fn.progressTimer.defaults, options);

			        this.each(function () {
			            $(this).empty();
			            var barContainer = $("<div>").addClass("progress active progress-striped");
			            var bar = $("<div>").addClass("progress-bar").addClass(settings.baseStyle)
			                .attr("role", "progressbar")
			                .attr("aria-valuenow", "0")
			                .attr("aria-valuemin", "0")
			                .attr("aria-valuemax", settings.timeLimit);

			            bar.appendTo(barContainer);
			            barContainer.appendTo($(this));
			            
			            var start = new Date();
			            var limit = settings.timeLimit * 100;
			            var interval = window.setInterval(function () {
			                var elapsed = new Date() - start;
			                bar.width(((elapsed / limit) * 100) + "%");

			                if (limit - elapsed <= 5000)
			                    bar.removeClass(settings.baseStyle)
			                       .removeClass(settings.completeStyle)
			                       .addClass(settings.warningStyle);

			                if (elapsed >= limit) {
			                    window.clearInterval(interval);

			                    bar.removeClass(settings.baseStyle)
			                       .removeClass(settings.warningStyle)
			                       .addClass(settings.completeStyle);

			                    settings.onFinish.call(this);
			                }

			            }, 250);

			        });

			        return this;
			    };

			    $.fn.progressTimer.defaults = {
			        timeLimit: 60,  //total number of seconds
			        warningThreshold: 5,  //seconds remaining triggering switch to warning color
			        onFinish: function () {},  //invoked once the timer expires
					baseStyle: '',  //bootstrap progress bar style at the beginning of the timer
			        warningStyle: 'progress-bar-danger',  //bootstrap progress bar style in the warning phase
			        completeStyle: 'progress-bar-success'  //bootstrap progress bar style at completion of timer
			    };
			}(jQuery));
			</script>
            
            <script>
			$(document).ready(function(){
			        $("#progressTimer").progressTimer();
			}); 
			</script>
          </head>
          <body>
           <div class="container">
          	<div class="row">
   		     <div class="col-md-2"></div>
         	    <div class="col-md-8">
          	     <div id="progressTimer"></div><br><br>
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
          		     
          		     $db = mysql_select_db($mysql_database,$bd) or die("<div class='alert alert-success' role='alert'>Opps somthing went wrong.</div>");
          		     
          		     if(isset($_GET['Pro_Sl_No'])){
          		     	$pro_sl_No = $_GET['Pro_Sl_No'];
          		     }
          		     
          		     $SQL = "SELECT * FROM product WHERE Pro_Sl_No='$pro_sl_No'";
          		     
          		     $result2 = mysql_query($SQL);
          		     
          		     while ($ROW = mysql_fetch_array($result2))
          		     {
          		     $Pro_Name = $ROW['Pro_Name'];
          		     $Pro_Date = $ROW['Date'];
          		     $Pro_Net_Amount = $ROW['Pro_Net_Amount'];
          		     } 
          		      
          		     			
          		      echo "<div class='alert alert-warning' role='alert' style='text-align:center;font-weight:bold;color:black;'>Are You Sure, 
			                		You Want To Delete A Product Whose Product Purchase ID: ".'<b>'.$pro_sl_No." Product Name: " .$Pro_Name . "<br> Date: " . $Pro_Date . " Net Amount ". $Pro_Net_Amount .'</b>'." </div>";
          		       
          		     ?>
          		          
          		     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          		     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          		     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          		     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          		     <a href="http://localhost/Employee_Product/Product/Delete/Delete.php?Pro_Sl_No=<?php echo $pro_sl_No; ?>" class="btn btn-danger">Yes</a>&nbsp;&nbsp;<a href="http://localhost/Employee_Product/Product/Display/Product_View.php" class="btn btn-danger">No</a>
          		    </div>
          		    <div class="col-md-2"></div>
          		  </div>
          		</div>	
          </body>
         </html>   
