<?php 
     
	 session_start();
	 // establezco la conexion con la base de datos 
	 $db = new SQLite3('db/carro.db');
	 
	//require("conexion.php");	
	// establezco una consulta que consiste en seleccionar el id y si ese id ya tiene datos (para eso los cuento con count) de la tabla usuarios 
	// donde el nombre de usuario sea igual a Txt_Usu y password sea igual a Txt_Pass
	
	$consulta = "select count(id),id from usuarios where nom_usu='".$_POST['Txt_Usu']."' and password='".$_POST['Txt_Pass']."'";
		
	//$sql="select count(id),id from usuarios where nom_usu='".$_POST['Txt_Usu']."' and password='".$_POST['Txt_Pass']."'";
	
	// ejecuto la consulta 
	$resultado_con_usu = $db->query($consulta);
	
	
	// $r=mysql_query($sql);
	
	while($registro_usuarios = $resultado_con_usu ->fetchArray()){
		if($registro_usuarios[0]==0){
			//el usuario no está en la bd
			echo "El usuario no está en la bd";
		}else{
			
			$consulta_usu = "select id,nombre from usuarios where nom_usu='".$_POST['Txt_Usu']."' and password='".$_POST['Txt_Pass']."'";
			//$sql="select id,nombre from usuarios where nom_usu='".$_POST['Txt_Usu']."' and password='".$_POST['Txt_Pass']."'";
			
			// ejecuto la consulta 
			$resultado_usuarios =$db->query($consulta_usu);
			//$r=mysql_query($sql);
			while($res_usu = $resultado_usuarios ->fetchArray()){
				// crear la sesion 
				// aqui creo una variable de sesion 
				// y guardo la identificaciion de la persona que ingreso 
			
			
			//while($d=mysql_fetch_row($r)){
				//crear la session
			// aqui creo una variable de sesion 
			// y guardo la identificacion de la persona que ingreso 
				$_SESSION["usuario_id"]=$res_usu[0];
				$_SESSION["usuario_nombre"]=$res_usu[1];
				
			}
			header('Location: articuloscategoriacliente.php?idc=1');
		}	
	}
	
	
	
	
	/*while($d=mysql_fetch_row($r)){
		if($d[0]==0){
			//el usuario no está en la bd
			echo "El usuario no está en la bd";
		}else{
			$sql="select id,nombre from usuarios where nom_usu='".$_POST['Txt_Usu']."' and password='".$_POST['Txt_Pass']."'";
			$r=mysql_query($sql);
			while($d=mysql_fetch_row($r)){
				//crear la session
			// aqui creo una variable de sesion 
			// y guardo la identificacion de la persona que ingreso 
				$_SESSION["login"]=$d[0];
				
			}
			header('Location: articuloscategoriacliente.php?idc=1');
		}	*/
//	} 
?>


