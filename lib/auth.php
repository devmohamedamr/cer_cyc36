<?php

$connect =  mysqli_connect("localhost","root","","lmsroute");

function checkEmailAndPassword($email,$password){
    $query = mysqli_query($GLOBALS['connect'],"SELECT * FROM `instructors` WHERE `email` = '$email' AND `password` = '$password'");
    $row = mysqli_fetch_assoc($query);
    return $row;
}