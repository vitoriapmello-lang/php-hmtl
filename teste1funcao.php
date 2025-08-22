<?php
    function saudacao($nome) {
        return "ola, $nome!";
    }
    echo saudacao("maria");

    //linha 7 chama funcao, emite o return
    $variavel = nomedafuncao("parimetro");
    echo"o resultado é: " . $variavel;
?>