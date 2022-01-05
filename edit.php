<?php
session_start();

if(empty($_SESSION['user'])){
    header("location: login.php");
}
require "lib/category.php";

update($_POST['category'],$_POST['id']);

header("location: index.php");