<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if( $_SESSION["tipouser"]== null){
	echo "<html> <h1>Ez daukazu baimena web hau kargatzeko.<h1><html>";
	die();
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Beers</title>
	<?php 
	  include ("conexion.php");
	  $conexion=connectDataBase();
	 ?>
</head>
    <body onload="ObtenerDatos()" style='margin:auto;width:600px;margin-top:100px;'>
<div id="logUser">
    		<?php
    			echo "<u>Online: </u>".$_SESSION['username'];
    			echo "&nbsp;&nbsp;<img  width=100px src=".$_SESSION['foto'].">"
				
    		  ?>
    		  <button id="logout">Logout</button><br><br>

    	</div>
    	<h1>DB-an dauden Beers</h1>
<div id="datos">

        </div>
		<br/>
		<a href="index2.php">Back to menu</a>
	</body>
</html>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script type="text/javascript">
	
function ObtenerDatos(){

		$.ajax({

		url: 'selectAjax.php',

		beforeSend:function(){
			
		$('#datos').html('<div><img src="img/loading.gif" width="100"/></div>')},


		success:function(datos){


		$('#datos').fadeIn().html(datos);},
		error:function(){
			$('#taula').fadeIn().html('<p><strong>El servidor parece que no responde</p>');
		}
			});

		
	
		}

</script>


