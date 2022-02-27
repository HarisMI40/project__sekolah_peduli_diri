<?php
session_start();
if(!isset($_SESSION['nik'])){
    header("location:login.php");
}
$koneksi = mysqli_connect("localhost","root","","peduli_diri");

