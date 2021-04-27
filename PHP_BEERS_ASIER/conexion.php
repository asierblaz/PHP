<?php
		function ConnectDataBase()
		{
			if (!($conexion=mysqli_connect("localhost","root","")))
			{
			echo "There is an error connecting the server.";
			exit();
			}
			if (!mysqli_select_db($conexion,"beers"))
			{
			echo "There is an error selecting the DB.";
			exit();
            }
            
			return $conexion;
		}
?>