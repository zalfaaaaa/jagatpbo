<?php
$id = $_GET['id'];

$db =new PDO("mysql:host=localhost;dbname=bandungsugoi",'root','');
$query = $db->query("select * from murid where id=$id");

$data = $query->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update Data</title>
</head>
<body>
    
    <form action="renovasi.php" method="POST" class="container mt-5">
    <input type="hidden" name="id" value="<?= $id ?>">
    <h1>Ubah Data!</h1>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input class="form-control" type="text" name="nama" value="<?= $data['nama'] ?>">
        </div>
        <br>
        <div class="mb-3">
            <label class="form-label">Class : </label>
            <select class="form-select" name="kelas" id="">
                <option value="DKV" <?= $data['id'] == 'DKV' ? 'selected' : '' ?>>DKV</option>
                <option value="IF" <?= $data['id'] == 'IF' ? 'selected' : '' ?>>IF</option>
                <option value="SASING" <?= $data['id'] == 'SASING' ? 'selected' : '' ?>>SASING</option>
            </select>
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="simpan">
    </form>
</body>
</html>