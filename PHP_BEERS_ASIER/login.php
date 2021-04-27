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
			<h2> Beers Project | Login.</h2>
			<img src="img/beers.png" alt="" width="90%">
				<div>
	<br>	


	<form id="login" name="login" method="POST" enctype="multipart/form-data" action="login.php" style="background-color: white; text-align: left;">
	Username*: &nbsp;<input type="text" name="username" id="username" class="entrada"  required placeholder="Zure erabiltzailea sartu" ><br>
	Pasahitza*: &nbsp;<input type="password" name="password" id="password"required placeholder="Sartu zure pasahitza"><br>
	<br>
	<label id="et">¿Ez daukazu kontua? </label><a href="registro.php">  Erregistratu zaitez</a><br>
	
	<br>
	
<center> <input type="submit" id="enviar" value="Sartu"></center> 

</form>				
			</div>
			</div>
		</form>



<?php
include ("conexion.php");

if (isset($_POST['username'])){

	  $conexion=connectDataBase();

	$username= $_POST['username'];
	$passwordingresado=$_POST['password'];
$consulta= "SELECT * FROM users WHERE username='$username' and password='$passwordingresado'";
			

$resultado=mysqli_query($conexion,$consulta);



$fila= mysqli_num_rows($resultado);

if($fila>0){
	
	session_start();
	while($imprimir=mysqli_fetch_array($resultado)){
 	$rol = $imprimir['rol'];
 	$foto= $imprimir['imagen'];
	}

		$_SESSION["username"]= $username;
		$_SESSION["tipouser"]= $rol;
		$_SESSION["foto"]= $foto;


	    echo "<script>alert('Ongi etorri sistemara ".$username."');</script>";

	  echo "<script language=Javascript> location.href=\"index2.php \"; </script>";

}else{
echo '<html><br><div id=error class="error">Datuak ez dira zuzenak.</div></hmtl>';

}

}
 ?>


    </body>

</html>



