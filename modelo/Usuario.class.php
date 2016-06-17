<?php

class Usuario {
    
    private $id,
            $login,
            $prontuario,
            $senha,
            $nome,
            $celular,
            $tel_fixo,
            $email,
            $data_cadastro,
            $data_desativacao,
            $conta_ativa;
        
    function __construct($prontuario, $senha, $nome, $celular, $tel_fixo, $email, $data_cadastro, $conta_ativa) {
        $this->prontuario = $prontuario;
        $this->senha = $senha;
        $this->nome = $nome;
        $this->celular = $celular;
        $this->tel_fixo = $tel_fixo;
        $this->email = $email;
        $this->data_cadastro = $data_cadastro;
        $this->conta_ativa = $conta_ativa;
    }
            
    function getId() {
        return $this->id;
    }
    
    function getLogin() {
        return $this->login;
    }

    function getProntuario() {
        return $this->prontuario;
    }

    function getHashSenha() {
        return md5($this->senha);
    }

    function getNome() {
        return $this->nome;
    }

    function getCelular() {
        return $this->celular;
    }

    function getTelFixo() {
        return $this->tel_fixo;
    }

    function getEmail() {
        return $this->email;
    }

    function getData_cadastro() {
        return $this->data_cadastro;
    }

    function getData_desativacao() {
        return $this->data_desativacao;
    }
    
    function getContaAtiva(){
        return $this->conta_ativa;
    }
    
    function getCodigoAtivacao(){
        return md5($this->prontuario
                .$this->senha
                .$this->nome
                .$this->celular
                .$this->tel_fixo
                .$this->email
                .$this->data_cadastro
                .$this->conta_ativa);
    }
            
    function setId($id) {
        $this->id = $id;
    }

    function setProntuario($prontuario) {
        $this->prontuario = $prontuario;
    }

    function setHash_senha($hash_senha) {
        $this->hash_senha = $hash_senha;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setTel_fixo($tel_fixo) {
        $this->tel_fixo = $tel_fixo;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setData_cadastro($data_cadastro) {
        $this->data_cadastro = $data_cadastro;
    }

    function setData_desativacao($data_desativacao) {
        $this->data_desativacao = $data_desativacao;
    }
    
}