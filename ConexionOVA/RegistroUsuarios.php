<?php
	header('Access-Control-Allow-Origin: *');
	include("conexion.php");
	$u=$_POST["user"];
	$p=$_POST["pass"];
	$r=$_POST["rol"];
	$error="";

	if(empty(trim($u) and trim($p) and trim($r)))
		$error = "existe un campo vacio";
	if(!$error){
		$consulta= "SELECT * FROM usuarios WHERE Username='".$u."' and '".$r."'";
		$resul=mysqli_query($con,$consulta);
		$num_results=mysqli_num_rows($resul);
		if(!$num_results){

		$insertar="INSERT INTO usuarios(Username,Password,id_rol) VALUES ('".$u."','".$p."','".$r."')";
		$resultado=mysqli_query($con,$insertar);
		$message="Registrado exitosamente";
		print($message);
		
		}else{
		$error = "Usuario ya existe";
		print($error);
		}
	}else{
		print($error);
	}
?>