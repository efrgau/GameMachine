
<?php
	header('Access-Control-Allow-Origin: *');
	include("conexion.php");
		$u=$_POST["user"];
		$p=$_POST["punt"];
		$sql = "UPDATE estudiante SET puntos = '".$p."' WHERE Username = '".$u."'";
		$req=mysqli_query($con,$sql);  
?>