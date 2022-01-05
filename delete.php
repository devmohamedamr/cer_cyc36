<?php
session_start();

if(empty($_SESSION['user'])){
    header("location: login.php");
}
require "lib/category.php";

$id =  $_GET['id'];


delete($id);

header("location: index.php");