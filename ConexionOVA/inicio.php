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

		$consulta= "SELECT * FROM estudiante WHERE Username='".$u."' and '".$r."'";
		$resul=mysqli_query($con,$consulta);
		$num_results=mysqli_num_rows($resul);
		if(!$num_results){
			$error = "Usuario no existe";
			print($error);
			}else{
				$consul="SELECT * FROM estudiante WHERE Username='".$u."' and Password='".$p."' and '".$r."'";
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