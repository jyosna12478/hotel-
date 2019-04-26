<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Family Hotels|Book Now</title>
	<style type="text/css">
		body{
			background-color: black;
		}
		.img{
    		opacity: 0.8;
    		filter: alpha(opacity=10);
    		position: absolute;
    		height: 750px;
            width: 100%;
		}
		
		.logo{
			position:absolute;
			display: block;
			margin-left: 15px;
		}
		.menu{
			background-color: none;
    		float: right;
    		position: absolute;
    		width: 100%;
    		margin-right: 50px;
    		margin-left: 0px;
    		padding-top: 28px;
    	}
		.menu button{
			float:right;
   		 	display:block;
    		color:black;
    		text-align: center;
    		padding-top:8px; 
    		text-decoration: none;
    		font-size: 15px;
    		padding-bottom: 8px;
    		width: 200px;
    		background-color: #C0C0C0;
    		margin-right: 30px;
		}
		.topnav {
    		background-color: none;
    		float: right;
    		position: relative;
    		width: 100%;
    		padding-right: 0px;
    		margin-left: 0px;
    	}
		.topnav a {
    		float:right;
   		 	display:block;
    		color: white;
    		text-align: center;
    		padding: 14px 8px;
    		text-decoration: none;
    		font-size: 15px;
    		padding-bottom: 8px;
    	}
		.active:hover {
    		border-bottom: 2px solid white;
		}
		#cpg{
			font-size: 35px;
			padding-top: 0px;
			width: 50px;
			padding-right: 0px;
			height: 25px;
		}
		hr{
			width: 1100px;
			float: right;
			margin-top: 0px;
			color: black;
			position: relative;
		}
		.dropdown-content {
   			display: none;
    		position: absolute;
    		background-color:none;
    		min-width: 160px;
    		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    		z-index: 1;
    		border: none;
		}
		.dropdown-content1 {
   			display: none;
    		position: absolute;
    		background-color:none;
    		min-width: 160px;
    		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    		z-index: 1;
    		border: none;
		}
		.dropdown-content a {
    		color: black;
    		padding: 12px 16px;
    		text-decoration: none;
    		display:block;
    		background-color: none;
    		position: relative;
    		border:none;
		}
		.dropdown-content1 a {
    		color: black;
    		padding: 12px 16px;
    		text-decoration: none;
    		display:block;
    		background-color: none;
    		position: relative;
    		border:none;
		}
		.dropdown:hover .dropdown-content {display:block;}
		.dropbtn {
    		background-color: none;
   	 		padding: 16px;
    		font-size: 16px;
    	}
		.dropdown {
    		position: absolute;
    		display:block;
    		margin-top: 40px;
    		margin-left:200px; 
    		border: none;
    		
		}
		.dropbtn:hover{
			border-bottom: 2px solid white;
		}
		.dropdown a{
			background-color: none;
			color:white;
			padding-bottom: 2px;
			margin-top: 30px;
		}
		
    .about:hover{
      border-bottom: 2px solid white;
    }
	.user{
		color: white;
		font-family:comic-sans;
		font-size:25px;
		padding-left: 200px;
		padding-top: 5px;
	}
	</style>
