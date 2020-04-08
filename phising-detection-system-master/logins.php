<!DOCTYPE html>
<html>
<head>
<title>LogIn Form</title>
    <style>
         body{
             background-image: url("login.jpg");
             background-size: cover;
             background-repeat: no-repeat;
             background-position:fixed;
 
         }
    header
        {margin:0px;
     background:rgba(0, 0, 0, 0.8);
     height:100vh;
     
        }
   .h2div
   {
border:none;
 
border-bottom:1px solid green;
border-width: 5px;
width:200px;
height: 60px;
border-radius: 40px;

 
 
   }
    .div1{
        padding: 20px;
        transform: translate(0px,120px);
        color:white;
         border:none;
         border-top: 1px solid green;
          
         border-radius: 20px;
         border-bottom: 1px solid green;
         border-width: 5px;
        width:370px;
        height: 400px;
    }
    .div2{
        transform: translate(0px,50px);
         
         
    }
    .div3{
        width:200;
    height: 25px;
        border:2px solid white;
        border-radius: 5px;
        padding:2px;
      background-color: white;
      color:Black;
      font-family:arial black;  
         
         
    }
    button:hover
    {
background-color: lightgreen;
color:white;
border:transparent;
transition: 0.6s ease;
font-size: 1em;

    }
     
    .UPdiv{
   float:left;
   color:white;
    font-family: arial black;
      
    }
    .inputtext
 {padding: 5px;
     background:transparent;
     border:none;
     border-bottom:2px solid white;
     color:white;

 }  
 #inputtext:hover
 {
 color: black;
  background: lightgreen;
  border:transparent;
  border-radius: 10px;
 font-size: 14px;
 transition: 0.9s ease;
 }
     
    </style>
</head>
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
   

$sql = "SELECT * FROM login WHERE name='$name' AND password='$password' ";
$result = $conn->query($sql);
$r_id = $r_name = $r_pass = $r_email = '';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $r_id = $row["int"];
        $r_name = $row["name"];
        $r_pass = $row["password"];
        echo "<script>alert('welcome ". $r_name . "')</script>";
        echo '<script>
           window.location = "bannking.php"
      </script>';


    }
} else {
    // echo "0 results";
    echo "<script>alert('login failed')</script>";
}
 
}
?>


<form method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
        <div class="maindiv">
<header>
 
<center>
<div class="div1">
   <br> <div class="h2div"><marquee><h2>Login Here</h2></marquee></div><br><br>
     <div class="div2">&nbsp;
     <div class="UPdiv">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            Username:
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            &nbsp; 
            
            Password:
        
        </div>
        <br>
        <br>
<input type="text"id="inputtext" name="username" class="inputtext"placeholder="Enter Username">&nbsp;&nbsp;
<input type="password"id="inputtext" name="password" class="inputtext" placeholder="Enter Password">
<br><br><br><br>
<div>
<input  class= "btn btn-block btn-warning"type="submit" name="" value="login">
</div>
</div>

</div>
</center>

</header>
<br>
</div>
 </form>
  </body>
  </html>