<pre>
<?php

/** $_SERVER
 * A variável pré-definida $_SERVER possui um array
 * associativo contendo informações de cabeçalhos, caminhos e
 * localizações de scripts.
 * 
 * Todas as entradas são definidas pelo servidor web e não há
 * garantias que todos façam as definições listas. É possível que
 * alguns servidores emitam ou forneçam valores que não estão
 * especificados na documentação.
 */

print_r($_SERVER);
var_dump($_SERVER["SERVER_SOFTWARE"]);
var_dump($_SERVER["DOCUMENT_ROOT"]);
var_dump($_SERVER["PHP_SELF"]);
?>
</pre>
