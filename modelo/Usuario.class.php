<?php

class Usuario {
    
    private $id,
            $prontuario,
            $hash_senha,
            $nome,
            $celular,
            $tel_fixo,
            $email,
            $data_cadastro,
            $data_desativacao;
    
    function __construct($id, $prontuario, $hash_senha, $nome, $celular, $tel_fixo, $email, $data_cadastro, $data_desativacao) {
        $this->id = $id;
        $this->prontuario = $prontuario;
        $this->hash_senha = $hash_senha;
        $this->nome = $nome;
        $this->celular = $celular;
        $this->tel_fixo = $tel_fixo;
        $this->email = $email;
        $this->data_cadastro = $data_cadastro;
        $this->data_desativacao = $data_desativacao;
    }

    function getId() {
        return $this->id;
    }

    function getProntuario() {
        return $this->prontuario;
    }

    function getHash_senha() {
        return $this->hash_senha;
    }

    function getNome() {
        return $this->nome;
    }

    function getCelular() {
        return $this->celular;
    }

    function getTel_fixo() {
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