<?php
class ListaModel {
    function liste() {
        $this->lista = $GLOBALS['db']->GetActiveRecords('eb95016_contacts');
        return $this->lista;
    }
    function grabe(DireccionModel $direccion) {
        $archivo = fopen('lista.txt','a+');
        if(fwrite($archivo,$direccion->serialice()."\n")) {
            fclose($archivo);
            return true;
        }else {
            fclose($archivo);
            return false;
        }
    }
}