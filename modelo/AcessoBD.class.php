<?php

class AcessoBD{

	var $enderecoBD;		// endereço do SGBD.
	var $nomeBD; 			// nome da base de dados.
	var $usuarioBD;			// nome do usuário que tem acesso ao SGBD.
	var $senhaBD;			// senha do usuário.
	var $id;			// identificador de acesso ao SGBD.
	var $con;			// identificador da conexão ao SGBD.

	var $arrayResposta;		// leitura do cadastro de usuários.


	function AcessoBD(){		// construtor da classe.
		$this->enderecoBD = "localhost";
		$this->nomeBD = "safepark";
		$this->usuarioBD = "root";
		$this->senhaBD = "master";
		// echo "<br>AcessoBD--> Executou o construtor...";
		// echo "<br>AcessoBD--> Valor de enderecoBD: ".$this->enderecoBD;
		// echo "<br>AcessoBD--> Valor de nomeDB: ".$this->nomeBD;
	}

	function conectaBD(){
		// echo "<br>AcessoBD--> Vai conectar-se ao Banco de Dados...";
		$this->id = mysql_connect($this->enderecoBD,$this->usuarioBD,$this->senhaBD);
		// echo "<br>AcessoBD--> Retorno do SGBD (valor da variável 'id'): ".$this->id;
		$this->con = mysql_select_db($this->nomeBD,$this->id);
		// echo "<br>AcessoBD--> Retorno do SGBD (valor da variável 'id'): ".$this->id;
		// echo "<br>AcessoBD--> Retorno do SGBD (valor da variável 'con'): ".$this->con;
                mysql_query("SET NAMES 'utf8'");
                mysql_query("SET character_set_connection=utf8");
                mysql_query("SET character_set_client=utf8");
                mysql_query("SET character_set_results=utf8");
	}

	function executaSQL($sentenca){
		// echo "<br>AcessoBD--> Sentença a ser executada: ".$sentenca;
		$res = @mysql_query($sentenca,$this->id);
		// echo "<br>AcessoBD--> Resposta do SGBD: ".$res;
	}



	function consultaBD($sentenca){
		// echo "Sentenca a ser enviada ao banco: ".$sentenca;
		$res = @mysql_query($sentenca,$this->id);
		return $res;
	}

	function consultaBD2(){
		echo "<br>AcessoBD--> Pesquisa os dados da tabela 'seguranca'";
		$sentenca = "SELECT * FROM seguranca";
		$res = @mysql_query($sentenca,$this->id);
		while ($row = mysql_fetch_array($res)){
			echo "<br>";
			echo "<br>AcessoBD--> segID: ".$row['segID'];
			echo "<br>AcessoBD--> login: ".$row['login'];
			echo "<br>AcessoBD--> senha: ".$row['senha'];
			echo "<br>";
		}
	}

	function consultaBD3($sentenca){
		// echo "Sentenca a ser enviada ao banco: ".$sentenca;
		$res = @mysql_query($sentenca,$this->id);
		$contador = 0;
		while ($row = mysql_fetch_array($res)){
			$arrayResposta[$contador] = $row;
			// echo "<br>";
			// echo "<br>AcessoBD--> usuarioID: ".$row['usuarioID'];
			// echo "<br>AcessoBD--> prontuario: ".$row['prontuario'];
			// echo "<br>AcessoBD--> nomeCompleto: ".$row['nomeCompleto'];
			// echo "<br>";
			// echo $contador;
			$contador = $contador + 1;
		}
		return $arrayResposta;
	}

	function consultaBD4($sentenca){
		$res = @mysql_query($sentenca,$this->id);
		$row = mysql_fetch_array($res);
		return $row;
	}

	function consultaUsuario($login){
		$sentenca = "SELECT usuarioID FROM seguranca WHERE usuarioID='$login'";
		$res = @mysql_query($sentenca,$this->id);
		$row = mysql_fetch_array($res);
		// echo "<br>AcessoBD--> senha: ".$row['senha'];
		return $row['usuarioID'];
	}
        
        function consultaSenha($login){
		$sentenca = "SELECT senha FROM seguranca WHERE usuarioID='$login'";
		$res = @mysql_query($sentenca,$this->id);
		$row = mysql_fetch_array($res);
		// echo "<br>AcessoBD--> senha: ".$row['senha'];
		return $row['senha'];
	}

	function consultaPapelUsuario($login){
		$sentenca = "SELECT papel FROM perfil WHERE usuarioID='$login'";
		$res = @mysql_query($sentenca,$this->id);
		//$row = mysql_fetch_array($res);
		// echo "<br>AcessoBD--> senha: ".$row['senha'];
		//return $row['papel'];
                return 'teste';
	}

	function consultaEstadoAtualUsuario($login){
		$sentenca = "SELECT estado FROM estadoatual WHERE usuarioID='$login'";
		$res = @mysql_query($sentenca,$this->id);
		$row = mysql_fetch_array($res);
		// echo "<br>AcessoBD--> senha: ".$row['senha'];
		return $row['estado'];
	}

	function consultaCadastroUsuario($login){
                
		$sentenca = "SELECT * FROM cadastro WHERE usuarioID='$login'";
		$res = @mysql_query($sentenca,$this->id);
		$row = mysql_fetch_array($res);
		return $row;
	}

	/*
		Obs.: O método consultaBD3 lê todos os dados de cadastro de usuários 
		e os armazena em um array de nome arrayResposta;
	*/
}
?>
