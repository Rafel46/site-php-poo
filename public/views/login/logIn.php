<?
    require_once("../../models/usuario.php");
    require_once("../../services/usuarioService.php");

    if(isset($_POST['submit'])) {
        $usuario = new Usuario();
        $usuario->usuarioFactory(null, null, $_POST['email'], $_POST['senha'], null, null);
        $usuarioService = new UsuarioService();
        $result = $usuarioService->login($usuario->email, $usuario->senha);
        if ($result == false) {
           return header('Location: ./telaLogin.php?erro');
        } else {
            return header('Location: ../telaInicial/telaInicial.php');
        }
    }


?>