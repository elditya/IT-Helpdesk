<?php
	session_start();
include '../control/koneksi.php';
require_once "../vendors/autoload.php";
$query_mysql = mysqli_query($host, "SELECT * FROM kerusakan WHERE status_pengerjaan LIKE 'selesai'");
$mpdf = new \Mpdf\Mpdf();
$html ='
<html>
<head>
<style>

.border {
    border: 1px solid black;
    border-collapse: collapse;
    width: 100%;
  }

</style>
 <title>Reprt PDF</title>
</head>
<body>
<h2>Report Laporan Tiket Yang Selesai</h2>
<table border="1" class="border" cellpadding="10">
<tr bgcolor="#6495ED">
<th>ID Tiket </th>
<th>Nama </th>
<th>Inisial </th>
<th>Jabatan </th>
<th>deskripsi </th>
<th>Jenis Kerusakan </th>
<th>Waktu Pembuatan Tiket </th>
<th>Waktu Penyelesaian Tiket </th>
</tr>';

while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){
    $html .= '<tr>
                <td>'. $data["id"].'</td>
                <td>'. $data["nama"].'</td>
                <td>'. $data["inisial"].'</td>
                <td>'. $data["jabatan"].'</td>
                <td>'. $data["jenis"].'</td>
                <td>'. $data["jenis_kerusakan"].'</td>
                <td>'. $data["waktu_pembuatan"].'</td>
                <td>'. $data["waktu_selesai"].'</td>

                </tr>';
                }
            


$html .= '</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();