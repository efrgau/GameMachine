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
			$error = "Usuario no existe";
			print($error);
			}else{
				$consul="SELECT * FROM estudiante WHERE Username='".$u."' and Password='".$p."'";
				$resule=mysqli_query($con,$consul);
				$num_resultse=mysqli_num_rows($resule);
				if(!$num_resultse){
					$error = "Contraseña incorrecta";
					print($error);
				}else{
					$error = "Bienvenido a GAME MACHINE";
					print($error);
				}
			}	
	}else{
		print($error);
	}
		
		
?>