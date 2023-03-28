<?php
		$angka = $_POST["angka"];
		$angka2 = $_POST["angka2"];
		$operator = $_POST["operator"];

		if ($operator == "+") {
			$hasil = $angka + $angka2;
			echo "<p>Hasil dari $angka + $angka2 adalah $hasil</p>";
		} elseif ($operator == "-") {
			$hasil = $angka - $angka2;
			echo "<p>Hasil dari $angka - $angka2 adalah $hasil</p>";
		} elseif ($operator == "*") {
			$hasil = $angka * $angka2;
			echo "<p>Hasil dari $angka x $angka2 adalah $hasil</p>";
		} elseif ($operator == "/") {
			$hasil = $angka / $angka2;
			echo "<p>Hasil dari $angka / $angka2 adalah $hasil</p>";
		} else {
			echo "<p>Operator tidak dikenali</p>";
		}
?>
