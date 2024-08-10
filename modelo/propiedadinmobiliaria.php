<?php

class propiedadinmobiliaria{

    public function __construct($id,$d,$m,$c,$v){
        $this->Id=$id;
        $this->Direccion=$d;
        $this->Metroscuadrados=$m;
        $this->Ciudad=$c;
        $this->Valor=$v;

    }

    public $Id;
    public $Direccion;
    public $Metroscuadrados;
    public $Cuidad;
    public $Valor;

    public function MostrarDatos(){

       echo 'Direccion: ' . $this->Direccion;

    }
}