<?php
require_once '../dbkoneksi.php'

// menangkap data dari iddel dari URL
$is = $_GET['iddel'];

$sql = "DELETE FROM kartu WHERE id = $id";
$sql->query($sql);

header('location:index.php');
