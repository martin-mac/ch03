<?php
require_once('FirePHP.class.php');
/*
$firephp = FirePHP::getInstance(true);
$firephp->log(); 
*/
abstract class Singleton {
 
    protected static $_instance = NULL;
 
    /**
      * Prevent direct object creation
      */
     final private function  __construct() { }
 
    /**
      * Prevent object cloning
      */
     final private function  __clone() { }
 
    /**
      * Returns new or existing Singleton instance
      * @return Singleton
      */
     final public static function getInstance(){
         if(null !== static::$_instance){
             return static::$_instance;
         }
         static::$_instance = new static();
         return static::$_instance;
     }
     
}
 ?> 