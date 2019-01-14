<?php

session_start();
if(!$_SESSION['login'] || ! $_SESSION['password']){
    header('Location: login.php');
    die();
}



if($_POST['unlogin']){
    session_destroy();
    header('Location: login.php');
}


?>


<body style="font-size: 40px; background-color: <?=$_SESSION["color"]?>;">
    <p>Сайт только для авторизированых пользователей</p>
<?
    echo "Привет, " . $_SESSION['login'] . "<br/>";
?>
    <form method="POST" style="margin: 40px;font-size: 40px">
        <input style="font-size: 30px" type="submit" name="unlogin" value="На страницу авторизации!">
    </form>
</body>

