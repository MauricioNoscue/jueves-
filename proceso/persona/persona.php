<?php 
class Persona{
    private $nombrePersona;
    private $apellidoPersona;
    private $telefonoPersona;
    private $edadPersona;

    public function setNombrePersona($nombrePersona){
        $this->nombrePersona=$nombrePersona;
    }
    public function getNombrePersona(){
        return $this->nombrePersona;
    }
    public function setApellido($apellidoPersona){
        $this->apellidoPersona=$apellidoPersona;
    }
    public function getApellido(){
        return $this->apellidoPersona;
    }
    public function setTelefonoPersona($telefonoPersona){
        $this->telefonoPersona=$telefonoPersona;
    }
    public function getTelefonoPersona(){
        return $this->telefonoPersona;
    }
    public function setEdadPersona($edadPersona){
        $this->edadPersona=$edadPersona;
    }
    public function getEdadPersona(){
        return $this->edadPersona;
    }
}

?>