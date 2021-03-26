
<?php
	header('Access-Control-Allow-Origin: *');
	include("conexion.php");
		$u=$_POST["user"];
		$p=$_POST["punt"];
		$r=$_POST["rol"];
		$sql = "UPDATE estudiante SET puntos = '".$p."' WHERE Username = '".$u."' and '".$r."'";
		$req=mysqli_query($con,$sql);  
?>