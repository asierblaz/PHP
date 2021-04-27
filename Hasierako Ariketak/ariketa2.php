<!DOCTYPE html>
<html>
<head>
	<title>Ariketa 2</title>

<style>

#verde{
 width: 1000px;
 border: 5px solid green; 
 padding: 25px;
}

</style>

</head>
<body>

<p>Good Morning!</p>
<h1>PHP</h1>


<h2>exercise2</h2><br>

<div id="verde">

<?php 
echo "simple line situated outside the loop <br><br>";

for ($i=0; $i <10 ; $i++) { 
	
	echo "Inside the loop - Line" .$i."<br>";
}

 ?>

</div>

</body>
</html>