<?php

include_once './controle/ControleUsuario.class.php';
include_once './modelo/Usuario.class.php';
include_once './DAO/DAOUsuario.class.php';

$controle_usuario = new ControleUsuario();
$u = new Usuario($_POST["prontuario"],
        $_POST["senha"],
        $_POST["nome"], 
        $_POST["celular"], 
        $_POST["fixo"],
        $_POST["email"],
        "2016-03-08", "");

echo $u->getCodigoAtivacao();

/*
$dao_usuario = new DAOUsuario();
$dao_usuario->Inserir($u); */