<?php
session_start();
if (empty($_POST['password']) or empty($_POST['username'])){
	header('Location: index.php?p=isi username dan password');
	
}else{
	mysql_connect("localhost","root","");
	mysql_select_db("kko");

	$user=$_POST["username"];
	$pass=$_POST["password"];

	$cek=mysql_query("SELECT * FROM login_kas where (npm='$user' OR nama='$user') and password='$pass'");
	$jumlah=mysql_num_rows($cek);
	$data=mysql_fetch_array($cek);

	if($jumlah!==0){

		$_SESSION["nama"]=$data["nama"];
		$_SESSION["npm"]=$data["npm"];
	
		$_SESSION['login']="true";
		header('location: admin.php');
	
	}else{
		header('location: index.php?p=username atau password salah');
	}
}
?>
