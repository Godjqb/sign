<?php
/**
 * Created by PhpStorm.
 * User: godjqb
 * Date: 16-9-26
 * Time: 下午5:30
 */
namespace Common;

class Loader{
     public static function autoload($class){
        require_once BASEDIR.'/'.str_ireplace('\\','/',$class).'.php';
        //echo BASEDIR.'/'.str_ireplace('\\','/',$class).'.php';
    }
}