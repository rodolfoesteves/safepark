<?php

include 'Emails.class.php';

$e = new Email();
$e->envia_email("re.rodolfo@gmail.com", "Teste de Envio", "Aqui vai vir a mensagem!");
