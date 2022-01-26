<?php
session_start();
require  "lib/auth.php";

if(isset($_POST['login'])){
//if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $data =  checkEmailAndPassword($_POST['email'],$_POST['password']);
    if(!empty($data)){
        $_SESSION['user'] = $data;
        header("location: index.php");
    }else{
        header("location: login.php");
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="post">
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="submit" name="login" value="login">
</form>
</body>
</html>
