<html>
	<head>
		<title>My first PHP project with MySql data bases.</title>
	</head>

    <body style='margin:auto;width:600px;margin-top:100px;' >
		<div style='border: 5px solid green; padding:50px;'>
			<h2> Beers Project. | Erregistroa</h2>
			<img src="img/beers.png" alt="" width="90%">
				<div>
	<br>	


	<form id="registro" name="registro" method="POST" enctype="multipart/form-data" action="registro.php" style="background-color: white; text-align: left;">
	Username*: &nbsp;<input type="text" name="username" id="username" class="entrada"  required placeholder="Zure erabiltzailea sartu" ><br>
	Pasahitza*: &nbsp;<input type="password" name="password" id="password"required placeholder="Sartu zure pasahitza"><br>
	Pasahitza*: &nbsp;<input type="password" name="passwordrep" id="passwordrep"required placeholder="Errepikatu pasahitza"><br>
	Email*: &nbsp;<input type="email" name="email" id="email"required placeholder="Sartu zure email-a"><br>
	Erabiltzaile Argazkia: &nbsp;&nbsp; <input id="imagen" type="file" name="imagen" onchange="mostrarImagen()"><br> <br>
	<center><img id="argazki" name="imagen"width="200"></center> <br><br><br>

	<br>
	<label id="et"></label><a href="login.php"> Logeatu sisteman</a><br>
	
	<br>
	
<center> <input type="submit" id="enviar" value="Sartu"></center> 

</form>				
			</div>
			</div>
		</form>
<?php
include ("conexion.php");
	  $conexion=connectDataBase();


    if (isset($_POST['username'])){
        $username = $_POST["username"];
        $password= $_POST["password"];                
      	$dir="img";
		$imagen=$_FILES['imagen']['name'];
		$archivo= $_FILES['imagen']['tmp_name'];
		$dir=$dir."/".$imagen;
		move_uploaded_file($archivo, $dir);
		$email=$_POST['email'];

$passwordEncriptada= password_hash($password, PASSWORD_DEFAULT);

			if($dir=="img/"){

        		$sql="INSERT INTO users VALUES ('$username','$passwordEncriptada','usuario','img/fotoperfil.png','$email')";

			} else{

        		$sql="INSERT INTO users VALUES ('$username','$passwordEncriptada','usuario','$dir','$email')";

        	}
			 $ejecutar=mysqli_query($conexion, $sql);
		
		if(!$ejecutar){
			echo '<script type="text/javascript">alert("Errore bat gertatu da");</script>';		   
		}else{ 
		 	echo"Datuak Ondo gorde dira";

		}
	}
  ?>
		
    </body>

</html>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


  <script>
  	
function mostrarImagen(){


				
	 var preview=$("#argazki")[0];
	 var archivo = $("#imagen")[0].files[0];

	 var leer = new FileReader();

	 if(archivo){
	 	leer.readAsDataURL(archivo);
	 	leer.onloadend=function(){
	 		preview.src=leer.result;

	 	};	 }
} 

	</script>



