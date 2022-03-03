<?php 

include '../control/koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$inisial = $_POST['inisial'];
$jabatan = $_POST['jabatan'];
$jenis = $_POST['jenis'];
$waktu_pembuatan = $_POST['waktu_pembuatan'];
$status_pengerjaan = $_POST['status_pengerjaan'];
$jenis_kerusakan = $_POST['jenis_kerusakan'];
$waktu_selesai = $_POST['waktu_selesai'];

mysqli_query($host, "UPDATE kerusakan SET nama='$nama',
 inisial = '$inisial',
 jabatan = '$jabatan',
 jenis ='$jenis',
 jenis_kerusakan = '$jenis_kerusakan',
 waktu_pembuatan ='$waktu_pembuatan' ,
 status_pengerjaan = '$status_pengerjaan',
 jenis_kerusakan = '$jenis_kerusakan' ,
 waktu_selesai = '$waktu_selesai' WHERE id ='$id'");

header("location:it_home.php?pesan=input")

?>