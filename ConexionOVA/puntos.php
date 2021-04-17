
<?php
	header('Access-Control-Allow-Origin: *');
	include("conexion.php");
		$u=$_POST["user"];
		$r=$_POST["rol"];
		$sql = "SELECT puntos FROM usuarios WHERE Username='".$u."' and '".$r."'";
		$req=mysqli_query($con,$sql);
		while ($row = mysqli_fetch_assoc($req)) {
        echo $row["puntos"];
    	}
?>