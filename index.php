<?php

    require("function.php");
    if(isset($_REQUEST['login']) && $_REQUEST['login']=="log"){

        $u = $_POST['username'];
        $p = $_POST['password'];

        $sql = select("SELECT * FROM login WHERE username='$u' AND password='$p'");
        $row = mysqli_fetch_array($sql);

        if(mysqli_num_rows($sql) == 1){
            $_SESSION['usr'] = $row['username'];
            header("location: home.php");
        }
    }
    if(isset($_SESSION['usr'])){
        header("location: home.php");
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="login_style.css">
    <title>Document</title>
</head>
<body>
<div class="modal-dialog custom">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="text-center">Welcome MMF POS</h1>
        </div>
         <div class="modal-body">
         <form name="form" method="post">
             <div class="form-group">
                 <input type="text" class="form-control input-lg" placeholder="username" name="username"/>
             </div>

             <div class="form-group">
                 <input type="password" class="form-control input-lg" placeholder="*******" name="password"/>
             </div>

             <div class="form-group">
                 <input type="submit" class="btn btn-block btn-lg btn-primary" value="log" name="login" />
                 <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Forgot Password</a></span>
             </div>
             </form>
         </div>
    </div>
 </div>


    
    <script type="text/javascript" src="js/jquerylib.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/canvasjs/canvasjs.min.js"></script>
    <script type="text/javascript" src="login_js.js" ></script>
    
</body>
</html>
