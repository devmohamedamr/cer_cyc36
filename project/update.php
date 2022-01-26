<?php
session_start();

if(empty($_SESSION['user']) || $_SESSION['user']['role'] == 1){
    header("location: login.php");
}
require "lib/category.php";

$id = $_GET['id'];


$row =  getCategoryById($id);

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
    <form action="edit.php" method="post">
        <input type="text" name="category" value="<?= $row['title']; ?>">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <select name="gender">
            <option value="1" <?php if($row['gender'] == 1):?>  selected <?php endif; ?>  >male</option>
            <option value="2"  <?php if($row['gender'] == 2):?>  selected <?php endif; ?>>female</option>
        </select>
        <input type="submit" value="update">
    </form>
</body>
</html>
