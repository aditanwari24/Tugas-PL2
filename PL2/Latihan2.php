<h1>Input Mahasiswa</h2>
<?php
    include 'koneksi.php';
    if(isset($_POST['proses']))
    {
        $data=mysqli_query($koneksi,"INSERT INTO tb_mahasiswa VALUES(
            '".$_POST['id']."',
            '".$_POST['NPM']."',
            '".$_POST['Nama']."')");
        header('location:Latihan1.php');
    }
?>

<form action="" method="POST">
    <p>NPM</p>       
    <input type="text" name="NPM">
    <P>Nama</P>
    <input type="text" name="Nama"> <br><br>
    <input type="submit" name="proses" value="Simpan">
    </form><br>
 <button><a href="Latihan1.php?id=<?php ?>">KEMBALI</a></button>