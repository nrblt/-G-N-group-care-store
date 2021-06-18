<?php
require_once('/Applications/MAMP/htdocs/Coding lab project/DBConnection.php');
require_once('/Applications/MAMP/htdocs/Coding lab project/header.php');

$database = new DBConnection();
//$id=1;
$idd =$_GET['id'];

$res=$database->getById($idd);
//var_dump($res);      %КУ
$i=0;
foreach ($res as $des){
    $seller_name=$des['car_seller'];
    $i++;
    if($i==1)break;
}
//$seller_name=$res['car_seller'];
$users=$database->getData("seller");
$sel_id=0;
echo "<br>";
echo "<br>";
foreach ($users as $des){
    if($seller_name==$des['seller_username']){
        $sel_id=$des['seller_id'];

        break;
    }


}
//echo $sel_id;
$data_of_seller=$database->getByName($sel_id);
//echo $seller_name;
//echo $data_of_seller[0]['seller_username'];
//var_dump($data_of_seller);

?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="222.css">
    <link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        *{
            /*border:1px red solid;*/
            padding:0px;
            margin:0px;

        }
    </style>
</head>
<body>
<div class="container-field">

    <div class="row">
        <div class="col-md-8 " >
            <img class="p-2" src="<?php echo $res[0]['car_image']?>"  width="600" height="390" >
            <h3 class="p-2"><?php echo $res[0]['car_name']?></h3>
            <span class="p-2">Price: <?php echo $res[0]['car_price']?>tg</span>
            <p class="p-2">Полная комплектация High-Tech. Гарантия 5 лет. Камера заднего вида 360 с динамической разметкой. Система кругового обзора. Машина новая! </p>


        </div>
        <div class="col-lg-2 p">
            <h2>Name:<?php echo $res[0]['car_name']?></h2>
            <span>Phone Number: <?php echo $data_of_seller[0]['seller_phone_number']?></span><br>
            <span>City:<?php echo $res[0]['car_location']?></span><br>
            <span>Fuel type:<?php echo $res[0]['car_fuel_type']?></span><br>
            <span>Volume:<?php echo $res[0]['car_volume']?></span><br>
            <span>Mileage:<?php echo $res[0]['car_mileage']?></span><br>
            <span>Transmission:<?php echo $res[0]['car_transission']?></span><br>
            <span>Color:<?php echo $res[0]['car_color']?></span><br>


        </div>
        <div class="col-lg-2 mt-2" style="background: #082c2c; height:20%; line-height: 27px">
            <a class="" href="registration.php" style="color: white;text-decoration: none;">User registration</a><br>
            <a href="edit.php" style="color: white;text-decoration: none;">Adding advert</a><br>
            <a href="" style="color: white;text-decoration: none;">Choose your future car</a>
        </div>
    </div>

</div>
<!--<script src="https://c...content-available-to-author-only...y.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<!--<script src="https://c...content-available-to-author-only...e.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
<!--<script src="https://m...content-available-to-author-only...n.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->

</body>
</html>
<?php require_once('/Applications/MAMP/htdocs/Coding lab project/footer.php');
?>