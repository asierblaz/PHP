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
			<h2> Beers Project.</h2>
			<img src="img/beers.png" alt="" width="90%">
				<div>
				<table>
					<tr>
						<td><a href="select_beers.php">select_Beers </a>|</td>
						<td><a href="insert_beers.php">insert beers </a>|</td>
						<td><a href="delete_beers.php">delete beers</a></td>
						<td><a href="delete2.php">delete 2</a></td>
					</tr>
					
				</table>
			</div>
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
	

</script>

