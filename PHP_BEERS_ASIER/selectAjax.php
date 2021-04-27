
<html>
<head>
	<title>Beers</title>
	
</head>
    <body>
<div>
<table border="1"style="background-color: white; text-align: center;">
	<tr>
		<td><strong>Nº</strong></td>
		<td><strong>IZENA</strong></td>	
		<td><strong>BREWERY</strong></td>	
		<td><strong>ARGAZKIA</strong></td>	

	</tr>


<?php 

sleep(1);
include ("conexion.php");
$conexion=connectDataBase();
$sql= "SELECT * FROM beer inner join brewery on beer.breweryid = brewery.id ";
$resultado= mysqli_query($conexion,$sql);

	while($imprimir=mysqli_fetch_array($resultado)){
 $dir = $imprimir['2'];

 ?>
<tr>
	<td>&nbsp;&nbsp;<?php echo $imprimir['0'] ?>&nbsp;&nbsp;</td>
	<td><br>&nbsp;&nbsp;<?php echo $imprimir['name'] ?>&nbsp;&nbsp;<br></td>
	<td>&nbsp;&nbsp;<?php echo $imprimir['nameb'] ?>&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;<?php echo "<img  width=100px src=".$dir.">"?>&nbsp;&nbsp;</td>



</tr>

<?php 
}

 ?>
</table>