</head>
<body>

	<img src="h1.jpg" width="100%" class="img">
	<img src="logo.png" class="logo" width="85">
	<p style="color: white;position: absolute;display: inline-block;margin-top: 75px;margin-left: 8px;font-size: 23px;">Shangri-La</p>
	<div class="topnav" >
		<a style="width: 50px;font-size: 10px;padding-top: 5px;padding-left: 0px;" title="Learn More About cpg">*Shangri-La Preferred Guest</a>
		<a href="SPG" id="cpg" title="Learn More About cpg">spg</a>
		<a class="active" href="loginnew.php" style="font-family:unset;width:auto;font-size: 20px;" >LOGOUT</a>
		<?php 
  			if($_SESSION["success"]==true)
    		{ 
 				echo '<div class="user">'."HELLO".'&nbsp'.'&nbsp'. $_SESSION["Username"].'&nbsp'.'&nbsp'."WELCOME TO SHANGRI-LA".'</div>';
 			}
  			
		?>
	</div>
	<hr><br><br>
	<div class="menu">
		<button>RESERVE NOW</button>
	</div>
  
	<div class="dropdown">
		<a style="margin-right: 40px;text-decoration: none;margin-top: 0px;" class="dropbtn" href="#">DESTINATIONS 
			<div class="dropdown-content">
				<a href="grand.html" style="margin-top: 0px;">GRAND</a>
				<a href="#">CLUB</a>
			</div>
		</a>
	</div>
	<div class="dropdown" style="width: 250px;margin-left: 350px;margin-top: 40px;">
		<a style="margin-right: 40px;margin-top: 0px;" class="dropbtn">EXPERIENCE SHANGRI-LA 
			<div class="dropdown-content">
				<a href="#" style="margin-top: 0px;">MEETING</a>
				<a href="#">PARTY</a>
			</div>
		</a>
	</div>
	<div class="dropdown" style="width: 250px;margin-left: 540px;margin-top: 40px;">
		<a style="margin-left: 50px;margin-top: 0px;" class="dropbtn">OFFERS
			<div class="dropdown-content">
				<a href="#" style="margin-top: 0px;padding-left: 66px;">SHANGRI-LA STORE</a>
				
			</div>

		</a>
	</div>
  <div class="dropdown">
    <a style="margin-left: 500px;margin-top: 0px;  text-decoration: none;" href="about1.html" class="about">ABOUT US </a>
  </div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div style="position: absolute; margin-left: 80px;">
		  <div type="button" style="text-align: left;width:580px;height:100;font-size:35px;margin-left:320px;margin-top:60;background-color:#ADD8E6;color:black;padding: 10px;opacity: 0.8;filter: alpha(opacity=20);">The Right Way.The Shangri-La Way!</div>
	</div>

	<br><br><br><br><br>
	<div style="position: absolute; margin-left: 47px;">
		  <div type="button" style="text-align: left;width:1150px;height:70;font-size:40px;margin-top:60;background-color:white;color:black;padding: 20px;opacity: 0.8;
    		filter: alpha(opacity=50);">
		  				
		  	<div style="position: absolute;display: inline;font-size: 15px;width: 100px;padding-left: 30px;text-align: center;padding-bottom: 10px;">
		  	  DESTINATION
		  	</div>
		  	<input type="text" name="destination" placeholder ="Where To?" style="margin-left: 30px;height: 25px;width: 150px;position: relative;">
		  	<div style="position: absolute;display: inline;font-size: 15px;width: 100px;padding-left:15px;padding-bottom: 10px;">
		  	  FROM
		  	</div>
		  	<input type="date" name="from" placeholder="  From      -       To  " style="margin-left: 15px;height: 25px;position: relative;">
		  	<div style="position: absolute;display: inline;font-size: 15px;width: 100px;padding-bottom: 10px;padding-left:15px;">
		  	  TO
		  	</div>
        <input type="date" name="from" style="margin-left: 15px;height: 25px;position: relative;">
        <div style="position: absolute;display: inline;font-size: 15px;width: 100px;padding-left: 0px;text-align: center;padding-bottom: 10px;">
          ADULTS
        </div>
        <input type="number" name="adults" placeholder ="No of Adults" style="margin-left:20px;height: 20px;width: 100px;position: relative;">
        <div style="position: absolute;display: inline;font-size: 15px;width: 100px;padding-left: 8px;text-align: center;padding-bottom: 10px;">
          CHILDREN
        </div>
        <input type="number" name="child" placeholder ="No of Children" style="margin-left:20px;height: 20px;width: 100px;position: relative;">
		  	<div style="position: absolute;display: inline;font-size: 15px;width: 100px;padding-left: 18px;text-align: center;padding-bottom: 10px;">
          PROMO CODE
        </div>
        <input type="text" name="promo" style="margin-left:20px;height: 20px;width: 100px;position: relative;">
        
		  	
		  	
		  	<button style="position:absolute;display: inline-block;font-size: 20px;padding-left: 10px;margin-top:15px;text-align: center;padding-right: 10px;width: 200px;margin-left: 30px;padding-top: 5px;padding-bottom: 5px;background-color:#C0C0C0 ;text-decoration: none;color: black;" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">
				SEARCH HOTEL
			</button>
		  	
		  	
		  </div>
	</div>
	



    






</body>
</html>