<?php
    session_start();
    include "cabezal.php";
    // aqui por lo pronto voy a mostrar todos los datos de la tabla productos y los voy a mostrar en una tabla 

    //1. hago la conexion 
    $db = new SQLite3('db/carro.db');

    if (isset($_GET['idcat']) ){
            $idc = $_GET['idcat'];
            $consulta = "SELECT * FROM productos where id_categoria = $idc";
    }else{	    
            $consulta = "SELECT * FROM productos";
    }

    $resultado_seleccion_productos = $db->query($consulta);	

?>
<div id="menu_categorias">
        <?php require_once 'menu_categorias.php' ?>
</div>

<div id="contenido">
    <h1>PRODUCTOS</h1>		
    <table border= "1" witdh ="100%">
        <tr>			                   
            <td>ID</td>
            <td>NOMBRE</td>
            <td>DESCRIPCION</td>
            <td>PRECIO</td>
            <td>ID_CATEGORIA</td>
            <td>ID_MARCA</td>
            <td>FOTO</td>
       </tr>		   
       <?php while($resultado_seleccion = $resultado_seleccion_productos->fetchArray()) {  ?> 		   
                       <tr>               
                               <td><?php echo $resultado_seleccion['id']; ?></td>
                               <td><?php echo $resultado_seleccion['nombre'];?></td>
                               <td><?php echo $resultado_seleccion['descripcion'];?></td>
                               <td><?php echo $resultado_seleccion['precio']; ?></td>
                               <td><?php echo $resultado_seleccion['id_categoria'];?></td>
                               <td><?php echo $resultado_seleccion['id_marca'];?></td>
                               <td>imagen</td>
                       </tr>
       <?php } 
       $db->close();           
       ?>  
    </table>
</div>    
    </body>
</html>
