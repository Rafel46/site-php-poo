<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <? require_once("../../componentes/bootstrap.php"); ?>
    <title>Login</title>

</head>
<body>
    <? 
        $pagina = "telaLogin.php";
        require_once("../../componentes/navbar.php"); 
    ?>
    <br>
        <div class="row justify-content-md-center">
       <h2>Login</h2>
        
       </div>
       <br>
       <div class="row justify-content-md-center">
            <div class="col-6 col-md-4">
            <?
                if (isset($_GET['erro'])) {
            ?>
    <div class="row justify-content-md-center">
        <div class="alert alert-danger" role="alert">
            Usuario ou senha incorretos!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
            <?
                }
            ?>
                <form action="logIn.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img src="https://img.icons8.com/fluent-systems-filled/24/000000/mailbox-with-letter.png"/></div>
                            </div>
                            <input type="text" class="form-control" id="email" name="email" min="20" max="120" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img src="https://img.icons8.com/metro/24/000000/lock-2.png"/></div>
                            </div>
                            <input type="password" class="form-control" id="senha" name="senha" min="20" max="100" required>
                        </div>
                            <small class="form-text text-muted">Nunca compartilhe sua senha com terceiros <a data-target="#modal" data-toggle="modal"><img src="https://img.icons8.com/android/15/000000/question.png"/></a></small>
                            <div class="tooltip">
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <button type="submit" class="btn btn-outline-dark" name="submit">Logar</button>
                    </div>
                </form>
                </div>
            </div>
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">NÃO compartilhe sua senha!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Mostrar suas senhas para qualquer pessoa, mesmo as de confiança, pode ocasionar no vazamento de dados pessoais,
                    por esse motivo nunca compartilhe!
                </div>
                </div>
            </div>
            </div>
    </body>
</html>