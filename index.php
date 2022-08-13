<?php

require_once 'modelo/producto.php';
require_once 'modelo/proveedores.php';

$p = new Proveedor();
$p->setId('1') ;
$p->setNombre('Jorge') ;
$p->setCuil('20785452') ;
$p->setDireccion('Abajo del Puente 033');
$p->setTelefono('453599');

$p1 = new Proveedor();
$p1->setId('2') ;
$p1->setNombre('Laura');
$p1->setCuil('124545662') ;
$p1->setDireccion('Avellaneda 1500');
$p1->setTelefono('15348997');

$p2 = new Proveedor();
$p2->setId('3');
$p2->setNombre('Raul') ;
$p2->setCuil('2099131852') ;
$p2->setDireccion('Muelle 55');
$p2->setTelefono('48213130');

$prod = new Producto();
$prod->setId('2323');
$prod->setNombre('Cubanitos');
$prod->setCodigo('0009999455');
$prod->setPrecio('$9.50');
$prod->setMarca('Bagley');
$prod->setListaProveedores($p);
$prod->setListaProveedores($p1);
$prod->setListaProveedores($p2);

$prod->MostrarDatos();