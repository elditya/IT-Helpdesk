<?php 

include '../control/koneksi.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$inisial = $_POST['inisial'];
$jabatan = $_POST['jabatan'];

mysqli_query($host, "INSERT INTO user VALUES('$id','$username','$password', '$level', '$inisial', '$jabatan')");

header("location:user_control.php?pesan=input");

?>