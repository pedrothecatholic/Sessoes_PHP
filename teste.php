<?php

    session_start();

    echo session_id();

    $_SESSION["nome"] = "Pedro Henrique de Sousa";

    $nome = "Pedro Hnerique de Sousa";

    echo $nome;

?>