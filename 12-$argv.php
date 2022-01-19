<?php

/** $argv
 * A variável pré-definida $argv possui um array com os
 * argumentos passados para o script quando executado por
 * meio da linha de comando
 */

 var_dump($argv);
 if($argc > 1 && $argv[1] == "--hcode"){
     echo "Excelente curso de PHP8, aluno satisfeito";
 }
 //apenas interpretada pelo terminal


 /* TERMINAL PRINT:

    ferna@LaptopFeh MINGW64 /c/xampp/htdocs/Exemplo
    $ php index.php
    array(1) {
      [0]=>
      string(9) "index.php"
    }

    ferna@LaptopFeh MINGW64 /c/xampp/htdocs/Exemplo
    $ php index.php --hcode
    array(2) {
      [0]=>
      string(9) "index.php"
      [1]=>
      string(7) "--hcode"
    }
    Excelente curso de PHP8, aluno satisfeito

  */