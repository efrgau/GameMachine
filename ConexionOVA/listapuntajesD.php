<?php
	header('Access-Control-Allow-Origin: *');
	include("conexion.php");
		$sql = "SELECT * FROM estudiante ";
		$req=mysqli_query($con,$sql);
		while ($row = mysqli_fetch_assoc($req)) {
		echo "<p>";
		echo "-"; //un separador
        echo $row["Username"];
        echo "-"; // un separador
        echo $fila ("puntos");
        echo "<p>";
    	}
?>