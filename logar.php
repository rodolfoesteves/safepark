<?php

session_start();
include_once './modelo/Usuario.class.php';
include_once './DAO/DAOUsuario.class.php';

$u = new Usuario($_POST["login"], $_POST["senha"], "nome", "celular", "fixo", $_POST["login"], "data", 0);
$dao_usuario = new DAOUsuario();
$user_logado = $dao_usuario->BuscarPorEmailSenha($u);

if($user_logado->getProntuario()){
    if($user_logado->getContaAtiva()=="1"){
        $_SESSION['nome'] = $user_logado->getNome();
        $_SESSION['email'] = $user_logado->getEmail();
        header("location:index.php");
    } else{
        $_SESSION['user_logado'] = NULL;
        $_SESSION['mensagem'] = "Usuário desativado. Clique aqui para reenviar seu código de validação.";
        header("location:index.php");
    }
} else{
    $_SESSION['user_logado'] = NULL;
    $_SESSION['mensagem'] = "Usuário ou senha inválido!";
    header("location:index.php");
}