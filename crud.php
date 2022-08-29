<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Doc.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <?php
        include "connect.php";
        $earth = new satelite();
        $db = $earth->getSatelite();
        $query = $db->query('select * from murid');
        ?>

        <a href="kianajang.php" class="btn btn-dark mb-3">Menambahkan Data</a>

        <ul class="list-group">

        <?php

        while($data = $query->fetch()):?>
        <li class="list-group-item d-flex justify-content-between">

        <a href="renovasiajang.php?id=<?=$data['id'];?>"><?=$data['nama'];?></a>

        <a href="gaib.php?id=<?=$data['id'];?>" class="btn btn-danger">Delete Data</a>

        </li>
        <?php endwhile ?>
       </ul>
    </div>
</body>
</html>