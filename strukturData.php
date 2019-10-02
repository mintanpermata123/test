<?php
	//kukasikomen
	//1. Waktu awal proses
	$waktuAwal = microtime(true);
	echo "<br>Waktu awal proses :".$waktuAwal;

	//2. Pemakaian memori
	$memory = memory_get_usage();
	echo "<br>Memory pemakaian :".$memory;

	//3. Membuat array
	$data = array("Mobil","Motor","Sepeda","Pesawat");

	//4. Cetak Array
	echo "<br>Data ";
	print_r($data);

	//5. Hitung array
	$hitung = count($data);
	echo "<br>Jumlah data :".$hitung." Array";

	//6. Merubah Array
	$data[0] = "Becak";
	echo "<br>Data array setela dirubah :";
	print_r($data);

	//7. Mengurutkan secara ascending
	sort($data);
	echo "<br>Data array diurutkan secara ascending :";
	print_r($data);

	//8. Mengurutkan secara descending
	rsort($data);
	echo "<br>Data array diurutkan secara descending :";
	print_r($data);

	//9. menambahkan array push
	array_push($data, "Kereta Api");
	echo "<br>Data array setelah ditambah :";
	print_r($data);

	//10. Menghapus array pop
	array_pop($data);
	echo "<br>Data array setelah dihapus :";
	print_r($data);

	//11. Pencarian array
	if (in_array("sss", $data)) {
		echo "<br>Data array ditemukan";
	} else {
		echo "<br>Data tidak ditemukan";
	}

	//12. Penggunaan memory puncak
	$memory = memory_get_peak_usage();
	echo "<br>Penggunaa memory puncak :".$memory;

	//13. Waktu akhir proses
	$waktuAkhir = microtime(true);
	$total = $waktuAkhir - $waktuAwal;
	echo "<br>Waktu akhir proses :".$total." Detik";
?>