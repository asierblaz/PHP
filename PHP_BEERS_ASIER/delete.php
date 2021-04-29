<?php


include ("conexion.php");

$id = $_GET['id'];

$conexion=connectDataBase();

$sql= "SELECT * FROM beer WHERE id='$id'";
$resultado= mysqli_query($conexion,$sql);

	while($imprimir=mysqli_fetch_array($resultado)){
		$dir=  $imprimir['picture']; 
	}


$sql= "DELETE beer FROM beer WHERE id='$id'";
$ejecutar= mysqli_query($conexion,$sql);

		if(!$ejecutar){
			echo '<script">alert("Errore bat gertatu da");</script>';		   
		}else{ 

			if($dir!="img/nofoto.png"){
		//	unlink($dir); //borra la foto de la carpeta

			}
		 	echo"Datuak Ondo ezabatu dira <br><a href='index2.php'>Atzera Itzuli </a>";

		}
	



  ?>