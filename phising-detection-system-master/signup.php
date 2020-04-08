<!DOCTYPE html>
<html>
<head>
	<title>Login form design</title>
<!-- 	<link rel="stylesheet" type="text/css" href="styles.css"> -->
	<style >
		.error{
			color: red;
		}



		body{
	margin:0;
	padding: 0;
	/*background: url(images/image.jpg);*/
	/*background-size: cover;
	background-position: bottom;*/
	font-family: sans-serif;
	width: auto;
	height: auto;
	background-color: #FAACA8;
	background-image: linear-gradient(19deg, #FAACA8 0%, #DDD6F3 100%);

}

.loginbox{
	width: 400px;
	height: 600px;
	background: #000;
	color: #00c853;
	top: 40px;
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
	left:140px;
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
</head>


<?php

$nameErr = $emailErr =$passwordErr=$cpasswordErr="";
$name = $email = $password=$cpassword="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } 
  else {
    $name = test_input($_POST["username"]);
    
    if (!preg_match("/^[a-zA-Z\s ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  // password

if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
     $password = test_input($_POST["password"]);
     $cpassword = test_input($_POST["cpassword"]);
    if (strlen($_POST["password"]) <= '6') {
        $passwordErr = " At Least 6 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        $passwordErr = " At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $passwordErr = " At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $passwordErr = " At Least 1 Lowercase Letter!";
    }
}
elseif(!empty($_POST["password"])) {
    $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
} else {
     $passwordErr = "Please enter password   ";
}


    
$serverName="localhost";
$userName="root";
$passwords="";
$dbName="DBI";

$conn=new mysqli($serverName, $userName,$passwords,$dbName);



$add_query="INSERT INTO signup (name,password,email) VALUES ('$name','$password','$email')";

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "<script>alert('Connected successfully')</script>";

if($conn->query($add_query))
{
    echo "<script>alert('Record created')</script>";
    echo '<script type="text/javascript">
           window.location = "nav.php"
      </script>';
}
else {
    echo "<script>alert('failed to add record $conn->error')</script>";
}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<body>
	<div class="loginbox">
	<img src="login.png" class="login">
	<h1>Signup </h1>
	<form method="post" action=""> 
		<p>Username</p>
		<input type="text" name="username" placeholder="Username" value="<?php echo $name;?>">
		<span class="error">* <?php echo $nameErr;?></span>
		<p>Email</p>
		<input type="text" name="email" placeholder="abc@xyz.com" value="<?php echo $email;?>">
		<span class="error">* <?php echo $emailErr;?></span>
		<p>Password</p>
		<input type="Password" name="password" placeholder=" password">
		<span class="error">* <?php echo $passwordErr;?></span>
		<p>Confrim Password</p>		
		<input type="Password" name="cpassword" placeholder="confirm password">
		<span class="error">* <?php echo $cpasswordErr;?></span>
		<input type="submit" name="signup" value="Signup">

<!-- 		<a href="#">Forget password</a><br>
		<a href="#">Dont have an account</a> -->
		<a href="index.php">I have an account</a>
	</form>

	</div>
<?php


?>

</body>
</html>

