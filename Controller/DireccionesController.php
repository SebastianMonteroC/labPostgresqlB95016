<?php

class DireccionesController extends Controller {
    function index() {

    }

    function liste() {
        $lista = new ListaModel();
        $this->view->assign('direcciones', $lista->liste());
    }

    function grabe() {
        $lista = new ListaModel();
        $direccion = new DireccionModel($_POST['nombre'],$_POST['apellidos'],$_POST['telefonodecasa'],$_POST['direcciondecasa'],$_POST['telefonodetrabajo'],$_POST['direcciondetrabajo'],$_POST['correoelectronico']);
        if($lista->grabe($direccion)) {
            $this->view->assign('mensaje','La direccion fue registrada con exito');
        }
        else {
            $this->view->assign('mensaje','La direccion no fue registrada');
        }
    }
}