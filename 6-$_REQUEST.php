<?php

/** $_REQUEST
 * A variável pré-definida $_REQUEST possui um array
 * associativo contendo todas referências às variáveis que estão
 * atualmente definidas nas variáveis $_GET, $_POST e $_COOKIE
 */

 var_dump($_SERVER["REQUEST_METHOD"]);
 var_dump($_REQUEST["nome"]);

 ?>

 <form method="post">

    <input type="text" name="nome">
    <input type="submit">

 </form>