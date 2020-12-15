<?php

/**
*
* Autoloader
* 
* @author Code Universe
*
**/

/**
*
* Pastas onde as classes serão adicionadas.
* OBS: Para suporte de uma nova pasta adicione no array.
*
**/
$paths = array(
  'controllers',
  'controllers/site/social',
  'controllers/site/home',
  'controllers/site/registro',
  'controllers/site/login',
  'controllers/site/contato',
  'controllers/site/esportes',
  'controllers/sistema/dashboard',
  'controllers/sistema/tarefas',
  'helpers',
  'models',
  'models/db',
  'models/user',
  'models/contato',
  'models/registro',
  'models/login',
  'models/tarefas', 
);

/**
*
* Registrando o autoloader
*
**/
spl_autoload_register(function($classname) use ($paths){

  $found = false;

  foreach($paths as $path){

    $file = $path . DIRECTORY_SEPARATOR . $classname . '.php';

    if(file_exists($file)){
      require $file;
      $found = true;
      break;
    }

  }

  if(!$found){
    exit('Class ' . $classname . ' not found.');
  }

});