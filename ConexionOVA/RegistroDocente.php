<?php
	header('Access-Control-Allow-Origin: *');
	include("conexion.php");
	$u=$_POST["user"];
	$p=$_POST["pass"];
	$error="";
	//if(!$u or !$p)$error.="existe un campo vacio";
	if(empty(trim($u) and trim($p)))
		$error = "existe un campo vacio";
	if(!$error){
		$consulta= "SELECT * FROM docentes WHERE UsernameD='".$u."'";
		$resul=mysqli_query($con,$consulta);
		$num_results=mysqli_num_rows($resul);
		if(!$num_results){
		
		$insertar="INSERT INTO docentes(UsernameD,PasswordD) VALUES ('".$u."','".$p."')";
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