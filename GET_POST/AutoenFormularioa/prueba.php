<!DOCTYPE html>
<html>
<head>
	<title>Autoen Datuak Jaso</title>
</head>
<body>
<h1>Autoen datuak jaso POST metodoa erabiliz</h1>

<?php 


error_reporting(0);

$nombre=$_POST['nombre'];
$pass=$_POST['pass'];
$color=$_POST['color'];

	echo "Zure izena<b> ".strtoupper($nombre). "</b> da.<br>";
	echo "Zure izena<b>".$pass. "</b> da.<br>";
	echo "Autoaren kolorea '".$color. "'' aukeratu duzu.<br>";
	echo "Zuk aukeratutako extrak hauek dira: ".$_POST['extra1']." ".$_POST['extra2']." ".$_POST['extra3']." aukeratu duzu.<br>";
	echo $_POST['precio']."<br>";
	echo $_POST['comentarios'];

 ?>
</body>
</html>