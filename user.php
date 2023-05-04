<?php
    session_start();
    require_once 'config.php';
    $sql = mysqli_query($link, "SELECT * FROM `users`");
    $sql = mysqli_fetch_all($sql);
    $uploaddir = 'img/';
    if($_POST['submit'] = 1 and isset($_FILES['userfile']['name'])) {
        if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir. $_FILES['userfile']['name'])) {
            $name = $_FILES['userfile']['name'];
            $query_ava = mysqli_query($link, "UPDATE `users` SET `ava` = '".$name."' WHERE `users`.`id` =".$_SESSION['user_id']);
        }
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="add_vxod.php">
    <title>Личный кабинет пользователя</title>
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
    <table action="add_vxod.php" class="sec1 container" style="margin-top: 100px; margin-bottom: 200px;">
        <h2 class="container" style="padding-top: 100px;">Ваши данные:</h2>
        <tr style="background: #7c7c7c;">
            <th>login</th>
            <th style="background: #949494;">name</th>
        </tr>
        <?php
            foreach($sql as $item){
                if($_SESSION['user_id'] == $item[0]){
                ?>
                    <tr style="background: #bdbdbd;">
                        <td style="background: #dbdbdb;"> <?= $item[1] ?> </td>
                        <td> <?= $item[3] ?> </td>
                      
                    </tr>
                   
                <?php
                
                }
            }
        ?>
        </table>
        <!-- footer -->
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