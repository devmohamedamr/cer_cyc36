<?php

session_start();

if(empty($_SESSION['user'])){
    header("location: login.php");
}


require "lib/category.php";

if(isset($_GET['keyword'])){
    $data =  search($_GET['keyword']);
}else{
    $data = show();

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
    <a href="add.php">add new data</a>
    <form action="index.php" method="get">
        <input type="text" name="keyword">
        <input type="submit">
    </form>
    <table border="1">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>delete</th>
            <th>update</th>
        </tr>

        <!--   php     -->
        <?php if(!empty($data)): ?>
        <?php foreach ($data as $row): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['title']; ?></td>
            <td><a href="delete.php?id=<?= $row['id']; ?>">delete</a></td>
            <td><a href="update.php?id=<?= $row['id']; ?>">update</a></td>
        </tr>
        <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">no data</td>
            </tr>
        <?php endif; ?>
        <!--    endphp    -->
    </table>
</body>
</html>


