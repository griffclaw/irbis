<?php
session_start();
require_once 'config.php';

if ($_POST["pass"] == $_POST["pass1"] && $_POST['approval'] == 'on') {
    //Вставляем данные, подставляя их в запрос
    $pass=$_POST['pass'];
    $passmd5 = md5($pass);
    
    $name = $_POST['name'];
    $login = $_POST['login'];

    $_SESSION['user_namee'] = $name;
    $_SESSION['user_email'] = $e_mail;
    $_SESSION['user_phone'] = $phone;
    if (mb_strlen($pass) >= 5) {
        $sql = mysqli_query($link, "INSERT INTO `users` ( `login`, `name`, `password`) VALUES ('$login', '$name', '$passmd5')");
        header('Location: vxod.php');
    }else{
        echo "<h3 style = 'color: red'>Недопустимая длина пароля, меньше 5 символов</h3>";   
    }
    
}else {
    echo "<h3 style = 'color: red'>Неверны введены данные</h3>";
}

?>
 