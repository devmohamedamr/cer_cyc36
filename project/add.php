<?php
session_start();

if(empty($_SESSION['user']) || $_SESSION['user']['role'] == 1){
    header("location: login.php");
}
require  "lib/category.php";

if(isset($_POST['category'])){
    if($_POST['category'] != ''){

        $res = add($_POST['category']);
        if($res == 1){
            setcookie("msg","category inserted", time() + 2,'/');
//        echo "row inserted";
            header("location: index.php");
        }else{
            echo "error";
        }
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
    <form action="add.php" method="post">
        <input type="text" name="category">
        <input type="submit" value="add">
    </form>
</body>
</html>
