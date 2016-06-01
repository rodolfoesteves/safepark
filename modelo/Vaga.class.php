<?php

class Vaga {
    
    private $id,
            $tipo,
            $descricao;
    
    function __construct($id, $tipo, $descricao) {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->descricao = $descricao;
    }

    function getId() {
        return $this->id;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

}
