
<!DOCTYPE html>

<html>
<head>
	<title>Phising Detector</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style >
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
}

/*.container{
	border-radius: 2px;
}*/

	</style>
</head>
<body>
	<div class="container">
		<ul>
			<li style="float: left;"><a  href="#">Banking</a></li>
  <li><a href="users.php">Users</a></li>
  <li><a href="blacklist.php">Add to Blacklist</a></li>
  <li><a href="addword.php">Add words</a></li>
  <li><a  href="viewlist.php">View list</a></li>
  <li><a  href="viewfeed.php">View Feedback</a></li>
  <li><a  href="#">Change Password</a></li>
  <li><a  href="#">Logout</a></li>
</ul>
	</div>

</body>
</html>
