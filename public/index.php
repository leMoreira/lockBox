
<?php

require '../models/Usuario.php';

spl_autoload_register(function($class){
    require "../{$class}.php";
});



session_start();

//require '../Flash.php';
require '../functions.php';

//require '../Validacao.php';
//require '../Database.php';
require '../routes.php';

?>

