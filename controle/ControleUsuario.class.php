<?php

// include_once "./modelo/Usuario.class.php";
include_once './DAO/DAOUsuario.class.php';

class ControleUsuario {
  
    function __construct() {
    }

    /*    private $u;
            
    function __construct($prontuario, $senha, $confirmacao_senha, $nome, $celular, $tel_fixo, $email, $data_cadastro) {
        $u = new Usuario($prontuario, $senha, $nome, $celular, $tel_fixo, $email, $data_cadastro);
    }*/
    
    function salvar(Usuario $u){
        $dao_usuario = new DAOUsuario();
        $dao_usuario->Inserir($u);
    }
    
}
