<?php
    include 'koneksi.php';
    $id = $_POST['id'];
    $NPM = $_POST['NPM'];
    $NAMA = $_POST['Nama'];

    $data = mysqli_query ($koneksi,"UPDATE tb_mahasiswa SET NPM='$NPM', Nama='$NAMA' WHERE id='$id'");
    header("location:Latihan1.php");

    ?>