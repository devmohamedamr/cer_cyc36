<?php
session_start();

if(empty($_SESSION['user']) || $_SESSION['user']['role'] == 1){
    header("location: login.php");
}
require "lib/category.php";

update($_POST['category'],$_POST['id']);

header("location: index.php");