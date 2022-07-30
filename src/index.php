<!DOCTYPE html>
<html lang="en">
<head>
<title>Show databases in MySQL server by aman</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1>Show databases in MySQL server</h1>
<?php
include('connection.php');

// if (strlen( $db_name ) === 0)
//   $conn = new mysqli("$db_host:$db_port", $db_user, $db_pass);
// else
//   $conn = new mysqli("$db_host:$db_port", $db_user, $db_pass, $db_name);
//
// // Check connection
// if ($conn->connect_error)
// 	die("Connection failed: " . $conn->connect_error);


echo "<h3>Voter list</h3><ul>";
echo "<li>Voter list</li>";
echo "<li>Voter list</li>";
echo "<li>Voter list</li>";
echo "</ul>";
// $result=mysqli_query($conn,'select *from category_list');
// while($row = mysqli_fetch_assoc( $result ))
// {
//     echo $row['category']."<br />";
// }


?>
</div>
</body>
</html>
