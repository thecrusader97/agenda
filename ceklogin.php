<?php 

session_start();
 

include 'config.php';
 

$username = $_POST['username'];
$password = md5($_POST['password']);
 
 

$login = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($login);
 

if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 

	if($data['level']=="admin"){
 
	
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
	
		header("location:tupoksi.php");
 
	
	}else if($data['level']=="team"){
		
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "team";
		
		header("location:team/tupoksi.php");
 
	
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>