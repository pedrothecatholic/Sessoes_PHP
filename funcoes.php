<?php

function lerArquivo($nomeArquivo)
{
    $arquivo = file_get_contents($nomeArquivo);

    $arquivoArr = json_decode($arquivo);

    return $arquivoArr;
}

/* 
Parametros da função:
1 - usuario vindo do form
2 - senha vindo do form
3 - dados do arquivo json de usuário e senha
*/

function realizarLogin($usuario, $senha, $dados)
{
    foreach ($dados as $dado) {
        if ($dado->usuario == $usuario && $dado->senha == $senha) {

            //VARIÁVEIS DE SESSÃO:
            $_SESSION["usuario"] = $dado->usuario;
            $_SESSION["id"] = session_id();
            $_SESSION["data_hora"] = date('d/m/Y - h:i:s');

            header('location: area_restrita.php');
            exit;
        }
    }

    header('location: index.php');

}

/* 
FUNÇÃO DE VERIFICAÇÃO DE LOGIN 
VERIFICA SE O USUÁRIO PASSOU PELO PROCESSO DE LOGIN
*/
function verificarLogin(){

    if($_SESSION["id"] != session_id() || (empty($_SESSION["id"]))){
        
        header('location: index.html');

    }

}