
<?php
//include("validation.php");
session_start();
$servername="localhost";
$username="root";
$password=file_get_contents('/Applications/AMPPS/ampps/data/my.conf');

$conn=mysqli_connect($servername,$username,$password,"authentication");
if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}
$password1="";
$password2="";
$sql="SELECT * FROM users";
$sq="SELECT Username FROM users";
$result=mysqli_query($conn,$sql);
//echo mysqli_num_rows($result);
$res=mysqli_query($conn,$sq);
if(isset($_POST['Username']))
	$Username= $_POST['Username'];
if(isset($_POST['email']))
	$email=$_POST['email'];
if(isset($_POST['password']))
	$password1=$_POST['password'];
if(isset($_POST['password1']))
	$password2=$_POST['password1'];
$errors=array();



if(!empty($password1)){
	if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password1)){
	    array_push($errors,"Your password is strong.");
	} 
}



if(($password1 == $password2) && !empty($password1))
{
$flag=0;
	while($row=mysqli_fetch_assoc($res))
	{
		$riname=$row["Username"];
		if($Username==$riname)
		{
			$flag=1;
		}
	}
	if($flag)
		array_push($errors,"Username already exists");

	else
		{
			$query2="INSERT INTO users(Username,email,password) VALUES('$Username','$email','$password1')";
			header('location:aftersignup.php');
			if(!mysqli_query($conn,$query2)){
				array_push($errors,"successfully inserted");
					}
			else
			{
				//echo "Error:".$sql."<br/>".mysqli_error($conn);
			}
		}	
}
else
{
	if(!empty($password1))
		array_push($errors,"Password doesnt match");
}



?>


<!DOCTYPE html>
<html>
<head>
<title> SignUp Form</title>
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
    padding: 10px;
}

/* The Modal (background) */


/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 3% auto ; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; 
    position:absolute;/* Could be more or less, depending on screen size */
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
</head>
<body style="background-color: black">
	<!-- main -->
	<img src="back.jpg" width="80%" class="img" style="opacity: 0.5;
        filter: alpha(opacity=10);
        position: absolute;
        height: 650px;
            width: 100%;">
  
  <p style="font-family: comic-sans;color:white;position: absolute;padding-left: 130px;font-size: 33px;width: 100%;"><i>SHANGRI-LA PREFERRED GUEST</i></p>
  <img src="logo.png" class="logo" width="85" style="position:absolute;display: block;margin-left: 15px;">
  <p style="color: white;position: absolute;display: inline-block;margin-top: 75px;margin-left: 8px;font-size: 23px;">Shangri-La</p>

  <div style="padding-left: 300px;padding-top: 50px;background-color: black;">

		<div >
			<div>

				<form class="modal-content"action="signupnew.php" method="post">
					<div class="container">
					<?php include("errors1.php"); ?>
					<h1 style="text-align: center;margin-top: 0px;">SIGN UP FORM!</h1>
					<label><b>USERNAME</b></label>
					<input type="text" name="Username" placeholder="Username" required=""><br>
					<label><b>EMAIL</b></label><br>
					<input type="text"" name="email" placeholder="Email" required="" >
					<label><b>PASSWORD</b></label><br>
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<label><b>CONFIRM PASSWORD</b></label><br>
					<input class="text w3lpass" type="password" name="password1" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" name="submit1" value="SIGN UP!" style="font-size: .9em;
  color: #fff;
  background: grey;
  outline: none;
  border: 1px solid #462d59;
  cursor: pointer;
  padding: 0.9em;
  width: 80%;
  margin: 2em 0;
  letter-spacing: 4px;
  margin-left: 70px;">
				</form>
				
			</div>
		</div>
		
		
	</div>

	<!-- //main -->
</body>
</html>