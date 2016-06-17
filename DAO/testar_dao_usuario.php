<?php

include '../modelo/Usuario.class.php';
include './DAOUsuario.class.php';

echo "###########";

$u = new Usuario("133772", "master", "Rodolfo Esteves", "(19)9.9198-8730", "(19)3909-9116", "re.rodolfo@gmail.com", "2016-03-25");
$dao_user = new DAOUsuario();
$dao_user->Inserir($u);
        
echo "#############";
