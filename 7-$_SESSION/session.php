<?php

/** $_SESSION
 * A variável pré-definida $_SESSION possui um array
 * associativo contendo variáveis de sessão disponíveis no script
 * atual..
 */

 session_start();
 $_SESSION["empresa"] = "Hcode Treinamentos";

 echo "Criando Variável Session <br/>";
 echo $_SESSION["empresa"];

 ?>
 <br/>
 <a href="session2.php">
     VEJA O RESULTADO
 </a>