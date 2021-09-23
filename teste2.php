<?php

    //RECUPERANDO A SESSÃO CRIADA:
    session_start();

    echo session_id();

    //echo $nome;

    //EXIBINDO DADOS DE UMA VARIÁVEL DA SESSÃO:
    echo $_SESSION["nome"];
?>