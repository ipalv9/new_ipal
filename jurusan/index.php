<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jurusan</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
<?php INCLUDE('../navbar.php');
?>
<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="float-start">Data Jurusan</h3>
                <span class="float-end"><a class="btn btn-success" href="form.php"><i class="fa-solid fa-square-plus"></i> Tambah Data</a></span> 
            </div>
            <div class="card-body">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Kode</th>
                <th scope="col">Nama Jurusan</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("../koneksi.php");

                $tampil = "SELECT * FROM jurusans";

                $proses = mysqli_query($koneksi, $tampil);
                $nomor =1;
                foreach($proses as $data){

                ?>
                <tr>
                    <th scope="row"><?=$nomor++?></th>
                    <td><?=$data['kode']?></td>
                    <td><?=$data['jurusan']?></td>
                    <td>
                        <a class="btn btn-info" href=""><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger" href=""><i class="fa-solid fa-trash"></i></a>              
                   </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
</div>

<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script src="../js/all.js"></script>
</body>
</html>