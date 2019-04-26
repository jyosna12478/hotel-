<?php
//echo "flag0";
session_start();
$servername = "localhost";
$username = "root";
$password = file_get_contents('/Applications/AMPPS/ampps/data/my.conf');
$dbname = "authentication";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT * FROM users";
$sq="SELECT Username FROM users";
$result=mysqli_query($conn,$sql);
//echo mysqli_num_rows($result);
$res=mysqli_query($conn,$sq);
$user="";
$email="";
$password="";
$password1="";
$errors=array();

if(isset($_POST['submit1']))
{
	
	$res=mysqli_query($conn,$sq);
	$Username= $_POST['Username'];

	$email=$_POST['email'];
	$password=$_POST['password'];
	$password1=$_POST['password1'];
	
	if(count($errors)==0) {

		if($password==$password1)
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
				echo("Username already exists");

			else
				{


					$query2="INSERT INTO users(Username,email,password) VALUES('$Username','$email','$password')";
					if(mysqli_query($conn,$query2)){
						array_push($errors,"successfully inserted");
							}
					else
					{
						echo "Error:".$sql."<br/>".mysqli_error($conn);
					}
				}	
		}
		else
		{
			array_push($errors,"Password doesnt match");
		}
		
	}
		/*else{
			array_push($errors,"An account already exists with this Username");
		}*/

}

if(isset($_POST['login'])) {
	$user=mysqli_real_escape_string($conn,$_POST['Username']);	
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	if(empty($user)){
		array_push($errors, "Username is required");
	}
	if(empty($password)){
		array_push($errors, "Password is Required");
	}
	if(count($errors)==0) {
		
		$sql="select * FROM users WHERE password = '$password' AND Username = '$user'";
		$q=mysqli_query($conn,$sql);
		if(!$q || (mysqli_num_rows($q))==1){
		
			$_SESSION["Username"]=$user;
			$_SESSION["success"]=true;
			header('location: afterlogin.php');
	}
	else{
			array_push($errors,"Not a valid Username/Password");
	}
}
}


if(isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['Username']);
	header('location: home.php');
}
?>