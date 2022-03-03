<?php 

include '../control/koneksi.php';

$id = $_POST['id'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$level      = $_POST ['level'];
$inisial    = $_POST['inisial'];
$jabatan    = $_POST['jabatan'];

mysqli_query($host, "UPDATE user SET username='$username', password ='$password',level ='$level', inisial = '$inisial', jabatan = '$jabatan'  WHERE id ='$id'");

header("location:user_control.php?pesan=input");

?>