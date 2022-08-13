<?php

require_once 'modelo/proveedores.php';

class Producto
{
    private $id;
    private $nombre;
    private $codigo;
    private $precio;
    private $marca;
    private $listaProveedores = array();


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }


    public function getPrecio()
    {
        return $this->precio;
    }


    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }


    public function getMarca()
    {
        return $this->marca;
    }


    public function setMarca($marca)
    {
        $this->marca = $marca;
    }


    public function getListaProveedores()
    {
        return $this->listaProveedores;
    }


    public function setListaProveedores($lp)
    {
        $this->listaProveedores[] = $lp;
    }

    public function MostrarDatos()
    {
        echo 'Datos del Producto : ' . '<br>';
        echo 'Id : ' . $this->getId() . '<br>';
        echo 'Nombre : ' . $this->getNombre() . '<br>';
        echo 'Codigo : ' . $this->getCodigo() . '<br>';
        echo 'Precio : ' . $this->getPrecio() . '<br>';
        echo 'Marca : ' . $this->getMarca() . '<br>';
        echo '<hr>';

        foreach($this->getListaProveedores() as $lp)
        {
            echo 'Datos del Proveedor : ' . '<br>';
            echo 'Id : ' . $lp->getId() . '<br>';
            echo 'Nombre : ' . $lp->getNombre() . '<br>';
            echo 'Cuil : ' . $lp->getCuil() . '<br>';
            echo 'Direccion : ' . $lp->getDireccion() . '<br>';
            echo 'Telefono : ' . $lp->getTelefono() . '<br>';
            echo '<hr>';

        }
    }
}
