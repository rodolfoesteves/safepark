<?php

include_once './modelo/Usuario.class.php';
include_once './DAO/DAOUsuario.class.php';

$u = new Usuario($_POST["login"], $_POST["senha"], "nome", "celular", "fixo", $_POST["login"], "data", 0);
$dao_usuario = new DAOUsuario();
$user_logado = $dao_usuario->BuscarPorEmailSenha($u);

if($user_logado->getProntuario()){
    if($user_logado->getContaAtiva()=="1"){
        echo "Usuário ".$user_logado->getNome()." logou!";
    } else{
        echo  "Usuário ".$user_logado->getNome()." está desativado!";
    }
} else{
    echo "Usuário ou senha inválido!";
}