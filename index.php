<?php

//we define the dir separator and the app path
define('DS',DIRECTORY_SEPARATOR);
define('ROOT',dirname(__FILE__));

//include config file
require_once(ROOT.DS.'config'.DS.'config.php');

//to routing url, we need to use original 'QUERY_STRING' from server param
$_route = isset($_GET['_route']) ? preg_replace('/^_route=(.*)/','$1',$_SERVER['QUERY_STRING']) : '';

//autoload class using composer autoloader
require_once(ROOT.DS.'vendor'.DS.'autoload.php');

//php config
Helpers::removeMagicQuotes();
Helpers::unregisterGlobals();

//dispatching
$router = new Router($_route);
$router->dispatch();
