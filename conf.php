<?php

require_once('/Applications/MAMP/htdocs/Coding lab project/DBConnection.php');
$database=new DBConnection();
session_start();
//echo $_SESSION["user"];
require_once('/Applications/MAMP/htdocs/Coding lab project/header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="configurator.css">
    <title>Configurator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>

    <link rel="stylesheet" href="222.css">
</head>
<body>
<div class="container-field">


    <div class="row">
        <div class="ch container">
            <form action="newfinding.php" method="post">
                <div class="form-group">
                    <input type="" name="city" placeholder="Город">
                </div>
                <div class="form-group">
                    <select class="form-control" name='name'id="exampleFormControlSelect1">
                        <option>Toyota</option>
                        <option>Mercedes-Benz</option>
                        <option>Volkswagen</option>
                        <option>BMW</option>
                        <option>Kia</option>

                        <option>Shevrolet</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="radio" name="answer" value="a1">Новые
                    <input type="radio" name="answer" value="a2">С пробегом
                </div>
                <div class="form-group">
                    <label>
                        Тип кузова
                    </label>
                </div>

                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Седан</option>
                        <option>Универсал</option>
                        <option>Хэтчбек</option>
                        <option>Лимузин</option>
                        <option>Купе</option>
                        <option>Родстер</option>
                        <option>Кабриолет</option>
                        <option>Внедорожник</option>
                        <option>Кроссовер</option>
                        <option>Микровэн</option>
                        <option>Минивэн</option>
                        <option>Микроавтобус</option>
                        <option>Фургон</option>
                        <option>Пикап</option>
                        <option>Тарга</option>
                        <option>Фастбек</option>
                        <option>Лифтбек</option>
                        <option>Хардтоп</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>
                        КПП
                    </label>
                </div>

                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Механика</option>
                        <option>АКПП</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>
                        Расположение руля
                    </label>
                </div>

                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Слева</option>
                        <option>Справа</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>
                        Привод
                    </label>
                </div>

                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Полный</option>
                        <option>Передний</option>
                        <option>Задний</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>
                        Тип топлива
                    </label>
                </div>

                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1" name="fuel">
                        <option>Бензин</option>
                        <option>Дизель</option>
                        <option>Газ-бензин</option>
                        <option>Gas</option>
                        <option>Гибрид</option>
                        <option>Электричество</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>
                        Пробег
                    </label>
                </div>
                <div class="form-group">
                    <input type="" name="" placeholder="От">
                    <input type="" name="" placeholder="До">
                </div>
                <div class="form-group">
                    <label>
                        Объем двигателя
                    </label>
                </div>
                <div class="form-group">
                    <input type="" name="" placeholder="От">
                    <input type="" name="" placeholder="До">
                </div>
                <div class="form-group">
                    <label>
                        Год выпуска
                    </label>
                </div>
                <div class="form-group">
                    <input type="" name="" placeholder="От">
                    <input type="" name="" placeholder="До">
                </div>
                <div class="form-group">
                    <label>
                        Цена
                    </label>
                </div>
                <div class="form-group">
                    <input type="" name="" placeholder="От">
                    <input type="" name="" placeholder="До">
                </div>
                <div class="form-group">
                    <button class="submit text-primary"  style="">
                        Показать
                    </button>
                </div>
            </form>
        </div>
    </div>

    <?php
    require_once('/Applications/MAMP/htdocs/Coding lab project/footer.php');

    //        ?>
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>