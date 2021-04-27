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
        <h1>Delete employees</h1>

		<p> ID employee to Delete </p>
		<form action="delete_employees.php" method="POST">
        <h4>
            ID:<input name="emp_ID" type="text"><br><br>
            <input name="bidali" type="submit" value="EZABATU">
            <input type="reset" value="Garbitu">
        </h4>
		</form>
		
    </body>

</html>