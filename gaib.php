<?php

$id=$_GET['id'];

$db = new PDO('mysql:host=localhost;dbname=bandungsugoi','root','');
$query = $db->query("delete from `murid` where `id`='$id'");

if($query){
    header('location:crud.php');
}