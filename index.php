<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1><Center><u>MODUS KELOMPOK</u></Center></h1>
<form method="POST">
		<label for="batasbawah">Batas Bawah:</label>
		<input type="number" name="batasbawah" id="batasbawah"><br><br>

		<label for="interval">Interval:</label>
		<input type="number" name="interval" id="interval"><br><br>

		<label for="ClassF">ClassF:</label>
		<input type="number" name="ClassF" id="ClassF"><br><br>

		<label for="ClassFUp">ClassFUp:</label>
		<input type="number" name="ClassFUp" id="ClassFUp"><br><br>

		<label for="ClassFDown">ClassFDown:</label>
		<input type="number" name="ClassFDown" id="ClassFDown"><br><br>

		<button type="submit">Hitung</button>
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$batasbawah = $_POST['batasbawah'];
		$interval = $_POST['interval'];
		$ClassF = $_POST['ClassF'];
		$ClassFUp = $_POST['ClassFUp'];
		$ClassFDown = $_POST['ClassFDown'];

		// Hitung nilai yang dibutuhkan
		// Contoh perhitungan
		$tepibawah = $batasbawah - 0.5 ;
		$dsatu = $ClassF - $ClassFUp ;
		$ddua = $ClassF - $ClassFDown ;
		$dtambah = $dsatu + $ddua ;
		
		$intervalxclassf = $interval * $dsatu ;
		$pembagian = $intervalxclassf / $dtambah ;
		$actiondua = $tepibawah + $pembagian  ;



		// Tampilkan hasilnya
		echo "<h1><strong>| Total: </strong></h1>" . "<h1><strong> $actiondua </strong></h1>";
	
		echo "<br> | Tepi Bawah :" . $tepibawah;
	
		echo "<br>| Interval :" . $interval ;
	
		echo "<br>| d1 :" . $dsatu;
	
		echo "<br>| d2 :" . $ddua ;

		echo "<br>| Interval * ClassF :" . $intervalxclassf ;

		echo "<br>| dtambah :" . $dtambah ;

		echo "<br>| Hasil Pembagian :" . $pembagian ;
	}
?>

</body>
</html>