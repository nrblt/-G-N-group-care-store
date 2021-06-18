<?php

    require_once('/Applications/MAMP/htdocs/Coding lab project/DBConnection.php');
    $database = new DBConnection();

    $usr=$_SESSION['username'];
    $car_name=$_POST['car_name'];
    $car_model=$_POST['car_model'];
    $car_type=$_POST['car_type'];
    $car_volume=$_POST['car_volume'];
    $car_fuel_type=$_POST['car_fuel_type'];
    $car_mileage=$_POST['car_mileage'];
    $car_trans=$_POST['car_trans'];
    $car_color=$_POST['car_color'];
    $car_location=$_POST['car_location'];
    $car_price=$_POST['car_price'];

    $database->addCar($usr,$car_name,$car_model,$car_type,$car_volume,$car_fuel_type,$car_mileage,$car_trans,$car_color,
        $car_location,$car_price);

?>

<!--

        YOUR HTML CODE COULD BE HERE

-->