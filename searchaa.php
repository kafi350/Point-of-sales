<?php
include("connection.php");

if(isset($_REQUEST['search'])){
	$searchq = $_REQUEST['search'];
	$searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

	$query = mysql_query("SELECT * FROM `items` WHERE (`name(s)` LIKE    '%.".$searchq."%'");
	$count = mysql_num_row($query);
	if($count==0){
	$output = "there is no result!!";
	}
	else{
	while($row = mysql_fetch_array($query)){
	$name = $row['name'];
	$id = $row['id'];

	$output .= '<div> '.$name.''.$id.'</div>';
	}
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action ="searchaa.php" method="post">
	<input type="text" name="search" placeholder="search">
	<input type="submit" name="" value="">
</form>
	
</body>
</html>