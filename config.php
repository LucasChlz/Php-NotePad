<?php

date_default_timezone_set('America/Sao_Paulo');

$autoload = function($class)
{
    include('Class/'.$class.'.php');
};

define("URL_PATH",'http://localhost/P-Dev/Php-NotePad');

spl_autoload_register($autoload);

define('DATABASE','notepad');
define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
