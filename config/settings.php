<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Timezone
date_default_timezone_set('America/Sao_Paulo');

//Definindo diretorio principal
define('DIRETORIO_PRINCIPAL', '/curriculo');
define('DIRETORIO_TEMPLATES', 'src/Views');
define('URL_BASE', 'http://curriculo.marquindosom.com'.DIRETORIO_PRINCIPAL.'/');

define('SQL_DB_SERVER', 'localhost');
define('SQL_DB_USER', 'root');
define('SQL_DB_PASS', '');
define('SQL_DB_DATABASE', 'nome_banco_de_dados');