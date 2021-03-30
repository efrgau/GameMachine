<?php
	header('Access-Control-Allow-Origin: *');
	include("conexion.php");
		$sql="SELECT Username,puntos FROM estudiante WHERE id_rol=1 order BY puntos desc";
		$req=mysqli_query($con,$sql);
		while ($row = mysqli_fetch_assoc($req)) {
        echo $row ["puntos"];
        echo "\n";
        echo "\n";
    	}
?>