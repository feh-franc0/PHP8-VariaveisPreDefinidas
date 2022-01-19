<?php

/** $_ENV
 * A variável pré-definida $_ENV possui um array associativo
 * contendo variáveis passads para o script atual via método do
 * ambiente
 * 
 * Podem ser passadas pelo shell sob o qual o PHP está sendo 
 * executaddo ou pelo módulo do serviddor CGI.
 */


 var_dump($_ENV);




/** No php.ini , procure :
 * variables_order = "GPCS"
 *      e mude para:
 * variables_order = "EGPCS"
 *
 * e execute no shell o comando:
 *      php 8-$_ENV.php
 */ 