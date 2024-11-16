<?php
include("../koneksi.php");

$kode =$_POST['kodejurusan'];
$jurusan = $_POST['namajurusan'];

$simpan = "INSERT INTO jurusans (kode,jurusan) VALUES ('$kode','$jurusan')";

$proses = mysqli_query($koneksi, $simpan);



?>
<script>
    document.location="index.php";
</script>