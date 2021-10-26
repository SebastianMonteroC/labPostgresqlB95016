<?php
class DireccionModel extends ADODB_Active_Record {
    public $_table = 'eb95016_contacts'; 
    function __construct($nombre,$apellidos,$telefonodecasa,$direcciondecasa,$telefonodetrabajo,$direcciondetrabajo,$correoelectronico) {
        parent::__construct();
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->telefonodecasa = $telefonodecasa;
        $this->direcciondecasa = $direcciondecasa;
        $this->telefonodetrabajo = $telefonodetrabajo;
        $this->direcciondetrabajo = $direcciondetrabajo;
        $this->correoelectronico = $correoelectronico;
        $this->id = 1;
    }
}