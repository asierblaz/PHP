<!DOCTYPE html>
<html>
<head>
	<title>Ariketa 1</title>

<style>
#azul{
 width: 1000px;
 border: 5px solid blue; 
 padding: 25px;
}
#verde{
 width: 1000px;
 border: 5px solid green; 
 padding: 25px;
}

</style>

</head>
<body>


<h1>PHP</h1>


<h2>exercise1</h2>

<div id="azul">
	
<?php

$a=7;
$b=3.34;
$c="hello world";

echo "the value fo the a variable is " .$a. "<br>";
echo "the value fo the a variable is " .$b. "<br>";
echo "the value fo the a variable is " .$c. "<br>";
 ?>

 <br><br>

 <p>now we are going to do some operations:</p><br>


 <?php 

echo "a + b = " .$a+$b."<br>";
echo "when we add 1 to the 'a' variable, then it's value will be ".$a+1.;

  ?>


</div>

<br><br><br>
<div id="verde">

	<h2>the IF statement</h2>

<?php 

if('M'<'P'){

echo "M is smaller than P";

}
 ?>

</div>

<?php 

printf("This is the number 2 in different formats: %d %f %.2f",2,2,2);
 ?>

</body>
</html>