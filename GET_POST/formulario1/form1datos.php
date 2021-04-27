<!DOCTYPE html>
<html>
<head>
	<title>Datuak jaso</title>
</head>
<body>


<h1>FORMULARIOKO DATUAK</h1>
<br><br><br>
<?php 

$nombre= $_POST['izena'];
$apellido= $_POST['apellido'];
$pass= $_POST['pass'];

if ($pass== null || $pass==''){

	echo "Please rewrite your password";
} else {

	echo  "You are <b>".strtoupper($nombre)." " .strtoupper($apellido). "</b> and your password is <b>".$pass."</b> <br>";
	}
 ?>


 <a href="formulario1.html" title="">Click here to return</a>

</body>
</html>