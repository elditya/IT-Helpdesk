<?php 
include '../control/koneksi.php';
$id = $_GET['id'];
mysqli_query($host, "DELETE FROM user WHERE id ='$id'");

echo '<script language="javascript" type="text/javascript">
alert("data berhasil di hapus!");</script>';
echo "<meta http-equiv='refresh' content='2; url=index.php'>";


header("location:user_control.php?pesan=hapus");
?>