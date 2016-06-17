<?php   /*ENVIO DE EMAIL*/


class Email{
    
    private $de_nome, $nomeUsuario, $senha, $host, $porta;


    public function __construct() {
             /*CONFIGURACOES EMAIL*/
             $this->de_nome = 'projetoSafePark'; //NOME DO REMETENTE
             $this->nomeUsuario = 'safepark@bol.com.br'; //NOME DE USUARIO(email) PARA LOGAR NO SMTP
             $this->senha = 'HTO$safe'; //SENHA DO GMAIL
             $this->host = 'smtps.bol.com.br'; //endereco smtp
             $this->porta = 587; //porta smtp padrao 587
            /*FIM CONFIGURACOES EMAIL*/
      }

function envia_email($para,$assunto,$mensagem){
	if (smtpmailer($para, $this->nom, $de_nome, $assunto, $mensagem)) {
		return true;
	}
	if (!empty($error)){
 		echo $error;
 		return false;
	}

}

/*

require_once("dependencias/phpmailer/class.phpmailer.php");

define('GUSER', $nomeUsuario);
define('GPWD', $senha);

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 1;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
	$mail->Host = $host;	// SMTP utilizado
	$mail->Port = $porta;  		// A porta 587 deverá estar aberta NOservidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($de, $de_nome);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
	$mail->AddAddress($para);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Mensagem enviada!';
		return true;
	}
}
 */   
}
?>
 
