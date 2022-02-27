<?php
$koneksi = mysqli_connect("localhost","root","","peduli_diri");
$nik = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];
$query = mysqli_query($koneksi, "select * from user where nik='$nik' AND nama_lengkap='$nama_lengkap'");

if(mysqli_num_rows($query) > 0){
    session_start();
    $_SESSION["nik"] = $nik;
    $_SESSION["nama_lengkap"] = $nama_lengkap;

    header("location:home.php");
}else{
    echo "Data tidak ditemukan, nik atau nama lengkap mungkin salah";
}