<?php 
include '../koneksi.php';


$id  = $_POST['id'];
$nama  = $_POST['nama'];
$email  = $_POST['email'];
$hp  = $_POST['hp'];
$alamat  = $_POST['alamat'];
$pwd  = $_POST['password'];
$password  = md5($_POST['password']);


// cek gambar
$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if($pwd=="" && $filename==""){
	mysqli_query($koneksi, "update member set member_nama='$nama', member_email='$email', member_hp='$hp', member_alamat='$alamat' where member_id='$id'");
	header("location:member.php");
}elseif($pwd==""){
	if(!in_array($ext,$allowed) ) {
		header("location:member.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/member/'.$rand.'_'.$filename);
		$x = $rand.'_'.$filename;
		mysqli_query($koneksi, "update member set member_nama='$nama', member_email='$email', member_hp='$hp', member_alamat='$alamat', member_foto='$x' where member_id='$id'");		
		header("location:member.php?alert=berhasil");
	}
}elseif($filename==""){
	mysqli_query($koneksi, "update member set member_nama='$nama', member_email='$email', member_hp='$hp', member_alamat='$alamat', member_password='$password' where member_id='$id'");
	header("location:member.php");
}

