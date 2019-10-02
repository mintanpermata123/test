<?php

	include_once("koneksi.php");

	if(isset($_POST['update'])) {
      	$id = $_POST['id'];

      	$nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
      	$email = $_POST['email'];
      	$alamat = $_POST['alamat'];

      	 $query = "UPDATE karyawan SET nama='$nama', jabatan='$jabatan', email='$email', alamat='$alamat' WHERE id=$id";
    	   mysqli_query($koneksi, $query);

      	header("location:index.php");
   	}
	$id = $_GET['id'];

	$query = "SELECT * FROM karyawan WHERE id=$id";
	$result = mysqli_query($koneksi, $query);
	while($data = mysqli_fetch_array($result)) {
      	$nama = $data['nama'];
        $jabatan = $data['jabatan'];
      	$email = $data['email'];
      	$alamat = $data['alamat'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit data</title>
</head>

<body>
    <a href="index.php">Back</a>
    <br/><br/>
<!--Ini form edit yang dilengkapi dengan script php yang berguna untuk pada saat edit, form memanggil data yang akan diedit-->
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td><input type="text" name="jabatan" value=<?php echo $jabatan;?>></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>