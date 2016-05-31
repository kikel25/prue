<?php
include "conexion.php";

$nom=$_POST['nombre'];
$dir=$_POST['dir'];
$rfc=$_POST['Rfc'];
$tel=$_POST['tel'];
$clasif=$_POST['classif'];
$lat=$_POST['lat'];
$longt=$_POST['long'];
$foto="images/".$rfc.".jpg";



$sql="DELETE FROM servicios WHERE IdServicios='$nom'";
$res=mysqli_query($conexion,$sql);
if($res){
		echo "Los datos se eliminaron de manera exitosa";
	  echo "nombre:".$nom." Dirección:".$dir." RFC:".$rfc." Teléfono:".$tel." Clasificación:".$clasif." Latitud:".$lat." Longitud:".$longt." Foto:".$foto;
	}else{
  	echo "Se produjo un error al momento de eliminar los datos:".mysqli_error();
		}
mysqli_close($conexion);
?>
