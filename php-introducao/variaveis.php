<?php

    $nome = "Fulano de tal";

    $idade = 19;

    $ano_nascimento = date("Y") - $idade;

    /**Atividade
     * Exibir na página o nome do usuário e o seu ano de nascimento
     * 
     * Exemplo: olá, fulano de tal, você nasceu em 1998.
     */

     echo "Olá $nome, você nasceu em $ano_nascimento<br/>";

    echo "Hoje é " . date("d/m/Y");