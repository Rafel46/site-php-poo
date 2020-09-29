<?
    require_once("../../models/usuario.php");
    require_once("../../../banco/conexaoBD.php");
    require_once("../../services/usuarioService.php");

    if(isset($_POST['submit'])) {
        $usuario = new Usuario();
        $usuario->usuarioFactory(null, $_POST['username'], $_POST['email'], $_POST['senha'], null, null);
        if ($usuario->senha != $_POST['senhac']) {
            header("Location: ./registro.php?erro");
        } else {
            $usuarioService = new UsuarioService();
            $usuarioService->save($usuario->nome, $usuario->email, $usuario->senha);
            header("Location: ../login/telaLogin.php");
        }
        
    }

?>