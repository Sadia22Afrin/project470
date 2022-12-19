<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Search Flight </title>
		<?php include '../View/UI.php';?>
		</head>
  <body>
 <!-- following section is used for creating the menubar in the webpage -->

	
  	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> S Airways </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> 
				
                <a href="add_flight.php"> Add Flight </a>
				<a href='../View/show_flight.php' style="margin-left: 20px;"> Show Flight </a>
				<a href="update_flight.php" style="margin-left: 20px;"> Update Flight </a>
				<a href="delete_flight.php" style="margin-left: 20px;"> Delete Flight </a> <br>
				
				
				<a href="search_flightbyID_admin.php"> Search Flight By ID </a> 
				<a href='../View/show_ticket.php' style="margin-left: 20px;"> Show Ticket </a> 
				<a href="delete_ticket.php" style="margin-left: 20px;"> Delete Ticket </a>
				<a href="home.php" style="margin-left: 20px;"> Sign Out </a> 	<br><br><br>
				 
				 
			</div>
		</div>
	</section>
	
<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#2d2244"> Search Flight </div>
		
		<form action='../View/showResult_admin.php' class="form_design" method="post"> 
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#3700dc">
			Destination: <input type="text" name="des"> <br/>
            Departure:<input type="text" name="del"> <br/> <br/>
			Date: <input type="date" name="fdate"> <br/> <br/>
			
			<button type="submit" value="Search"> Search </button>
			</div>
		</form>

	</section>

	<?php include '../View/Footer.php';?>
</body>
</html>