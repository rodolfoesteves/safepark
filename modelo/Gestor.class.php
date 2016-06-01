<?php

class Gestor {
    private $id,
            $id_usuario,
            $data_inicio,
            $data_fim;
    
    function __construct($id_usuario, $data_inicio, $data_fim) {
        $this->id_usuario = $id_usuario;
        $this->data_inicio = $data_inicio;
        $this->data_fim = $data_fim;
    }
    
    function getId() {
        return $this->id;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getData_inicio() {
        return $this->data_inicio;
    }

    function getData_fim() {
        return $this->data_fim;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setData_inicio($data_inicio) {
        $this->data_inicio = $data_inicio;
    }

    function setData_fim($data_fim) {
        $this->data_fim = $data_fim;
    }

}