<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/header.css">
    <link rel="stylesheet" href="asset/css/home.css">

</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img class="gambar-header" src="https://wonogirikab.go.id/wp-content/uploads/2020/09/Peduli.png" alt="">
                </div>
                <div class="col-md-10">
                    <h1>Peduli liri</h1>
                    <p>Catatan perjalanan</p>
                    <div>
                        <a href="home.php">Home</a> |
                        <a href="tampil.php">Catatan Perjalan</a> |
                        <a href="tambah.php">Isi Data</a> 
                        <!-- <div><a href="#" class="link-primary">Primary link</a></div> -->
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <div class="container main">
        <div class="p-3 border border-dark">
            <p>Selamat datang <?php echo $_SESSION["nama_lengkap"]?> di aplikasi peduli diri</p>
        </div>
        <a name="" id="" class="btn btn-success mt-3 text-end tombol_link" href="tambah.php" role="button">Catatan Perjalanan</a>
    </div>
</body>
</html>