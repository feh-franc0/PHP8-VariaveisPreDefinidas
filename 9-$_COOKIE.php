<?php

/** $_COOKIE
 * A variável pré-definida $_COOKIE possui um array
 * associativo contendo as variáveis passadas para o script atual
 * via HTTP Cookies.
 */

/* Para descobrir o nome de qualquer argumento,de qualquer função,seja ela interna do php ou feita por você.descubra os parametros usando:
    $f = new ReflectionFunction("setcookie");
    var_dump($f->getParameters());
    exit;
*/
setcookie(
    name: "empresa",
    value: "Hcode",
    expires_or_options: time()+86400
);

var_dump($_COOKIE);