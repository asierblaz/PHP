<?php


include ("conexion.php");

$id = $_GET['id'];

$conexion=connectDataBase();

$sql= "DELETE beer FROM beer WHERE id='$id'";
$ejecutar= mysqli_query($conexion,$sql);

		if(!$ejecutar){
			echo '<script">alert("Errore bat gertatu da");</script>';		   
		}else{ 

			//unlink('../carpeta/imagen.jpg');
		 	echo"Datuak Ondo ezabatu dira <br><a href='index2.php'>Atzera Itzuli </a>";

		}
	



  ?>