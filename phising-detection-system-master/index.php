<!DOCTYPE html>
<html>
<head>
	<title>Login form design</title>
	
<style>
	
body{
	margin:0;
	padding: 0;

	font-family: sans-serif;
	width: auto;
	height: auto;
	background-color: #FAACA8;
	background-image: linear-gradient(19deg, #FAACA8 0%, #DDD6F3 100%);

}

.loginbox{
	width: 320px;
	height: 420px;
	background: #000;
	color: #00c853;
	top: 100px;
	left: 500px;
	position:relative;
	/*transform: translate(180%,-50%);*/
	box-sizing: border-box;
	padding: 70px 30px;
}
.login{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left:100px;
}
h1{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
}
.loginbox p{
	margin:0;
	padding: 0;
	font-weight: bold;
}
.loginbox input{
	width: 100%;
	margin-bottom: 20px;
}


.loginbox input[type="text"], input[type="password"]
{
	border:none;
	border-bottom: 1px solid #fff;
	background:transparent;
	outline: none;
	height: 40px;
	color:#fff;
	font-size: 16px;
}
.loginbox input[type="submit"]
{
	border:none;
	outline: none;
	height: 40px;
	background:#fb2525;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;


}

.loginbox a{
	text-decoration:none;
	font-size: 12px;
	line-height: 20px;
	color:darkgrey;
}

.loginbox a:hover{
	color:#ffc107;
}

.loginbox input[type="submit"]:hover{
	cursor: pointer;
	background-color: blue;
	color:#000;
}

</style>
<body>



<?php
$name = $password = "";
$email='';
$serverName="localhost";
$userName="root";
$passwords="";
$dbName="DBI";

$conn=new mysqli($serverName, $userName,$passwords,$dbName);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	session_start();
	$_SESSION['name']=$_POST['username'];
	header('Location:profile.php');

  if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["username"];

  }
  
  if (empty($_POST["password"])) {
    $passErr = "password is required";
  } 
  else {
  		$password=$_POST["password"];
  }
   

$sql = "SELECT * FROM signup WHERE name='$name' AND password='$password' ";
$result = $conn->query($sql);
$r_id = $r_name = $r_pass = $r_email = '';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	$r_id = $row["id"];
    	$r_name = $row["name"];
    	$r_pass = $row["password"];
    	echo "<script>alert('welcome ". $r_name . "')</script>";
        echo '<script>
           window.location = "nav.php"
      </script>';


    }
} else {
    // echo "0 results";
    echo "<script>alert('login failed')</script>";
}
 
}
?>
	<div class="loginbox">
	<img src="login.png" class="login">
	<h1>Login </h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		<p>Username</p>
		<input type="text" name="username" placeholder="Username">
		<p>Password</p>
		<input type="Password" name="password" placeholder="Enter password">
		<input type="submit" name="" value="login">
		<a href="#">Forget password</a><br>
		<a href="signup.php">Dont have an account</a>
	</form>

	</div>
</head>
</body>
</html>
