<?php
include('validation.php');
?>




<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>


<!-- //Custom Theme files -->
<!-- web font -->
<style>
    input[type=text], input[type=password] {
    width: 90%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #99A3A4;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
  </style>
<!-- //web font -->
</head>
<body style="background-color: black">
	
  <img src="back.jpg" width="80%" class="img" style="opacity: 0.5;
        filter: alpha(opacity=10);
        position: absolute;
        height: 650px;
            width: 100%;">
  
  <p style="font-family: comic-sans;color:white;position: absolute;padding-left: 130px;font-size: 33px;width: 100%;"><i>SHANGRI-LA PREFERRED GUEST</i></p>
  <img src="logo.png" class="logo" width="85" style="position:absolute;display: block;margin-left: 15px;">
  <a href="hotel1.html" style="color: white;position: absolute;display: inline-block;margin-top: 75px;margin-left: 8px;font-size: 23px;text-decoration: none;">Shangri-La</a>
  <br><br><br><br><br><br><br><br><br><br><br>
	
		<div style="border: 2px solid grey;display: inline-block;padding-top: 0px;width: 30%;margin-left: 260px;position: absolute;height: 50%;background-color: #c2bdb7">
    <p style="text-align:center;color: black;font-size: 30px;">SIGN UP</p>
    
    <p style="text-align:center;color: black;font-size: 20px;">By Creating a profile, you will be able to manage your reservations online!</p> 
    <script>
      function signup(){
        window.close("loginnew.php");
        window.open("signupnew.php");
      }
    </script>
    <a style="position:absolute;display: inline-block;font-size: 20px;padding-left: 50px;margin-top:135px;text-align: center;padding-right: 50px;width: 200px;margin-left: 100px;padding-top: 5px;padding-bottom: 5px;background-color:white ;text-decoration: none;color: black;width:auto;" href="signupnew.php" target="">
        SIGN UP
      </a>
    
  </div>
		
	</div>
  <div style="border: 2px solid grey;display: inline-block;padding-top: 0px;width: 30%;margin-left: 640px;position: absolute;height: 50%;background-color:#7f7b81;">
    <p style="text-align:center;color: white;font-size: 30px;">SIGN IN</p>
    
    <p style="text-align:center;color: white;font-size: 20px;">Sign In to your Shangri-La Profile!</p> 
    <form action="loginnew.php" method="POST">
      <?php include("errors1.php");?>
    <input type="mail" name="Username" placeholder="Username" placeholder="Email Address" required style="margin-left: 50px;width: 70%;height: 10%;font-size: 15px;margin-bottom: 10px;padding:5px;">
    <input type="password" name="password" placeholder="Password" placeholder="Password" required style="margin-left: 50px;width: 70%;height: 10%;font-size: 15px;padding: 5px;">


    <button type="submit" name="login"   style="position:absolute;display: block;font-size: 20px;padding-left: 50px;margin-top:25px;text-align: center;padding-right: 50px;width: 400px;margin-left: 120px;padding-top: 5px;padding-bottom: 5px;background-color:white ;text-decoration: none;color: black;width:auto;">SIGN IN</button>
</form>
  </div>
   <br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br><br>
  <br>      
      
    
  </div>

  <img src="endlogin.jpg" style="position: absolute;display: block;width: 100%;height: 30%;">
	<!-- //main -->
</body>
</html>