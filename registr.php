<?php
 require_once 'config.php';
 $sql = mysqli_query($link, "SELECT * FROM `users`");
 $sql = mysqli_fetch_all($sql);
 session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.css">
    <title>Регистрация</title>
</head>
<body  style="text-align: center" class="container">
    <form action="add_registr.php" method="POST">
        <br> <br>
        <h2>Регистрация</h2> <br>
        <input type="text" id="login" name="login" class="input w-25" placeholder="Придумайте логин"> <br> <br>
        <input type="text" id="name" name="name" class="input w-25" placeholder="Введите имя"> <br> <br>
        <input type="password" id="pass" name="pass" class="input w-25" placeholder="Придумайте пароль"> <br><br>
        <input type="password" id="pass1" name="pass1" class="input w-25" placeholder="Повторите пароль"> <br><br>
        <p><input type="checkbox" id="approval" name="approval"> Я согласен на обработку данных</p><br>
        
        <button class="btn btn-primary w-25" onclick="window.location.href = 'vxod.php'" type="submit">Зарегистрироваться</button><br>  
    </form>

</body>
</html>