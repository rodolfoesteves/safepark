<?php

include_once './modelo/Usuario.class.php';
include_once 'Conexao.class.php';


class DAOUsuario {
    
    public static $instance;
   
      public function __construct() {
          //
      }
   
      public static function getInstance() {
          if (!isset(self::$instance))
              self::$instance = new DaoUsuario();
   
          return self::$instance;
      }
   
      public function getNextID() {
          try {
              $sql = "SELECT Auto_increment FROM information_schema.tables WHERE table_name='usuario'";
              $result = Conexao::getInstance()->query($sql);
              $final_result = $result->fetch(PDO::FETCH_ASSOC);
              return $final_result['Auto_increment'];
          } catch (Exception $e) {
              print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
          }
      }
    
    public function Inserir(Usuario $usuario) {
        echo $usuario->getProntuario()."<BR><BR>";
          try {
                  $sql = "INSERT INTO usuario (
                  prontuario,
                  hash_senha,
                  nome,
                  celular,
                  tel_fixo,
                  email,
                  data_cadastro)
                  VALUES (
                  :prontuario,
                  :hash_senha,
                  :nome,
                  :celular,
                  :tel_fixo,
                  :email,
                  :data_cadastro)";
   
              $p_sql = Conexao::getInstance()->prepare($sql);
              $p_sql->bindValue(":prontuario", $usuario->getProntuario());
              $p_sql->bindValue(":hash_senha", $usuario->getHashSenha());
              $p_sql->bindValue(":nome", $usuario->getNome());
              $p_sql->bindValue(":celular", $usuario->getCelular());
              $p_sql->bindValue(":tel_fixo", $usuario->getTelFixo());
              $p_sql->bindValue(":email", $usuario->getEmail());
              $p_sql->bindValue(":data_cadastro", $usuario->getData_cadastro());
              return $p_sql->execute();
          } catch (Exception $e) {
              print "Erro: Código: " . $e->getCode() . " Mensagem: " . $e->getMessage();
          }
      }
      
      public function Editar(PojoUsuario $usuario) {
          try {
              $sql = "UPDATE usuario set
      nome = :nome,
                  email = :email,
                  ativo = :ativo,
                  cod_perfil = :cod_perfil WHERE cod_usuario = :cod_usuario";
   
              $p_sql = Conexao::getInstance()->prepare($sql);
   
              $p_sql->bindValue(":nome", $usuario->getNome());
              $p_sql->bindValue(":email", $usuario->getEmail());
              $p_sql->bindValue(":ativo", $usuario->getAtivo());
              $p_sql->bindValue(":cod_perfil", $usuario->getPerfil()->getCod_perfil());
              $p_sql->bindValue(":cod_usuario", $usuario->getCod_usuario());
   
              return $p_sql->execute();
          } catch (Exception $e) {
              print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
          }
      }
      
          public function EditarComSenha(PojoUsuario $usuario) {
          try {
              $sql = "UPDATE usuario set
      nome = :nome,
                  email = :email,
                  ativo = :ativo,
                  senha = :senha,
                  cod_perfil = :cod_perfil WHERE cod_usuario = :cod_usuario";
   
              $p_sql = Conexao::getInstance()->prepare($sql);
   
              $p_sql->bindValue(":nome", $usuario->getNome());
              $p_sql->bindValue(":email", $usuario->getEmail());
              $p_sql->bindValue(":ativo", $usuario->getAtivo());
              $p_sql->bindValue(":senha", $usuario->getSenha());
              $p_sql->bindValue(":cod_perfil", $usuario->getPerfil()->getCod_perfil());
              $p_sql->bindValue(":cod_usuario", $usuario->getCod_usuario());
   
              return $p_sql->execute();
          } catch (Exception $e) {
              print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
          }
      }
      
      public function AlterarSenhaAlreadyCripted($cod_usuario, $senha_nova_md5) {
          try {
   
                  $sql = "UPDATE usuario set
                  senha = :senha_nova
                  WHERE
                  cod_usuario = :cod_usuario";
   
                  $p_sql = Conexao::getInstance()->prepare($sql);
   
                  $p_sql->bindValue(":senha_nova", $senha_nova_md5);
                  $p_sql->bindValue(":cod_usuario", $cod_usuario);
   
                  return $p_sql->execute();
          } catch (Exception $e) {
              print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
              GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->getCode() . " Mensagem: " . $e->getMessage());
          }
      }
   
      public function AlterarSenha($cod_usuario, $senha_antiga, $senha_nova) {
          try {
   
              $pojoUsuario = $this->BuscarPorCOD($cod_usuario);
              if ($pojoUsuario->getSenha() == md5(trim(strtolower($senha_antiga)))) {
   
                  $sql = "UPDATE usuario set
                  senha = :senha_nova
                  WHERE
                  cod_usuario = :cod_usuario
                  and senha = :senha_antiga";
   
                  $p_sql = Conexao::getInstance()->prepare($sql);
   
                  $p_sql->bindValue(":senha_nova", md5(trim(strtolower($senha_nova))));
                  $p_sql->bindValue(":senha_antiga", md5(trim(strtolower($senha_antiga))));
                  $p_sql->bindValue(":cod_usuario", $cod_usuario);
   
                  return $p_sql->execute();
              }
              else
                  return false;
          } catch (Exception $e) {
              print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
          }
      }
   
      public function Deletar($cod) {
          try {
              $sql = "DELETE FROM usuario WHERE cod_usuario = :cod";
              $p_sql = Conexao::getInstance()->prepare($sql);
              $p_sql->bindValue(":cod", $cod);
   
              return $p_sql->execute();
          } catch (Exception $e) {
              print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
          }
      }
   
      public function BuscarPorEmailSenha(Usuario $u) {
          try {
              $sql = "SELECT * FROM usuario WHERE email = :email and hash_senha = :hash_senha";
              $p_sql = Conexao::getInstance()->prepare($sql);
              $p_sql->bindValue(":email", $u->getEmail());
              $p_sql->bindValue(":hash_senha", $u->getHashSenha());
              $p_sql->execute();
              return $this->populaUsuario($p_sql->fetch(PDO::FETCH_ASSOC));
          } catch (Exception $e) {
              print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
          }
      }
   
      public function BuscarPorCOD($cod) {
          try {
              $sql = "SELECT * FROM usuario WHERE cod_usuario = :cod";
              $p_sql = Conexao::getInstance()->prepare($sql);
              $p_sql->bindValue(":cod", $cod);
              $p_sql->execute();
              return $this->populaUsuario($p_sql->fetch(PDO::FETCH_ASSOC));
          } catch (Exception $e) {
              print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
          }
      }
   
      public function BuscarPorEmail($email) {
          try {
              $sql = "SELECT * FROM usuario WHERE email = :email";
              $p_sql = Conexao::getInstance()->prepare($sql);
              $p_sql->bindValue(":email", $email);
              $p_sql->execute();
              return $this->populaUsuario($p_sql->fetch(PDO::FETCH_ASSOC));
          } catch (Exception $e) {
              print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
          }
      }
   
      public function BuscarTodos() {
          try {
              $sql = "SELECT * FROM usuario order by nome";
              $result = Conexao::getInstance()->query($sql);
              $lista = $result->fetchAll(PDO::FETCH_ASSOC);
              $f_lista = array();
   
              foreach ($lista as $l)
                  $f_lista[] = $this->populaUsuario($l);
   
              return $f_lista;
          } catch (Exception $e) {
              print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
          }
      }
   
      public function BuscarTodos_Ativo() {
          try {
              $sql = "SELECT * FROM usuario WHERE ativo = 's' order by nome";
              $result = Conexao::getInstance()->query($sql);
              $lista = $result->fetchAll(PDO::FETCH_ASSOC);
              $f_lista = array();
   
              foreach ($lista as $l)
                  $f_lista[] = $this->populaUsuario($l);
   
              return $f_lista;
          } catch (Exception $e) {
              print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
          }
      }
      
      private function populaUsuario($row) { 
          $u = new Usuario($row['prontuario'], "", $row['nome'], $row['celular'], $row['tel_fixo'], $row['email'], $row['data_cadastro'], $row['conta_ativa']);
          return $u;
      }
   
      /*
      private function populaUsuario($row) {          
          $pojo = new PojoUsuario;
          $pojo->setCod_usuario($row['cod_usuario']);
          $pojo->setNome($row['nome']);
          $pojo->setEmail($row['email']);
          $pojo->setSenha($row['senha']);
          $pojo->setAtivo($row['ativo']);
          $pojo->setPerfil(ControllerPerfil::getInstance()->BuscarPorCOD($row['cod_perfil']));
          return $pojo;
      }
   */
  }
  ?>