<?php
session_start();
$_SESSION['user_logado'] = NULL;
$_SESSION['mensagem'] = NULL;
header("location:index.php");
