<?php

require "lib/category.php";

$id =  $_GET['id'];


delete($id);

header("location: index.php");