<?php
	header('Access-Control-Allow-Origin: *');
	include("conexion.php");
	$u=$_POST["user"];
	$p=$_POST["pass"];
	$error="";

	if(empty(trim($u) and trim($p)))
		$error = "existe un campo vacio";
	if(!$error){
		$consulta= "SELECT * FROM estudiante WHERE Username='".$u."'";
		$resul=mysqli_query($con,$consulta);
		$num_results=mysqli_num_rows($resul);
		if(!$num_results){

		$insertar="INSERT INTO estudiante(Username,Password) VALUES ('".$u."','".$p."')";
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