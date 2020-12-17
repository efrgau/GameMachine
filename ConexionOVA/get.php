<?php
	header('Access-Control-Allow-Origin: *');
	include("conexion.php");
	$consulta="SELECT estudiante.username, ranking.puntaje FROM estudiante INNER JOIN ranking ON estudiante.idUserE = ranking.idUserE";
	$result=mysqli_query($con,$consulta);

	if (mysqli_num_rows($result) > 0) {
  // output data of each row
  	while($row = mysqli_fetch_assoc($result)) {
    echo "Nombre: " . $row["username"]. " - Puntaje: " . $row["puntaje"]. " ";
	}
} else {
  echo "0 results";
}
?>