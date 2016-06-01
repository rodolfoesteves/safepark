<?php

class Modelo {
    
    private $id,
            $descricao,
            $ano,
            $id_marca;
    
    function __construct($id, $descricao, $ano, $id_marca) {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->ano = $ano;
        $this->id_marca = $id_marca;
    }

    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getAno() {
        return $this->ano;
    }

    function getId_marca() {
        return $this->id_marca;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setId_marca($id_marca) {
        $this->id_marca = $id_marca;
    }
    
}
