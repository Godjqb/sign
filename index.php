<?php
/**
 * Created by PhpStorm.
 * User: godjqb
 * Date: 16-9-26
 * Time: 下午10:00
 */
define('BASEDIR',__DIR__);
require_once BASEDIR.'/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

\Common\User::test();
