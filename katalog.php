<?php
session_start();
require_once 'config.php';
$sql = mysqli_query($link, "SELECT * FROM `kategory`");
$sql = mysqli_fetch_all($sql);
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Каталог</title>
</head>
<body>
    <div class="header">
        <a href="index.html"><img src="img/02_02_21.png" alt=""></a>
        <div class="menu">
            <a href="info.html">О заводе</a>
            <a href="katalog.php">Котлы</a>
            <a href="sfera.html">Услуги</a>
            <a href="contact.html">Контакты</a>
            <a href="team.html">Наша команда</a>
            <p>+7-800-511-10-44</p>
            <a href="vxod.php" class="btn btn-secondary py-1 px-4 border-black bg-primary btn1">Войти</a>
        </div>
    </div>
    <br>
    <br>
    <!-- sec1 -->
    <div class="container-fluid d-flex w-100 h-100 mx-auto flex-column">
        <h1 class="h-100 sec1 text-center px-1">Категория товаров</h1>
        <div class="sec1 h-100 d-flex actions">
            <?php
                $sql = mysqli_query($link, 'SELECT* FROM `kategory`');
                while ($result = mysqli_fetch_array($sql)) {
                echo "<div class='card bonaf' style='width: 27rem;'> 
                <div class='card-body'> <img src=img/{$result['img']} style='width: 400px;' alt=''>
                <p class='card-text'>{$result['opis']}</p> 
                <a href=\"catalog.php?id_c=".$result['id_c']."\" class='btn btn-primary'>Подробнее</a></div></div>";
                }                
            ?>
        </div>
    </div>
    <footer class="footer">
        <div class="container d-flex w-65 h-100 mx-auto">
                <div class="px-1 block">
                    <nav class="container nav nav-mastfoot flex-column float-md-start mb-0">
                        <a class="nav-link fw-bold py-1 px-0 active" href="index.html">Главная</a>
                        <a class="nav-link fw-bold py-1 px-0" href="info.html">О заводе</a>
                        <a class="nav-link fw-bold py-1 px-0" href="sfera.html">Услуги</a>
                        <a class="nav-link fw-bold py-1 px-0" href="contact.html">Контакты</a>
                    </nav>
                </div>
            <div class="h-f text-center text-black-50 justify-content-center">
                <a href="index.html"><h3 class="text-center text-white">Завод котельного оборудования «Ирбис»</h3></a>
                <h5 class="t-f mt-auto text-white">Политика конфиденциальности <br> All Rights Reserved.</h5>
            </div>
        </div>
    </footer>
</body>
</html>