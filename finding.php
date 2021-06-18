<?php

require_once('/Applications/MAMP/htdocs/Coding lab project/DBConnection.php');
$database=new DBConnection();
//echo $_POST['find'];
require_once('/Applications/MAMP/htdocs/Coding lab project/header.php');

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>

    <link rel="stylesheet" href="222.css">
</head>

    <div class="row ads">

<?php
    $res=$database->findBystart($_POST['find']);

foreach ($res as $ca) {
$img=$ca['car_image'];
$name=$ca['car_name'];
$pr=$ca['car_price'];
$col=$ca['car_color'];
$id1=$ca['car_id'];

    echo <<<htmlblock
    <div class='col-sm-3 ad' >
    <a href = 'description.php?id=$id1' style = 'text-decoration: none;' >
        <img src = "$img"  width = '200' height = '130' border = '2' >
        <h3 > $name </h3 >
        <span > Цена: $pr tg </span >
        <br>
        <span > Color: $col </span >

        <p > Полная комплектация High - Tech . Гарантия 5 лет . Камера заднего вида 360 с динамической разметкой . Система кругового обзора . Машина новая! </p >
    </a >
</div >

htmlblock;
}
?>

</div>
<?php
require_once('/Applications/MAMP/htdocs/Coding lab project/footer.php');

//        ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
