<html>
    <body style='margin:auto;width:600px;margin-top:100px;'>
        <div>
        <?php
			include("test_connect_db.php");
			                $link=connectDataBase();
			                $emaitza=mysqli_query($link,"select * from employees");
		                ?>
		<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
			<Tr><Td>EMPLOYEE ID</Td><Td>EMPLOYEE NAME-SURNAME</Td><td>PHONE NUMBER</td></Tr>
		<?php
				while($erregistroa = mysqli_fetch_array($emaitza))
				{
					printf("<tr><td>%d</td><td>%s</td><td>%d</td></tr>", $erregistroa[0],$erregistroa[1],$erregistroa[2]);
				}
				mysqli_free_result($emaitza);
				mysqli_close($link);
		?>
		</table>
        </div>
        
		<h1>Insert employees:</h1>
		<form action="insert_employees.php" method="POST">
		<table>
			<tr>
				<td>Employee ID:</td>   <td><input name="emp_id" type="text" size='4'><br></td>
			</tr>
			<tr>
				<td>Name-Surname:</td>   <td><input name="emp_name" type="text"><br></td>
			</tr>
			<tr>
				<td>Phone:</td><td><input name="emp_phone" type="text" size='8'><br></td>
			</tr>
			<tr>
				<td><input name="bidali" type="submit" value="INSERTATU"></td>
				<td><input type="reset" value="Garbitu"></td>
			</tr>
		</table>
		</form>
    </body>

</html>