<?php
include("../koneksi.php");

$id =$_GET['xyz'];


$hapus = "DELETE FROM jurusans WHERE id='$id'";

$proses = mysqli_query($koneksi, $hapus);



?>
<script>
    document.location="index.php";
</script>