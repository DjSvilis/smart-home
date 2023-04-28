
<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<title>Smart Home </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="sty/st.css">	
	<link rel="stylesheet" type="text/css" href="sty/slider.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>



<body>
	<?php include('header.php')?>
	
  	<div class="row">
  		<div class="side1"></div>
  		<div class="main2">
  			<div class="box"><h2>Φωτα</h2>
			 <?php include('lights.php')?>
			</div>
  			<div class="box"> <h2>Κάμερα</h2> <video src="vids/cam.mp4" width="90%" height="90%" controls loop> </div>
  			<div class="box"><h2>Υγρασια θερμοκρασια</h2>
				<div class="boxb">10%</div></div>
  			<div class="box"> <h2>Συναγερμος</h2>
  					<div class="boxa">Alert</div>
  			</div>
  		</div>	
  		<div class="side1"></div>
  	<div class="footer">
  <h2>Footer</h2>
</div>


  </body>
  </html>