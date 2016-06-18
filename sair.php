<?php
session_start();
$_SESSION['nome'] = NULL;
$_SESSION['email'] = NULL;
$_SESSION['mensagem'] = NULL;
header("location:index.php");
