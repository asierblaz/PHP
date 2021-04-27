<html>

<body style='margin:auto;width:600px;margin-top:100px;'>
    <div>
        <?php
        include("test_connect_db.php");
        $gakoa = $_POST["emp_id"];
        $izena= $_POST["emp_name"];
        $tlf= $_POST["emp_phone"];
        $lotura = connectDataBase();
        $emaitza = mysqli_query($lotura, "insert into employees values('$gakoa', '$izena', '$tlf')");
		
        $kontsulta = mysqli_query($lotura, "select * from employees");
        ?>
        <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
            <Tr>
                <Th>&nbsp;employee ID</Th>
                <Th>&nbsp;employee Name-Surname&nbsp;</Th>
                <Th>&nbsp;phone&nbsp;</Th>
            </Tr>
            <?php
            while ($erregistroa = mysqli_fetch_array($kontsulta)) {
                printf("<tr><td>%d</td><td>%s</td><td>%d</td></tr>", $erregistroa[0], $erregistroa[1], $erregistroa[2]);
            }
            mysqli_free_result($kontsulta);
            ?>
        </table>
    </div>
	<br/>
	<a href="index.php">Back to menu</a>
</body>

</html>