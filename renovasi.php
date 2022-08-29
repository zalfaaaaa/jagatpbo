<?php

$nama=$_POST['nama'];
$kelas=$_POST['kelas']; 
$id=$_POST['id'];

$update = new PDO('mysql:host=localhost;dbname=bandungsugoi','root','');
$query = $update->query("update `murid` set `nama`='$nama', `kelas`='$kelas' where `id`='$id'");

if($query){
    header('location:crud.php');
}