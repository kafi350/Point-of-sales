<?php
	
require("connection.php");
// session_start();
session_start();

function insert($table, $data){
	global $con;
	// $sql = "INSERT INTO table(a, b) VALUES('x', 'y')";
	$sql = "INSERT INTO ".$table."(".implode(',', array_keys($data)).") VALUES('".implode("','", array_values($data))."')";
	print_r($sql);
	// die();
	mysqli_query($con, $sql);
}

function select($qry){
	global $con;
	$run = mysqli_query($con, $qry);
	return $run;
}

function update($table, $data, $where){
	global $con;
	// $sql = "UPDATE student SET firstname='fn', lastname='ln' WHERE id='id'";
	$cols = array();
	foreach($data as $k=>$v){
		$cols[] = "$k='$v'";
	}
	$sql = "UPDATE ".$table." SET ".implode(",", $cols)." WHERE ".$where;
	// print_r($sql);
	// die();
	$run = mysqli_query($con, $sql);
	return $run;
}

function delete($table, $where){
	global $con;
	// $sql = "DELETE FROM table WHERE id=id";
	$sql = "DELETE FROM ".$table." WHERE ".$where;
	$run = mysqli_query($con, $sql);
	return $run;
}
function sale($table, $where){
    global $con;

    $sql = "SELECT * FROM".$table."WHERE".$where;
    $run = mysqli_query($con, $sql);
    return $run;
}
function add($table, $sum, $sprice){
    global $con;
    $sum = $sum + $sprice;
    return $sum;
}
function remove($table, $sum, $sprice,$where){
    global $con;
    $sum = $sum - $sprice;
    $sql = "DELETE FROM".$table."Where".$where;
    $run = mysqli_query($con,$sql);
    return $run;
}

function count_i(){
    global $con;
    $sql = "SELECT sum(quantity) as total from items";
    $run = mysqli_query($con, $sql);
    return $run;
}
function search($table, $name){
    global $con;
    $sql = "SELECT * FROM".$table."WHERE".$name;
    $run = mysqli_query($con, $sql);
    return $run;

}
function del($table){
    global $con;
    $sql = "DELETE FROM".$table;
    $run = mysqli_query($con, $sql);
    return $run;

}

//function search_item($table, $_POST) {
//    global $con;
//    $by_category = $_POST['by_category'];
//    $by_size = $_POST['by_size'];
//    $by_price = $_POST['by_price'];
//    $by_quantity = $_POST['by_quantity'];
//
//    //Do real escaping here
//
//    $query = "SELECT * FROM" .$table;
//    $conditions = array();
//
//    if($by_category !="") {
//        $conditions[] = "category='$by_category'";
//    }
//    if($by_size !="") {
//        $conditions[] = "size='$by_size'";
//    }
//    if($by_price !="") {
//        $conditions[] = "price='$by_price'";
//    }
//    if($by_quantity !="") {
//        $conditions[] = "quantity='$by_quantity'";
//    }
//
//    $sql = $query;
//    if (count($conditions) > 0) {
//        $sql .= " WHERE " . implode(' AND ', $conditions);
//    }
//    $run = mysqli_query($con, $sql);
//
//
//
//    return $run;
//}




