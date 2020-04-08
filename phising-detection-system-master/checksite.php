<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
  p{
    color: red;
  }
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("pic.png");
}

.topnav {
  overflow: hidden;
  background-color:#FAEBD7;
}

.topnav a {
  float: right;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color:none;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }


}
</style>
</head>
<body>

	<?php




		$serverName="localhost";
	$userName="root";
	$passwords="";
	$dbName="DBI";

	$conn=new mysqli($serverName, $userName,$passwords,$dbName);

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $url=$_POST['checkurl'];
      if (!$conn) {
      		die("Connection failed: " . mysqli_connect_error());
			}
 else{
			echo "<script>alert('successfully connect')</script>";
}

    

$sql = "SELECT * FROM blacklist WHERE url='$url' ";
$result = $conn->query($sql);
$r_id = $r_url="";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      // $r_id = $row["id"];
      // $r_url = $row["url"];
      
     


    }
} else {
    // echo "0 results";
    echo "<script>alert('login failed')</script>";
}
}
?>

<div class="topnav" id="myTopnav">
   <a href="#Logout">Log-out</a>
   <a href="feedback.php">Feedback</a>
   <a href="#CheckWebsite">Check Website</a>
   <a href="profile.php" class="active">My Profile</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div style="margin: 0px 300px; background-color: #f3f4f3; padding: 100px;">
  <h2>Checking of Websites</h2>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" name="checkurl" style="width: 100%;">
    <input type="submit" name="check" class="btn btn-primary" style="margin: 5px;"  value="check">
  </form><center><p>Blacklisted site</p>
  <p>It is unsecured beacuse it use http instead of https.</p>
  <p>Title and Description are not found.</p></center>
  
<?php
        echo "<iframe src='$url' width='550' height='500'>
  <p>Your browser does not support iframes.</p>
</iframe>";
?>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
