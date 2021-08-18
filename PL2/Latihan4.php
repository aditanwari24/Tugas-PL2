<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query ($koneksi, "DELETE FROM tb_mahasiswa WHERE id ='$id'");
    header("location:Latihan1.php?pesan=hapus");
    ?>