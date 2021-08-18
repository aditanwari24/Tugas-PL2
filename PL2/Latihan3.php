<h1>Update Mahasiswa</h2>
<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query ($koneksi,"SELECT * FROM tb_mahasiswa WHERE id='$id'");
    while($d=mysqli_fetch_array($data)){ ?>
        <form method = "post" action = "Latihan3-1.php">
        <table>
            <tr>
                <td>NPM</td>
                <td>
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="number" name="NPM" value="<?php echo $d['NPM']; ?>">
                </td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="Nama" value="<?php echo $d['Nama']; ?>">
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
        <Input type='hidden' name='id' value='<?php echo $d['id']; ?>'></Input>
    </form>
    <?php
    }
    ?>

<br><button><a href="Latihan1.php?id=<?php ?>">KEMBALI</a></button>