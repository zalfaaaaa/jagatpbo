<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="kian.php" method="POST" class="container mt-5">
        <h1>Tambah Data!</h1>
        <div class="mb-3">
            <label class="form-label">Name : </label>
            <input class="form-control" type="text" name="nama">
        </div>
        <br>
        <div class="mb-3">
            <label class="form-label">Class : </label>
            <select class="form-control" name="kelas" id="">
                <option value="DKV">DKV</option>
                <option value="IF">IF</option>
                <option value="SASING">SASING</option>
            </select>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Save">
    </form>
</body>
</html>