<?php
    session_start();
    require_once 'config.php';
    $sql = mysqli_query($link, "SELECT * FROM `users`");
    $sql = mysqli_fetch_all($sql);
?>
<!DOCTYPE html>
<html lang="ru" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slid.css">
    <link rel="icon" sizes="32x32" href="img/logo.png">
    <title>Vhod</title>
</head>
<body>
    <div style="text-align: center; padding-top:200px" class="container">
        <form action="add_vxod.php" method="POST"><br>
        <h2>Вход</h2>
            <input type="text" id="login" name="login" class="input w-25" placeholder="Введите логин"> <br> <br>
            <input type="password" id="pass" name="pass" class="input w-25" placeholder="Введите пароль"> <br><br>

            <button class="btn btn-primary w-25" >Вход</button><br> <br>
        </form>
        <a href="registr.php"><p class="lead t1">Вы не зарегистрированы? </p></a>
        <button class="btn btn-primary w-25" onclick="window.location.href = 'index.html'" type="submit">Вернуться обратно</button><br>  
    </div>
</body>
</html>