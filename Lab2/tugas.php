<!DOCTYPE html>
<html>
<head>
	<title>Program Input PHP</title>
</head>
<body>
	<h1>Program Input PHP</h1>
	<form action="" method="post">
		<label>Nama</label>
		<input type="text" name="nama" required><br><br>
		<label>Tanggal Lahir</label>
		<input type="date" name="tgl_lahir" required><br><br>
		<label>Pekerjaan</label>
		<select name="pekerjaan" required>
			<option value="">Pilih Pekerjaan</option>
			<option value="Programmer">Frond End</option>
			<option value="Desainer">Full Stack Developer</option>
			<option value="Marketing">Administrasi</option>
		</select><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	if(isset($_POST['submit'])){
		$nama = $_POST['nama'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$pekerjaan = $_POST['pekerjaan'];

		// menghitung umur
		$today = date("Y-m-d");
		$umur = date_diff(date_create($tgl_lahir), date_create($today))->y;

		// menentukan gaji berdasarkan pekerjaan
		if($pekerjaan == "Frond End"){
			$gaji = 15000000;
		} elseif($pekerjaan == "Full Stack Developer"){
			$gaji = 20000000;
		} elseif($pekerjaan == "Administrasi"){
			$gaji = 6000000;
		}

		// menampilkan output
		echo "<br><br>";
		echo "Nama: ".$nama."<br>";
		echo "Tanggal Lahir: ".$tgl_lahir."<br>";
		echo "Umur: ".$umur." tahun<br>";
		echo "Pekerjaan: ".$pekerjaan."<br>";
		echo "Gaji: Rp".$gaji."<br>";
	}
	?>
</body>
</html>