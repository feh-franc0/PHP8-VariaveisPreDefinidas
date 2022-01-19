<?php

/** $http_response_header
 * A variável pré-definida $http_response_header é populada
 * com os cabeçalhos de resposta HTTP quando usada em 
 * conjunto com um HTTP wrapper.
 */

 
file_get_contents("https://hcode.com.br");

var_dump($http_response_header);