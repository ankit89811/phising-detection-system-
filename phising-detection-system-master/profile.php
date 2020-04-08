  <?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
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
$name = $_SESSION['name'];

$serverName="localhost";
$userName="root";
$passwords="";
$dbName="DBI";

$conn=new mysqli($serverName, $userName,$passwords,$dbName);

$sql = "SELECT * FROM signup WHERE name='$name' ";


$result = $conn->query($sql);
$r_id = $r_name = $r_pass = $r_email = '';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $r_id = $row["id"];
      $r_name = $row["name"];
      $r_pass = $row["password"];
      $r_email=$row["email"];
      


    }
} else {
    // echo "0 results";
    echo "<script>alert(' failed')</script>";
}
?>


<div class="topnav" id="myTopnav">
   <a href="#Logout">Log-out</a>
   <a href="feedback.php">Feedback</a>
   <a href="checksite.php">Check Website</a>
   <a href="profile.php" class="active">My Profile</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div style="margin: 0px 300px; background-color: #f3f4f3; padding: 100px;">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Profile Details</th>
      
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td>Name</td>
   
      <td><?php echo $_SESSION['name']; ?></td>
    </tr>
    <tr>
      
      <td>Email</td>
     
      <td><?php echo $r_email;?></td>
    </tr>
    <tr>
      
      <td >Password</td>
      <td><?php echo $r_pass;?></td>
    </tr>
  </tbody>
</table>
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
