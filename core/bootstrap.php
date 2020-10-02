<?php

//load confog and helper functions

require_once (ROOT.DS.'config'.DS.'config.php');
require_once (ROOT.DS.'app'.DS.'lib'.DS.'helpers'.DS.'functions.php');


//Autoload classes ..check in core., app/controller and app/models
function __autoload($className){

    //if file exists then require it ; else do something else..

    if(file_exists(ROOT . DS . 'core' . DS . $className . 'php')){//core
        require_once(ROOT . DS . 'core' . DS . $className . 'php');
    }elseif(file_exists(ROOT.DS.'app'. DS .'controllers' . DS . $className .'php')){//controllers
        require_once(ROOT . DS . 'app' . DS . 'controllers'.DS.$className.'php');
    }elseif(file_exists(ROOT . DS . 'app' . DS . 'models' . DS . $className . 'php')){
        require_once(ROOT . DS . 'app' . DS . 'models' . DS . $className . 'php');
    }


    //route request
    Router::route($url);
}ls