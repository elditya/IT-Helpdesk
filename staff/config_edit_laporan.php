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
$foto_lama = $_POST['foto_lama'];

if ( $_FILES['foto_kerusakan']['error'] === 4 ){
    $foto_kerusakan = $foto_lama;
} else {
    $foto_kerusakan = $_FILES["foto_kerusakan"]["name"];
    move_uploaded_file($_FILES["foto_kerusakan"]["tmp_name"],'../assets/images/'.$foto_kerusakan);
}




mysqli_query($host, "UPDATE kerusakan SET nama='$nama',
 inisial = '$inisial',
 jabatan = '$jabatan',
 jenis ='$jenis',
 jenis_kerusakan = '$jenis_kerusakan',
 waktu_pembuatan ='$waktu_pembuatan' ,
 status_pengerjaan = '$status_pengerjaan',
 jenis_kerusakan = '$jenis_kerusakan' ,
 waktu_selesai = '$waktu_selesai',
 foto_kerusakan = '$foto_kerusakan' WHERE id ='$id'");

header("location:home_staff.php?pesan=input")


?>