<?php

require "lib/category.php";

update($_POST['category'],$_POST['id']);

header("location: index.php");