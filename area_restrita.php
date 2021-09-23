<?php

session_start();
require_once('./funcoes.php');

//RECEBENDO DADOS JSON(forma 1)
//$dados = lerArquivo('dados/usuarios.json');

//TESTE
//var_dump($dados); exit;
//realizarLogin('cristiano', '123456', $dados);

//RECEBENDO DADOS JSON(forma 2)
//realizarLogin('cristiano', '123456', lerArquivo('dados/usuarios.json'));

//VERIFICANDO OS DADOS DE VARIÁVEIS DE SESSÃO
//echo 'nome_usuario: ' . $_SESSION["usuario"] . '<br />';
//echo 'id_sessão: ' . $_SESSION["id"] . '<br />';

verificarLogin();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Restrita</title>
</head>

<body>

    <h1>ÁREA RESTRITA</h1>

    <div class='toolbar'>

        <h2>

            <?php echo 'Olá ' . strtoupper($_SESSION['usuario']) . ' - Login efetuado em: ' . $_SESSION['data_hora']; ?>

        </h2>

        <h2>

            <a class="material-icons" href="processa_login.php?logout=true">logout</a>

        </h2>

    </div>

</body>

</html>