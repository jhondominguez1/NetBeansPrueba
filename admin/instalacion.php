<?php

// 1. conecto y creo con la base de datos 

$db = new SQlite3('../db/carro.db');



//2. hago una consulta que consite en crear la tabla categoria 

$consulta =
<<<SQL
        CREATE TABLE categoria(
            id integer primary key autoincrement not null,
            nombre Char(40) Not Null
        );
SQL;

// 3.  ejecuto la consulta resultante de crear la tabla categoria 

$db->exec($consulta);


// 4. hago un llenado de prueba de la tabla categoria 

$consulta =
<<<SQL
        INSERT INTO categoria(nombre) VALUES('Electronica');
        INSERT INTO categoria(nombre) VALUES('Moda');
        INSERT INTO categoria(nombre) VALUES('Comestibles');
        
SQL;


// 5. ejecuto la consulta que consiste en ese llenado de prueba de la tabla 
// categoria 
$db->exec($consulta);

// hago una consulta que consiste en crear la tabla marca 

$consulta =
<<<SQL
        CREATE TABLE marca(
            id integer primary key autoincrement not null,
            nombre Char(40) Not Null
);
SQL;

// ejecuto la consulta resultante de crear la tabla marca 

$db->exec($consulta);

// hago un llenado de prueba de la tabla marca 
$consulta = 
<<<SQL
        INSERT INTO marca(nombre) VALUES('Samsum');
        INSERT INTO marca(nombre) VALUES('Noel');
        INSERT INTO marca(nombre) VALUES('Arturo Calle');
        
SQL;
        
// ejecuto la consulta que consite en ese llenado de prueba de la tabla 
// marcas 

$db->exec($consulta);

// hago una consulta que consiste en crear la tabla productos 
$consulta =
<<<SQL
        CREATE TABLE productos(
            id integer primary key autoincrement not null,
            nombre Char(40) Not Null,
            descripcion Char(100),
            precio int,
            id_categoria int,
            id_marca int
               
        );
SQL;

 
 
// ejecuto la consulta resultante de crear la tabla productos 
$db->exec($consulta);


// hago un llenado de prueba de la tabla productos 

$consulta =
<<<SQL
INSERT INTO productos(nombre,descripcion,precio,id_categoria,id_marca) VALUES('Telefono inteligente','Dispositivo movil','650.000',1,1);
INSERT INTO productos(nombre,descripcion,precio,id_categoria,id_marca) VALUES('Galletas','Ricas y crocantes',12.000,3,2);       
INSERT INTO productos(nombre,descripcion,precio,id_categoria,id_marca) VALUES('Pantalon','Pliegues ajustado',36.000,2,3);        
SQL;

// ejecuto la consulta que consiste en ese llenado de prueba de la tabla 
// productos 

$db->exec($consulta);

//  TABLA TIPO ------------------------------------

// ESTABLEZCO LA CONEXION CON LA BASE DE DATOS 
$db = new SQlite3('../db/carro.db');

// HAGO UNA CONSULTA QUE CONSISTE EN CREAR LA TABLA TIPO

$consulta =
<<<SQL
        CREATE TABLE tipo(
            id integer primary key autoincrement not null,
            nombre Char(40) Not Null
        );
SQL;

// EJECUTO LA CONSULTA RESULTANTE DE CREAR LA TABLA TIPO 
$db->exec($consulta);

// HAGO UN LLENADO DE PRUEBA DE LA TABLA TIPO
$consulta = 
<<<SQL
        INSERT INTO tipo(nombre) VALUES('admin');
        INSERT INTO tipo(nombre) VALUES('cliente');
SQL;


// EJECUTO LA CONSULTA QUE CONSISTE EN ESE LLENADO DE PRUEBA DE LA TABLA TIPO
$db->exec($consulta);


//  TABLA USUARIOS ------------------------------------

// ESTABLEZCO LA CONEXION CON LA BASE DE DATOS 
$db = new SQlite3('../db/carro.db');

// HAGO UNA CONSULTA QUE CONSISTE EN CREAR LA TABLA USUARIOS

$consulta =
<<<SQL
        CREATE TABLE usuarios(
            id integer primary key autoincrement not null,
            nombre Char(40) Not Null,
            nom_usu Char(40) Not Null,
            password Char(40) Not Null,
            id_tipo int
        );
SQL;

// EJECUTO LA CONSULTA RESULTANTE DE CREAR LA TABLA USUARIOS
$db->exec($consulta);

// HAGO UN LLENADO DE PRUEBA DE LA TABLA USUARIOS

$consulta = 
<<<SQL
        INSERT INTO usuarios(nombre,nom_usu,password,id_tipo) VALUES('john dominguez','jhonjairo231',123,1);
        INSERT INTO usuarios(nombre,nom_usu,password,id_tipo) VALUES('Andrey','andrey1',123,2);
SQL;

// EJECUTO LA CONSULTA QUE CONSISTE EN ESE LLENADO DE PRUEBA DE LA TABLA USUARIOS
$db->exec($consulta);


// cierro la conexion con la base de datos 

$db->close();

?>


