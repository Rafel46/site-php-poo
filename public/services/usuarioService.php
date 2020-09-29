<?
    require_once("../../models/usuario.php");
    require_once("../../../banco/conexaoBD.php");

     class UsuarioService {
     public $conexao;
     
      function __construct() {
        $banco = new Banco();
        $this->conexao = $banco->conexao;
      }
     function getById($id) {
        $sql = "SELECT * FROM usuario WHERE idUsuario = $id ;";
        $query = mysqli_query($this->conexao, $sql);
        if (!$query) {
            die("Ocorreu um erro: ".mysqli_error($this->conexao));
        }
        $registro = mysqli_fetch_assoc($query);
        return $registro;
    }

     function save($nome, $email, $senha) {
        $senha = sha1($senha);
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha');";
        $query = mysqli_query($this->conexao, $sql);
        if (!$query) {
            die("Ocorreu um erro: ".mysqli_error($this->conexao));
        }
    }

     function deleteById($id) {
        $sql = "DELETE FROM usuario WHERE idUsuario = $id ;";
        $query = mysqli_query($this->conexao, $sql);
        if (!$query) {
            die("Ocorreu um erro: ".mysqli_error($this->conexao));
        }
    }

     function update($updateString, $id) {
        $sql = "UPDATE usuario SET $updateString  WHERE idUsuario = $id ;";
        $query = mysqli_query($this->conexao, $sql);
        if (!$query) {
            die("Ocorreu um erro: ".mysqli_error($this->conexao));
        }
    }

     function login($email, $senha) {
        $senha = sha1($senha);
        $sql = "SELECT idUsuario FROM usuario where email = '$email' AND senha = '$senha' ;";
        $query = mysqli_query($this->conexao, $sql);
        $result = mysqli_num_rows($query);
         if ($result == 0) {
            return false;
        } else {
            $registro = mysqli_fetch_assoc($query);
            session_start();
            $_SESSION['idUsuario'] = $registro['idUsuario'];
            return true;
        }

    }

    }


?>
