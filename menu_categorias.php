<?php	
    $consulta_cat = "SELECT * FROM categoria";	
    $resultado_cat = $db->query($consulta_cat);	
?>
<a href="index.php">Todos</a>
<?php while($fila = $resultado_cat->fetchArray()){ ?>				
	<br>
	<a href="?idcat=<?php echo $fila['id']; ?>">
		<?php echo $fila['nombre']; ?>
	</a>
<?php } ?>

