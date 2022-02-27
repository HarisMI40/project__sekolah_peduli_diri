<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/header.css">
    <link rel="stylesheet" href="asset/css/tambah.css">
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
        <div class="container main border border-dark">
            <table width="80%" height="80%">
                <form action="proses_tambah.php" method="POST">
                    <tr>
                        <td>Tanggal</td>
                        <td><input type="date" name="tanggal" class="form-control" id="tanggal"></td>
                    </tr>
                    <tr>
                        <td>Waktu</td>
                        <td><input type="text" name="waktu" class="form-control" id="waktu"></td>
                    </tr>
                    <tr>
                        <td>Lokasi</td>
                        <td><input type="text" name="lokasi" class="form-control" id="lokasi"></td>
                    </tr>
                    <tr>
                        <td>Suhu Tubuh</td>
                        <td><input type="text" name="suhu" class="form-control" id="suhu"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="text-end"> <button type="submit" class="btn btn-primary">Simpan</button></td>
                    </tr>
                </form>
            </table>
        </div>
    </body>
</html>