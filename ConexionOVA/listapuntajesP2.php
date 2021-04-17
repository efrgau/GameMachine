<?php
	header('Access-Control-Allow-Origin: *');
	include("conexion.php");
		$sql="SELECT Username,puntos FROM usuarios WHERE id_rol=1 order BY puntos desc LIMIT 10,20";
		$req=mysqli_query($con,$sql);
		while ($row = mysqli_fetch_assoc($req)) {
        //echo $row["Username"];
        echo $row ["puntos"];
        echo "\n";
        echo "\n";
    	}
?>