<html>
	<head>
		<title>My first PHP project with MySql data bases.</title>

		<style type="text/css">
	#error{		
		color: #FF0000;		
	}
</style>
	</head>

    <body style='margin:auto;width:600px;margin-top:100px;' >
		<div style='border: 5px solid green; padding:50px;'>
			<h2> Beers Project | Pasahitza Errekuperatu.</h2>


<form id="login" name="login" method="POST" enctype="multipart/form-data" action="recuperarcontra.php" style="background-color: white; text-align: left;">
	Berreskurapen email-a*:<input type="text" name="email" id="email" class="entrada" autofocus required placeholder="Zure email-a sartu" ><br>
	<br>
	
	<br>
	
<center> <input type="submit" id="bidali" value="Bidali"></center> 
</form>  



<?php

if (isset($_POST['email'])){
//conectar a la base de datos
include ("conexion.php");
$conexion=connectDataBase();

	$emailingresado= $_POST['email'];


$consulta= "SELECT * FROM users WHERE email='$emailingresado'";
			

$resultado=mysqli_query($conexion,$consulta);

$fila= mysqli_num_rows($resultado);
echo $emailingresado;

if($fila>0){

//email destinatario
$emailpara= $emailingresado;
$asunto= "Recuperación de Contraseña.";

$codigo= rand(10000,99999);


//variables de sesion

$_SESSION['codigo']=$codigo;
$_SESSION['email']=$emailingresado;


$asunto    = 'El asunto del correo';
$descripcion   = 'Este es el cuerpo del correo';
$de = 'From: blazasier@gmail.com';

mail('blazgar@gmail.com', $asunto, $descripcion, $de);
   
echo "Correo enviado satisfactoriamente";


}



 }



 ?>

			</div>
	


    </body>

</html>



