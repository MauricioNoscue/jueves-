<?php 
class Persona{
    private $nombrePersona;
    private $apellidoPersona;
    private $celularPersona;
    private $edadPersona;


    public function setNombrePersona($nombrePersona){
        $this->nombrePersona=$nombrePersona;
    }
    public function getNombrePersona(){
        return $this->nombrePersona;
    }
    public function setApellidoPersona($apellidoPersona){
        $this->apellidoPersona=$apellidoPersona;
    }
    public function getApellidoPersona(){
        return $this->apellidoPersona;
    }
    public function setCelularPersona($celularPersona){
        $this->celularPersona=$celularPersona;
    }
    public function getCelularPersona(){
        return $this->celularPersona;
    }
    public function setEdadPersona($edadPersona){
        $this->edadPersona=$edadPersona;
    }
    public function getEdadPersona(){
        return $this->edadPersona;
    }
}