<?php
/**
 * Created by PhpStorm.
 * User: godjqb
 * Date: 16-9-5
 * Time: 下午11:09
 */
namespace Common;

class Factory{
    public static function createDatabase(){
        $db=Database::getInstance();
        return $db;
    }

    public static function createUser(){
        $users=User::getInstance();
        return $users;
    }
}