<?php
include "koneksi.php";

$suhu = $_POST["suhu"];
$lokasi = $_POST["lokasi"];
$tanggal = $_POST["tanggal"];
$waktu = $_POST["waktu"];

$query = mysqli_query($koneksi, "insert into catatan_perjalanan values('', '$tanggal', '$waktu','$lokasi','$suhu')");

if($query){
    header("location:tampil.php");
}