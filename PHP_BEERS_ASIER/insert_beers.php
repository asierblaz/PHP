<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if( $_SESSION["tipouser"]== null){
	echo "<html> <h1>Ez daukazu baimena web hau kargatzeko.<h1><html>";
	die();
}
 ?>


<html>
    <body style='margin:auto;width:600px;margin-top:100px;' onload="ObtenerDatos()">
<div id="logUser">
    		<?php
    			echo "<u>Online: </u>".$_SESSION['username'];
    			echo "&nbsp;&nbsp;<img  width=100px src=".$_SESSION['foto'].">"
				
    		  ?>
    		  <button id="logout">Logout</button><br><br>

    	</div>

        <div id="taula">

	
        </div>
        
		<h1>Insert Beers:</h1>
<form id="insert" name="insert" method="POST" enctype="multipart/form-data" action="insert_beers.php">
		<table>
			<tr>
				<td>id:</td>   <td><input name="id" type="text"><br></td>
			</tr>
			<tr>
				<td>Izena:</td>   <td><input name="name" type="text"><br></td>
			</tr>
			<tr>
				<td>Brewerie:</td><td><input name="brewerie" type="text" ><br></td>
			</tr>
			</table>
			Argazkia: <input id="imagen" type="file" name="imagen" onchange="mostrarImagen()"><br> <br>
			<center><img id="argazki" name="imagen"width="200"></center> <br><br><br>
			<input name="bidali" type="submit" value="INSERTATU">
				<input type="reset" value="Garbitu"><br>
		</form>
    </body>

</html>

<?php
include ("conexion.php");
	  $conexion=connectDataBase();
    if (isset($_POST['name'])){
        $id = $_POST["id"];
        $name= $_POST["name"];
        $brewerie= $_POST["brewerie"];        
      $dir="img";
		$imagen=$_FILES['imagen']['name'];
		$archivo= $_FILES['imagen']['tmp_name'];
		$dir=$dir."/".$imagen;
		move_uploaded_file($archivo, $dir);

			if($dir=="img/"){

        		$sql="INSERT INTO beer VALUES ('$id','$name','img/nofoto.png','$brewerie')";

			} else{

        		$sql="INSERT INTO beer VALUES ('$id','$name','$dir','$brewerie')";

        	}
			 $ejecutar=mysqli_query($conexion, $sql);
		
		if(!$ejecutar){
			echo '<script type="text/javascript">alert("Errore bat gertatu da");</script>';		   
		}else{ 
		 	echo"Datuak Ondo gorde dira <br><a href='index2.php'>Atzera Itzuli </a>";

		}
	}
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


  <script>

			



function ObtenerDatos(){

		$.ajax({

		url: 'selectAjax.php',

		beforeSend:function(){
			
		$('#taula').html('<div><img src="img/loading.gif" width="100"/></div>')},


		success:function(datos){


		$('#taula').fadeIn().html(datos);},
		error:function(){
			$('#taula').fadeIn().html('<p><strong>El servidor parece que no responde</p>');
		}
			});

		
	
		}


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