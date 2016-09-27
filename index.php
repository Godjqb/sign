<?php
/**
 * Created by PhpStorm.
 * User: godjqb
 * Date: 16-9-26
 * Time: 下午10:00
 */
use Common\Factory;
define('BASEDIR',__DIR__);
require_once BASEDIR.'/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

//Factory::createDatabase()->insert('members',['name'=>"'me'",'age'=>21]);
//Factory::createDatabase()->update('members',['brithday'=>"'2000-09-21'"],['name'=>"'rubi'"]);
//Factory::createDatabase()->delete('members',['name'=>"'me'"]);

//Factory::createUser()->regUser('like','love','456@123.com',1234567890);
$tof=Factory::createUser()->signIn('like','love');
if($tof){
    echo 1;
} else {
    echo 0;
}

$arr=Factory::createDatabase()->select('users')->getResult();
Factory::createDatabase()->exportArr($arr['result']);
echo $arr['num'];


//var_dump($arr);
//print_r($arr);