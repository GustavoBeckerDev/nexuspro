<?php

// Define o caminho base da aplicação (subpasta onde está instalado)
// Se estiver na raiz do servidor, use: define('BASE_PATH', '');
define('BASE_PATH', '/NexusPro');

define('VIEW_FOLDER','app/Views'.DIRECTORY_SEPARATOR);
define('MODEL_FOLDER','app/Models'.DIRECTORY_SEPARATOR);
define('CONTROLLER_FOLDER','app/Controllers'.DIRECTORY_SEPARATOR);

// defines para o banco de dados
define('HOST','localhost');
define('DB_NAME','nexuspro');
define('USERNAME','root');
define('PASSWORD','');
$_ENV['APP_ENV']='development';
