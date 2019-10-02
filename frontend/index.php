<!--Koneksi ke database melalui file koneksi.php -->
<?php
	include 'koneksi.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>PT.Bisnis Bersama</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>PT. Bisnis Bersama</h2>
	</div>

	<div class="navbar">
		<a href="#">Beranda</a>
		<a href="#info">Info</a>
		<a href="#kontak">Data karyawan</a>
	</div>

	<div class="main" align="center">
		<section id="beranda">
			<img src="gambar.jpg">
		</section>

		<section id="info" class="info">
			<h2>INFORMASI PERUSAHAAN</h2>
			<hr>
			<p1>PT. Bisnis Bersama merupakan sebuah perusahaan yang bergerak pada sektor Perekonomian</p1>
			<p1><br>Perusahaan ini memiliki bla bla bla sjkf sdbf asjdf adf ajsdf jsad sgjh dfkgh  sdfkjgh</p1>
		</section>

		<section id="kontak">
			<h2>Data karyawan Perusahaan</h2>
			<table align="center" border="1">
				<thead bgcolor="#5f9ea0">
				<!-- Membuat nama fild pada tabel-->
					<tr>
						<th>Nama Karyawan</th> <th>Jabatan</th> <th>Email</th> <th>Alamat</th>
					</tr>
				</thead>
				<tbody>

				<!--Digunakan untuk melakukan pengambilan data pada database -->
					<?php
						$query = mysqli_query($koneksi, "SELECT * FROM karyawan ORDER BY id");
						$jumlah = mysqli_num_rows($query);
						while ($data = mysqli_fetch_array($query)) {
					?>

				<!--Digunakan Untuk menampilkan data dalam tabel -->
						<tr>
							<td><?php echo $data['nama'];?></td>
							<td><?php echo $data['jabatan'];?></td>
							<td><?php echo $data['email'];?></td>
							<td><?php echo $data['alamat'];?></td>
						</tr>
					<?php
					}
				?>
				</tbody>
			</table>
		</section>
		<br>
		<hr>

	</div>

	<div class="footer">
		<!-- Bagian footer-->
		<section>
			<h2>Kontak perusahaan</h2>
			<p>Email : admin@bisnisbersama.org.id</p>
			<p>Alamat : Jalan Pramuka No.24</p>
		</section>
		
	</div>
</body>
</html>