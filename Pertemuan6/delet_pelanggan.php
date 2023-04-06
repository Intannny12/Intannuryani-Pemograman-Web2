<?php 
    require_once 'dbkoneksi.php';
?>
<?php

$id = $_GET['iddel'];

$sql = "DELETE FROM pelanggan WHERE id = $id";
$dbh->query($sql);

header('location:list_pelanggan.php');