<?php

/** $_GET
 * A variável pré-definida $_GET possui um array associativo
 * contendo todas as entradas passadas para o script via
 * método GET do protocolo HTTP
 */

 if(isset($_GET["nome"])) {
     echo $_GET["nome"]."<br/>";
 }

 echo isset($_GET["empresa"])?$_GET["empresa"]:"";

 $get = fn($key) => isset($_GET[$key])?$_GET[$key]:"";

 $id = (int)$get("id") + 1;

 echo '<a href="?id='.$id.'">Próximo</a>';