<?php
$link = mysqli_connect('localhost','root','');
$database = mysqli_select_db($link,'mybb');

$user = $_GET['username'];

$sql = "SELECT * FROM mybb_users WHERE username = '". mysqli_real_escape_string($link,$user) ."'" ;
$result = $link->query($sql);

if ($result->num_rows > 0) {
	// Outputting the rows
	while($row = $result->fetch_assoc()) {
		
		echo $row['usergroup'] . ",";
		echo $row['additionalgroups'];
				
	}
} 
else
{
	echo "No user with the username " . $user;
}
/*

*/
?>

<html>
<head>
<title>PHP account check return</title>
<meta http-equiv="refresh" content="1" />
</head>

<body>
</body>
