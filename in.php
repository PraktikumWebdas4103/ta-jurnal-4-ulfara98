<!DOCTYPE html>
<html>
<head>
	<title>Ulfa's</title>
</head>
<body>
	<style type="text/css">
		body{
			background-color: #f4b5cf;
		}
	</style>
	<form action="" method="POST" enctype="multipart/form-data">
		<font face="Verdana"><br><br><br>
		<b>Hobi 	:</b><br>
		<input type="checkbox" name="hobi[]" value="Memasak">Memasak<br>
		<input type="checkbox" name="hobi[]" value="Travelling">Travelling<br>
		<input type="checkbox" name="hobi[]" value="Melukis">Melukis<br>
		<input type="checkbox" name="hobi[]" value="Berenang">Berenang<br>
		<input type="checkbox" name="hobi[]" value="Design">Design<br><br>

		<b>Genre Film yang Disukai 	:</b><br>
		<input type="checkbox" name="film[]" value="Horror">Horror<br>
		<input type="checkbox" name="film[]" value="Action">Action<br>
		<input type="checkbox" name="film[]" value="Anime">Anime<br>
		<input type="checkbox" name="film[]" value="Thriller">Thriller<br>
		<input type="checkbox" name="film[]" value="Animasi">Animasi<br><br>

		<b>Tujuan Travelling 	:</b><br>
		<input type="checkbox" name="wisata[]" value="Bali">Bali<br>
		<input type="checkbox" name="wisata[]" value="RajaAmpat">Raja Ampat<br>
		<input type="checkbox" name="wisata[]" value="PulauDerawan">Pulau Derawan<br>
		<input type="checkbox" name="wisata[]" value="BangkaBelitung">Bangka Belitung<br>
		<input type="checkbox" name="wisata[]" value="LabuanBajo">Labuan Bajo<br><br>

		<b>Upload Foto 	:</b><br>
		
		<input type="file" name="foto" value="Upload"><br><br>
		<input type="submit" name="submit" value="Simpan">
		<input type="submit" name="delete" value="Delete">


</form>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$foto = $_FILES['foto']['name'];
		$hobii = $_POST['hobi'];
		$filmm = $_POST['film'];
		$wisataa = $_POST['wisata'];

		
		echo "<img src = '$foto'>";

		foreach ($hobii as $hobii){
			echo "Hobi 		: $hobii";
			echo "<br>";
		}

		foreach ($filmm as $filmm){
			echo "Film 		: $filmm";
			echo "<br>";
		}

		foreach ($wisataa as $wisataa){
			echo "Wisata 		: $wisataa";
			echo "<br>";
		
	}
}

?>

