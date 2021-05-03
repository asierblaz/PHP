<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION["tipouser"])||$_SESSION["tipouser"]!= "admin"){
	echo "<html> <h1>Bakarrik administrariak kargatu ahal dute hau.<h1><html>";
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

    	<table border="1"style="background-color: white; text-align: center;">
	<tr>
		<td><strong>Nº</strong></td>
		<td><strong>IZENA</strong></td>	
		<td><strong>BREWERY</strong></td>	
		<td><strong>ARGAZKIA</strong></td>	
		<td><strong>BORRATU</strong></td>	

	</tr>


<?php 


$sql= "SELECT * FROM beer inner join brewery on beer.breweryid = brewery.id ";
$resultado= mysqli_query($conexion,$sql);

	while($imprimir=mysqli_fetch_array($resultado)){
 $dir = $imprimir['2'];

 ?>
<tr>
	<td name="id">&nbsp;&nbsp;<?php echo $imprimir['0'] ?>&nbsp;&nbsp;</td>
	<td name="name"><br>&nbsp;&nbsp;<?php echo $imprimir['name'] ?>&nbsp;&nbsp;<br></td>
	<td>&nbsp;&nbsp;<?php echo $imprimir['nameb'] ?>&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;<?php echo "<img  width=100px src=".$dir.">"?>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;<a href="delete.php?id=<?php echo $imprimir['id']; ?>"><img  width=50px src="img/papelera.png"></a></td>

</tr>

<?php 
}

 ?>
</table>

		<br/>
		<a href="index2.php">Back to menu</a>
	</body>
</html>








