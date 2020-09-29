<?php

 //Classe Usuario

 class Usuario {
     public $idUsuario;
     public $nome;
     public $email;
     public $senha;
     public $foto;
     public $caminhoFoto;

    public function usuarioFactory($idUsuario, $nome, $email, $senha, $foto, $caminhoFoto) {
        $this->idUsuario = $idUsuario;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->foto = $foto;
        $this->caminhoFoto = $caminhoFoto;
    }
 }




?>