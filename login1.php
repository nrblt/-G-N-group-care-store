<?php

require_once('/Applications/MAMP/htdocs/Coding lab project/header.php');

require_once('/Applications/MAMP/htdocs/Coding lab project/DBConnection.php');
$database = new DBConnection();
//
if(!empty($_GET['username'])&&!empty($_GET['password'])){
    echo $database->isUserIn($_GET['username'],$_GET['password']);
    exit;}
?>

<!DOCTYPE html>
<html>
<head>
    <title> SignUp </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->
    <link href="style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
</head>
<body>
<div class="main-w3layouts wrapper">
    <h1>Log in</h1>
    <div class="main-agileinfo">
        <div class="agileits-top">
            <form action="login1.php" method="get">
                <input class="text" type="text" name="username" placeholder="Username" required="">
                <input class="text w3lpass" type="password" name="password" placeholder="Password" required="">

                <input class="" type="submit" value="SIGNIN" style="background: #04a1a1; border: 0px">
            </form>
            <p>Don't have an Account? <a href="../Final%20coding/userregistr.html"> Sign up Now!</a></p>
        </div>
    </div>

    <?php
    require_once('/Applications/MAMP/htdocs/Coding lab project/footer.php');

    //        ?>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>