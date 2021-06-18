<?php
//session_start();

    if(!empty($_POST['car_name'])){
//        echo 111;
//        exit;
//
    require_once('/Applications/MAMP/htdocs/Coding lab project/DBConnection.php');
    $database=new DBConnection();
    session_start();
    $database->addCar($_SESSION["user"],$_POST['car_name'],$_POST['car_model'],$_POST['car_type'],$_POST['car_vol'],$_POST['car_fuel'],$_POST['car_mil'],
        $_POST['car_tran'],$_POST['car_color'],$_POST['car_loc'],$_POST['car_price'],$_POST['car_img']);

        header('Location:index.php');

    }

//echo $_SESSION["user"];
require_once('/Applications/MAMP/htdocs/Coding lab project/header.php');
//echo $_SESSION["user"];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  	<link rel="stylesheet" type="text/css" href="configurator.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="222.css">

    <title>Creating post</title>
</head>
<body>
	<div class="container-field">
<!--		<div class="row header" style="background: #082c2c; color: white; font-size: px; width: px">-->
<!--      <div class="dropdown" style="background: #082c2c">-->
<!--        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #082c2c">-->
<!--            Main Menu-->
<!--        </button>-->
<!--        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">-->
<!--          <a class="dropdown-item" href="../../../../Users/macbook/Downloads/222.html">Main Menu</a>-->
<!--          <a class="dropdown-item" href="Task 5-2.html">Choose your future car</a>-->
<!--          <a class="dropdown-item" href="#low">Contacts</a>-->
<!--        </div>-->
<!--      </div>-->
<!--        <div class="col-sm"><span class="icon">&#9742;</span>+7(777)-75-57-757</div>-->
<!--        <div class="col-sm"><span class="icon">&#9873;</span>  г. Нур-Султан, ул. Иманова, дом 28/3, 3, 4543</div>-->
<!--        <div class="col-sm">-->
<!--          <button></button>-->
<!--          <button></button>-->
<!--          <button></button>-->
<!--          <button></button>-->
<!--        </div>-->
<!--        <div class="col-sm" style="margin-top: 1%">-->
<!--          <input class="input-group-prepend" placeholder="Find">-->
<!--        </div>-->
<!--    </div>-->

        <form action="edit.php" method="post">
      <div class="row">

        <div class="col-lg-10 mt-2" style="background: white; margin-left:px; line-height: 45px;">


        <div class="row">
          <div class="col-sm-4">Car image</div>
          <div class="col-sm-8">
<!--                <textarea></textarea>-->
              <input class="form-control" name="car_img"placeholder="Car image">

          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Car name</div>
          <div class="col-sm-8">
                <input class="form-control" name="car_name"placeholder="Car name">
              </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Car model</div>
          <div class="col-sm-8">
                <input class="form-control" name="car_model" placeholder="Car model">
              </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Car type</div>
          <div class="col-sm-8">
                <input class="form-control" name="car_type"placeholder="Car type">
              </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Engine volume</div>
          <div class="col-sm-8">
                <input class="form-control" name="car_vol"placeholder="Engine volume">
              </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Fuel type</div>
          <div class="col-sm-8">
                <input class="form-control" name="car_fuel"placeholder="Fuel type">
              </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Mileage</div>
          <div class="col-sm-8">
            <input class="form-control" name="car_mil" placeholder="Mileage">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Transmition</div>
          <div class="col-sm-8">
            <input class="form-control" name="car_tran"placeholder="Transmission">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Car color</div>
          <div class="col-sm-8">
            <input class="form-control" name="car_color"placeholder="Car color">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Location</div>
          <div class="col-sm-8">
            <input class="form-control" name="car_loc"placeholder="Location">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Car price</div>
          <div class="col-sm-8">
            <input class="form-control"name="car_price" placeholder="Car price">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
              <input class="button btn-dark mb-2" style="background: #082c2c; width:100%" type="submit" value="Create">
          </div>
        </div>
      </div>

        </form>


      <div class="col-lg-2 mt-2" style="background: #082c2c; height:20%; line-height: 27px">
        <a class="" href="userregistr.html" style="color: white;text-decoration: none;">User registration</a><br>
        <a href="edit.php" style="color: white;text-decoration: none;">Adding advert</a><br>
        <a href="Configurator.html" style="color: white;text-decoration: none;">Choose your future car</a>
      </div> 

    </div>

<!--    <div class="row footer" id="low">-->
<!--      <div class="col-4 container">-->
<!--        <span>G&N group </span>-->
<!--      </div>-->
<!--      <div class="col-4 container" style="line-height: 37px;">-->
<!--        <span>Наш офис</span><br>-->
<!--        <span class="icon">&#9742;</span>+7(777)-75-57-757<br>-->
<!--        <span class="icon">&#9873;</span>  г. Нур-Султан, ул. Иманова, дом 28/3, 3, 4543<br>-->
<!--        <img src="pict/facebook.png" width="50" height="50">-->
<!--        <img src="pict/vk.png" width="50" height="50">-->
<!--        <img src="pict/twitter.png" width="50" height="50">-->
<!--        <img src="pict/odnokl.png" width="50" height="50">-->
<!--      </div>-->
<!--      <div class="col-4 container">-->
<!--        <span>Напишите нам </span>-->
<!--        <input class="form-control" style="" placeholder="E-mail">-->
<!--        <input class="form-control" style="">-->
<!--        <input >Отправить</input>-->
<!--      </div>-->
<!--    </div>-->
	</div>

    <?php
    require_once('/Applications/MAMP/htdocs/Coding lab project/footer.php');

    //        ?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>