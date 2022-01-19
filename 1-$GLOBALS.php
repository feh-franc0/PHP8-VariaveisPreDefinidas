<?php

/** $GLOBALS
 * A variável pré-definida $GLOBALS possui um array
 * associativo contendo todas referências às variáveis que estão
 * atualmente definidas no escopo global do nosso script
 */

function qualquer()
{
    $nome = "Hcode";
    global $idade;
    $idade = 30;
    $GLOBALS["nome"] = "João";

    echo $nome."<br/>";

    //Não se usa o $GLOBALS para se referir a uma variavel local,apenas para variaveis GLOBAIS
    //echo $GLOBALS["nome"]."<br/>";
}

qualquer();
echo "<br/>Fora da função: $nome<br/><br/>";
var_dump($GLOBALS);