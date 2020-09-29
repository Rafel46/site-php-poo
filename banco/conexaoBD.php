<?php
    class Banco {
    public $conexao;

    function __construct() {
    $this->conexao = mysqli_connect("localhost", "root","","aulaBD");
    if(!$this->conexao) {
        die("Ocorreu um erro ao conectar com o Banco de dados");
        $this->conexao = mysqli_select_db("aulaBD");

    }
 }
}
?>