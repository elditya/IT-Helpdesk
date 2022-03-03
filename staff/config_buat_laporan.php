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

if(!empty($_FILES["foto_kerusakan"]["name"])){
    $foto_kerusakan = $_FILES["foto_kerusakan"]["name"];
    move_uploaded_file($_FILES["foto_kerusakan"]["tmp_name"],'../assets/images/'.$foto_kerusakan);
}


mysqli_query($host, "INSERT INTO kerusakan VALUES('$id','$nama','$inisial','$jabatan','$jenis', '$waktu_pembuatan' , '$status_pengerjaan' , '$jenis_kerusakan' , '$waktu_selesai', '$foto_kerusakan')");
header("location:home_staff.php?pesan=input");

?>