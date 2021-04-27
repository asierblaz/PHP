<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION["tipouser"])||$_SESSION["tipouser"]!= "admin"){
	echo "<html> <h1>Bakarrik administrariak kargatu ahal dute hau.<h1><html>";
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
        
		<h1>Delete Beers:</h1>
		<table>
			<tr>
				<td>Ezabatu nahi duzun id-a:</td><td><input name="id" id="id" type="number"><br></td>
			</tr>
			<td><input name="ezabatu" type="button" value="Ezabatu" onclick="Ezabatu()"></td>
			</tr>
		</table>
    </body>
<div id="datuak">
	


</div>
<br><br><br>

</html>
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
			$('#taula').fadeIn().html('<p><strong>Serbidorea ez doa</p>');
		}
			});

		
	
		}

	function Ezabatu(){
		var id =$("#id").val();
		$.ajax({
		url: 'delete.php?id='+id+'',

		success:function(datos){


		$('#datuak').fadeIn().html(datos);},
		error:function(){
			$('#taula').fadeIn().html('<p><strong>Serbidorea ez doa</p>');
		}
			});

		
		ObtenerDatos();
		}


$("#logout").click(function() {
		alert("Hurrengorarte");
		$(location).attr('href', 'logout.php');
	});
	


  </script>