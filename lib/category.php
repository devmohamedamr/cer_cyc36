<?php

$connect =  mysqli_connect("localhost","root","","lmsroute");


function add($data){
    mysqli_query($GLOBALS['connect'],"INSERT INTO `category` (`title`) VALUES ('$data')");

    return mysqli_affected_rows($GLOBALS['connect']);
}


function delete($id){

    mysqli_query($GLOBALS['connect'],"DELETE FROM `category` WHERE `id` = $id");

    return mysqli_affected_rows($GLOBALS['connect']);
}


function update($data,$id){
    mysqli_query($GLOBALS['connect'],"UPDATE `category` SET `title` = '$data' WHERE `id` = $id");

    return mysqli_affected_rows($GLOBALS['connect']);
}


function show(){
    $query = mysqli_query($GLOBALS['connect'],"SELECT * FROM `category`");

    while($row = mysqli_fetch_assoc($query)){
        $data[] = $row;
    }

    return $data;
}

function getCategoryById($id){
    $query = mysqli_query($GLOBALS['connect'],"SELECT * FROM `category` WHERE `id` = $id");
    $row = mysqli_fetch_assoc($query);

    return $row;
}