<?php


include '../modelo/Usuario.class.php';
include './DAOUsuario.class.php';

echo "###########";

$u = new Usuario("123309", "maca", "Marco Pollo Remigio", "(19)9.8232-2323", "(19)0903-8899", "marco.pollo@ifsp.edu.br", "2016-03-01");
$dao_user = new DAOUsuario();
$dao_user->Inserir($u);
