<?php

$nama=$_POST['nama'];
$kelas=$_POST['kelas'];

$plus = new PDO('mysql:host=localhost;dbname=bandungsugoi','root','');
$query = $plus->query("insert into murid values ('','$nama','$kelas');");

if($query){
    header('location:index.php');
}