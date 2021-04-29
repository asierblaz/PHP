<?php

include ("conexion.php");
$conexion=connectDataBase();
        $username = $_POST["username"];
        $password= $_POST["password"];                
      	$dir="img";
		$imagen=$_FILES['imagen']['name'];
		$archivo= $_FILES['imagen']['tmp_name'];
		$dir=$dir."/".$imagen;
		move_uploaded_file($archivo, $dir);

			if($dir=="img/"){
				$foto=$_SESSION['foto'];


        		$sql="UPDATE users SET name = '$username', password = '&password',rol='usuario', imagen '=$foto'  WHERE username='$username'"; 


			} else{

        		$sql="UPDATE users SET name = '$username', password = '&password',rol='usuario', imagen '=$dir'  WHERE username='$username'"; 

        	}
			 $ejecutar=mysqli_query($conexion, $sql);
		
echo $ejecutar;

		if(!$ejecutar){
			echo '<script type="text/javascript">alert("Errore bat gertatu da");</script>';		   
		}else{ 
		 	echo"Datuak Ondo gorde dira";

		}
	

	?>