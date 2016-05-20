<?php 
session_start();


if($_SESSION["usuario_id"]){
	// establezco la conexion con la base de datos 
	$db = new SQLite3('db/carro.db');
	//require("conexion.php");	
	// realizo la consulta 
	$consulta = "select nombre from usuarios where id=".$_SESSION["usuario_id"];
	//$sql="select nombre from usuarios where id=".$_SESSION["login"];
	
	// ejecuto la consulta 
	$resultado = $db->query($consulta);
	//$r=mysql_query($sql);
	
	while($fila = $resultado->fetchArray()){
		echo "Bienvenido ".$fila[0];
		
	}
		
	//while($d=mysql_fetch_row($r)){
	//	echo "Bienvenido ".$d[0];
	//}
	} 
?>
