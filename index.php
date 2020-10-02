<?php

session_start();

//creating constant variable DS  for directory separator '/' isnstead of typing it all
define('DS',DIRECTORY_SEPARATOR);

//echo DS; //same as doing:  echo DIRECTORY_SEPARATOR;
//echo "<br>";

//creating constant variable for root
define('ROOT',dirname(__FILE__));

//echo ROOT;
//echo "<br>";


//echo $_SERVER['PATH_INFO'];//prints whatever was appended to end of url
//echo "<br>";

//creates array from url
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

//var_dump($url);


require_once (ROOT.DS.'core'.DS.'bootstrap.php');