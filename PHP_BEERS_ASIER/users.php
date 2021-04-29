<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION["tipouser"])||$_SESSION["tipouser"]== null){
	echo "<html> <h1>Ez daukazu baimena web hau kargatzeko.<h1><html>";
	die();
}
 ?>


<html>
	<head>
		<title>My first PHP project with MySql data bases.</title>
	</head>

    <body style='margin:auto;width:600px;margin-top:100px;' >


    	<div id="logUser">
    		<?php
    			echo "<u>Online: </u>".$_SESSION['username'];
    			echo "&nbsp;&nbsp;<img  width=100px src=".$_SESSION['foto'].">"
				
    		  ?>
    		  <button id="logout">Logout</button><br><br>

    	</div>
		<div style='border: 5px solid green; padding:50px;'>
			<h2> Nire Datuak</h2>
				<div id="datuak">

<?php 
$username=$_SESSION['username'];
include ("conexion.php");
$conexion=connectDataBase();
$sql= "SELECT * FROM users WHERE username='$username'";
$resultado= mysqli_query($conexion,$sql);

	while($imprimir=mysqli_fetch_array($resultado)){
	 ?>		
			<b><label id="username">Izena:</b> <?php echo $imprimir['username'] ?> </label><br><br>
			<b><label id="rol">Erabiltzaile Mota: </b><?php echo $imprimir['username'] ?></label><br><br>
			<button id="aldatu">Datuak Aldatu</button>

			</div>
<?php } ?>

			<div id="form" style="display:none;">
				
	<form id="registro" name="registro" method="POST" enctype="multipart/form-data" action="usersAldatu.php" style="background-color: white; text-align: left;">
	Username*: &nbsp;<input type="text" name="username" id="usernameField" class="entrada"  required ><br>
	Pasahitza*: &nbsp;<input type="password" name="password" id="passwordField"required ><br>
	Pasahitza*: &nbsp;<input type="password" name="passwordrep" id="passwordrep"required ><br>
	Erabiltzaile Argazkia: &nbsp;&nbsp; <input id="imagen" type="file" name="imagen" onchange="mostrarImagen()"><br> <br>
	<center><img id="argazki" name="imagen"width="200"></center> <br><br><br>
	<input type="submit" name="Aldatu" value="Aldatu">
	<br>
	
	<br>
	

</form>				


			</div>



			<br>



			</div>
		</form>
    </body>




</html>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script>


$("#logout").click(function() {
		alert("Hurrengorarte");
		$(location).attr('href', 'logout.php');
	});


$("#aldatu").click(function(){
	
	document.getElementById("usernameField").value="<?php echo $_SESSION['username']; ?>";

	$("#datuak").fadeOut("slow");
	$("#form").fadeIn("slow");
	


	


});

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
