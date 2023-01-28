<?php
session_start();
require_once 'setting/crud.php';
require_once 'setting/koneksi.php';
require_once 'setting/tanggal.php';

$user=$_POST['username'];
$pass=$_POST['password']; 

//Pengecekan ada data dalam login tidak
$sqladmin="Select id_admin from tb_admin where username='$user' and password='$pass' and level_admin='Administrasi'";
$sqladmin1="Select id_admin from tb_admin where username='$user' and password='$pass' and level_admin='Kepala'";
$sqluser="Select id_unit from tb_user where username='$user' and password='$pass' and level_user='Transaksi'";
$sqluser1="Select id_unit from tb_user where username='$user' and password='$pass' and level_user='Ketua'";


$hasil=$_POST['angka1']+$_POST['angka2'];
if($_POST['hasil']==$hasil){

	unset($_SESSION['salah']);
	if (CekExist($mysqli,$sqladmin)== true){

    //JIka data ditemukan
		$_SESSION['admin']=caridata($mysqli,$sqladmin);
		$_SESSION['admin_status']="Admin apk";
		echo "<script>alert('Anda login sebagai admin apk')</script>";
		echo "<script>window.location='admin/index.php?hal=beranda';</script>";

	}else if (CekExist($mysqli,$sqladmin1)== true){

    //JIka data ditemukan
		$_SESSION['admin']=caridata($mysqli,$sqladmin1);
		$_SESSION['admin_status']="Admin Kepala";
		echo "<script>alert('Anda login sebagai admin Kepala')</script>";
		echo "<script>window.location='admin/index.php?hal=beranda';</script>";

	}else if (CekExist($mysqli,$sqluser)== true){

    //JIka data ditemukan
		$_SESSION['id']=caridata($mysqli,$sqluser);
		$_SESSION['user_status']="User Transaksi";
		echo "<script>alert('Anda login sebagai user Transaksi')</script>";
		echo "<script>window.location='user/index.php?hal=beranda';</script>";

	}else if (CekExist($mysqli,$sqluser1)== true){

    //JIka data ditemukan
		$_SESSION['id']=caridata($mysqli,$sqluser1);
		$_SESSION['user_status']="User Kepala";
		echo "<script>alert('Anda login sebagai user Ketua')</script>";
		echo "<script>window.location='user/index.php?hal=beranda';</script>";

	}else{
    //Jika tidak ditemukan
		echo "<script>alert('Username atau Password tidak terdaftar')</script>";
		echo "<script>window.location='index.php';</script>";

	}
}else{
	$_SESSION['salah']='Tidak Sesuai';
	echo "<script>window.location='index.php';</script>";

}

?>