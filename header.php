<?php
require("function.php");

if(isset($_GET['out'])){
    session_unset();
    session_destroy();
    header("location: index.php");
}

if(!isset($_SESSION['usr'])){
    session_unset();
    session_destroy();
    header("location: index.php");
}
if(isset($_REQUEST['insert2']) && $_REQUEST['insert2']=="ins2"){
    array_pop($_POST);
    insert("customers", $_POST);
    header('location:customers.php');
}

if(isset($_REQUEST['update2']) && $_REQUEST['update2']=="udt2"){
    array_pop($_POST);
    $id = $_POST['id'];
    update("customers", $_POST, "id=".$id);
    header("location: customers.php");
}


if(isset($_REQUEST['insert1']) && $_REQUEST['insert1']=="ins1"){
    array_pop($_POST);
    insert("items", $_POST);
    header('location:items.php');
}

if(isset($_REQUEST['update1']) && $_REQUEST['update1']=="udt1"){
    array_pop($_POST);
    $id = $_POST['id'];
    update("items", $_POST, "id=".$id);
    header("location: items.php");
}
if(isset($_REQUEST['insert']) && $_REQUEST['insert']=="ins"){
    array_pop($_POST);
    insert("pricerules", $_POST);
    header('location:pricerules.php');
}

if(isset($_REQUEST['update']) && $_REQUEST['update']=="udt"){
    array_pop($_POST);
    $id = $_POST['id'];
    update("pricerules", $_POST, "id=".$id);
    header("location: pricerules.php");
}
if(isset($_REQUEST['delete'])){
    del(sales);
    header("location: salev1.php");

}




?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="cartcss.css">
  
  
	<title> Document</title>
	
</head>
<body onload="startTime()">

  <div class="container">
    <div class="row">
          <nav class="navbar navbar-default nav-btm ctmenu" data-spy= data-offset-top="0" data-offset-bottom="200">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><img src="images/logo.png" id="logo"></a>
                </div>

                      <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class=""><a href="index.html">Dashboard</a></li>
                    
                  </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                      <li><div id="txt"></div></li> <!-- Clock-->
                      <li><a href="#"><i class="fa fa-bell-o fa-2x" aria-hidden="true"></i></a></li> <!-- Flags-->
                      <li><span class="bfh-countries" data-country="US" data-flags="true"></span></li>

                        <li><a href="#"><i class="fa fa-user-o fa-2x" aria-hidden="true"></i>&nbsp;&nbsp; <?php echo $_SESSION['usr']; ?></a></li> <!-- User ID-->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
      </div><!-- End Of NavBar -->

    <div class="row">
    <div class ="sidebarcustom col-md-2">
    <nav class="navbar navbar-default sidebar col-md-12 sideee" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Dashboard<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li><a href="customers.php">Customers<span style="font-size:16px;"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
        <li ><a href="items.php">Items<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
        <li ><a href="pricerules.php">Price Rules<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
        <li ><a href="salev1.php">Sale<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-usd"></span></a></li>
        <li ><a href="storage.php">Storage<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-hdd"></span></a></li>
        
        <li ><a href="locations.php">Locations<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li ><a href="giftcards.php">Gift Cards<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-credit-card"></span></a></li>
        <li ><a href="barcode.php">Barcode<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-barcode"></span></a></li>
        <li ><a href="home.php?out=<?php echo $_SESSION['usr']; ?>">Log Out<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-log-out"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
    <!-- Sidebar End -->

<div class="contents col-md-10">