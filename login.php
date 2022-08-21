<?php session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./EasyColors-v-1-5.css">
    <link rel="stylesheet" href="./style.css">

    <title>Login</title>
</head>
<body class="bg-blue-900">


    <div class="container mx-auto mt-7" style="width:450px;max-width:100vw">
        <div class="card" style="border-color: black;">
            <div class="card-header bg-blue-400 text-white text-center"><h3 style="margin:auto;">Login</h3></div>
            <div class="card-body bg-blue-100">
           <?php if (isset($_SESSION['nao_autenticado'])){
            echo '   <div class="alert alert-danger alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Erro!</strong>Usuário ou senha inválidos.
          </div>';
       
           }   unset($_SESSION['nao_autenticado']);?>
         

                <form action="validacao.php" method="POST">
                    <div class="mb-3 mt-3">
                      <label for="usuario" class="form-label">Usuário:</label>
                      <input type="text" class="form-control" name="usuario">
                      
                    </div>
                    <div class="mb-3">
                      <label for="senha" class="form-label">Senha:</label>
                      <input type="password" class="form-control" id="pwd" name="senha">
                    </div>
                    <div class="form-check mb-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Manter conectado
                      </label>
                    </div>
                    <button type="submit" class="btn-blue bnt-border-1 float-end">Login</button>
                </form>
            </div>
            <div class="card-footer bg-blue-400 text-white text-center">Criado por Marcelo C G Silvano</div>
        </div>
    </div>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>