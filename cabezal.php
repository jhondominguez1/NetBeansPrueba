<?php	
	if(isset($_SESSION["usuario_id"])){
		$usuario = $_SESSION["usuario_nombre"];
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CARRO DE COMPRAS</title>
		<style>
			#menu_categorias{
				float: left;
				padding: 30px;
				margin: 5px;
				border-right: 1px solid green;
			}
			#contenido{
				float: left;
				margin: 20px
			}
			#login{
				padding: 10px;
				border-bottom: 1px solid gray;
				margin: 5px;
				text-align: right;
				background-color: #DDD;
			}
				
		</style>
    </head>
    <body>
	<div id="login">
		<?php if(isset($usuario)) : ?>
			<?php echo $usuario ?> | 
			<a href="logout.php">Salir</a>
		<?php else: ?>
			<a href="login.php">Entrar</a>
		<?php endif ?>
	</div>
	
