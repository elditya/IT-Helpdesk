<?php 
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$login = mysqli_query($host,"SELECT * FROM user WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);

//admin
	if($data['level']=="admin"){

		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:../home.php");

//staff
	}else if($data['level']=="staff"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "staff";
		header("location:../staff/home_staff.php");

//it support
	}else if($data['level']=="it"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "it";
		header("location:../it/it_home.php");

	}else{
		echo "<script>alert('Username atau Password salah !!!'); document.location='../index.php'</script>";
	}	
}else{
	echo "<script>alert('Username atau Password salah !!!'); document.location='../index.php'</script>";
}

?>