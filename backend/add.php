<!DOCTYPE html>
<html>
<head>
    <title>Tambah data</title>
</head>

<body>
    <a href="index.php">kembali</a>
    <br/><br/>
    
    <!--ini form tambah data-->
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td><input type="text" name="jabatan"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>

    <?php
    //$_POST berguna untuk mengirim data ke database
    if(isset($_POST['submit'])) {
      	$nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
      	$email = $_POST['email'];
      	$alamat = $_POST['alamat'];

      	include_once("koneksi.php");
		$query = "INSERT INTO karyawan (nama,jabatan,email,alamat) VALUES ('$nama','$jabatan','$email','$alamat')";
      	$result = mysqli_query($koneksi, $query);
      	echo "Data Berhasil disimpan. <a href='index.php'>Lihat data</a>";
    }
    ?>
</body>
</html>