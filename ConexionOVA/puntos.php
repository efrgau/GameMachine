
<?php
	header('Access-Control-Allow-Origin: *');
	include("conexion.php");
		$u=$_POST["user"];
		$sql = "SELECT puntos FROM estudiante WHERE Username='".$u."'";
		$req=mysqli_query($con,$sql);
		while ($row = mysqli_fetch_assoc($req)) {
        echo $row["puntos"];
    	}
?>