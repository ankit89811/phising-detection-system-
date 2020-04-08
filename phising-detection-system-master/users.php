  <!DOCTYPE html>
<html>
<head>
  <title>Banking</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <style>
    
    body{
      background-color: #403c52;
    }
    
    ul {
  list-style-type: none;
  margin: 0;
  padding: 7px;
  overflow: hidden;
  background-color: #f3f4f3;
}

li {
  float: right;
}

li a {
  display: block;
  color: #403c52;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #a77b6e;
  color: white;
}</style>
</head>
<body>

<?php

    $serverName="localhost";
  $userName="root";
  $passwords="";
  $dbName="DBI";

  $conn=new mysqli($serverName, $userName,$passwords,$dbName);
  if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
 else{
      echo "<script>alert('successfully connect')</script>";
}




 


// if($conn->query($add_query))
//     {
//         echo "<script>alert('record created')</script>";
//     }
// else {
//         echo "<script>alert($conn->error)</script>";
//   }

?>

    <div class="container">
    <ul>
      <li style="float: left;"><a  href="#">Banking</a></li>
  <li><a href="users.php">Users</a></li>
  <li><a href="blacklist.php">Add to Blacklist</a></li>
  <li><a href="addword.php">Add words</a></li>
  <li><a  href="viewlist.php">View list</a></li>
  <li><a  href="viewfeed">View Feedback</a></li>
  <li><a  href="#">Change Password</a></li>
  <li><a  href="#">Logout</a></li>
</ul>

  <div class="container" style="background-color: #a77b6f;">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      
    </tr>
  </thead>
  <tbody>
    <center><h2 style="color: white;">Users Details</h2></center>
    <?php
      $sql = "SELECT * FROM signup  ";
$result = $conn->query($sql);
$r_id = $r_name = $r_pass = $r_email = '';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        

  echo "<tr>";
      echo "<th scope='row'>".$row['id']."</th>";
      echo "<td>".$row['name']."</td>";
      echo "<td>".$row['email']."</td>";
      
  echo "</tr>";

    }
} else {
    
    echo "<script>alert(' failed')</script>";
}
?>
   
   
  </tbody>
</table>
  </div>
  </div>



</body>
</html>





