<!DOCTYPE html>
<html>
<head>
	<title>Autoen Datuak Jaso</title>
</head>
<body>
<h1>Autoen datuak jaso POST metodoa erabiliz</h1>

<?php 


$extra1="";

$extra2="";

$extra3="";

if(isset($_POST['extra1'])){

	$extra1=$_POST['extra1'].",";

}

if(isset($_POST['extra2'])){

	$extra2=$_POST['extra2'].",";

}

if(isset($_POST['extra3'])){

	$extra3=$_POST['extra3'];

}
//error_reporting(0);

$nombre=$_POST['nombre'];
$pass=$_POST['pass'];
$color=$_POST['color'];

	echo "Zure izena<b> ".strtoupper($nombre). "</b> da.<br>";
	echo "Zure izena<b>".$pass. "</b> da.<br>";
	echo "Autoaren kolorea '".$color. "'' aukeratu duzu.<br>";
	echo "Zuk aukeratutako extrak hauek dira: ".$extra1." ".$extra2." ".$extra3." aukeratu duzu.<br>";
	echo $_POST['precio']."<br>";
	echo $_POST['comentarios'];

 ?>
</body>
</html>