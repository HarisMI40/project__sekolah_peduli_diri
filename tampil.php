<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/header.css">
    <link rel="stylesheet" href="asset/css/tampil.css">
    <link rel="stylesheet" type="text/css" href="asset/datatable/DataTables-1.11.4/css/jquery.dataTables.min.css">

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
            <table width="80%" class="display" id="myTable">
                <thead>
                    <tr>
                        <td>Tanggal</td>
                        <td>Waktu</td>
                        <td>Lokasi</td>
                        <td>Suhu Tubuh</td>
                    </tr>

                </thead>
                <tbody>
                    <?php 
                        include "koneksi.php";

                        $query = mysqli_query($koneksi, "select * from catatan_perjalanan");
                        while ($data = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td><?php echo $data["tanggal"]; ?></td>
                                <td><?php echo $data["waktu"]; ?></td>
                                <td><?php echo $data["lokasi"]; ?></td>
                                <td><?php echo $data["suhu_tubuh"]; ?></td>
                             </tr>
                        <?php } ?>
                   
                    <!-- <tr>
                        <td colspan='4' class='text-end'><a href='tambah.php' class='btn btn-success'>Isi Catatan Perjalanan</a></td>
                    </tr> -->

                  
                </tbody>
            </table>
            <a href='tambah.php' style="position:absolute;margin-top:20px;right:0;margin-right:40px" class='btn btn-success button_link'>Isi Catatan Perjalanan</a>
        </div>
        
        <script src="asset/datatable/jQuery-3.6.0/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" charset="utf8" src="asset/datatable/DataTables-1.11.4/js/jquery.dataTables.js"></script>


        <script>
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        </script>
    </body>
</html>