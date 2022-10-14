<?php 
//if (!defined('ROOT') ){
  //  define('ROOT','http://',$_SERVER['HTTP_HOST'].getFolderProyect());
//}
include_once ('functions.php');

if (!defined('ROOT') ){
//var_dump($_SERVER);
define('ROOT','http://'.$_SERVER['HTTP_HOST'].getFolderProyect());
}
?>