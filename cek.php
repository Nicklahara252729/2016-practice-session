<?php
	session_start();
	$username=$_POST["username"];
	$password=$_POST["password"];
	$user="budi";
	$pass="budimu";
	if(isset($_POST['proses'])==1){
	if($username !=""&& $password !=""){
	if($username == $user && $password ==$pass){
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	include('admin.php');}
	else{
	echo"<font color=red><h3>Data yang diisi tidak cocok !</h3></font>";
	}
	}
	else{
	echo"<font color=red>Form Loggin Belum Lengkap !</font>";
	}
	}
?>