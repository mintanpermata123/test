<?php
//untuk terhubung ke database melalui file "koneksi.php"
    include_once("koneksi.php");
//Melakukan select pada tabel "karyawan"
    $result = mysqli_query($koneksi, "SELECT * FROM karyawan ORDER BY id");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Backend</title>
</head>

<body>
<a href="add.php">Tambah data</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Nama karyawan</th> <th>Jabatan</th> <th>Email</th> <th>Alamat</th> <th>Aksi</th>
    </tr>
    <?php
    while($data = mysqli_fetch_array($result)) {
        //Digunakan untuk menampilkan data dalam tabel
        echo "<tr>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['jabatan']."</td>";
        echo "<td>".$data['email']."</td>";
        echo "<td>".$data['alamat']."</td>";
        echo "<td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='delete.php?id=$data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>