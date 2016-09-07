<?php
/**
 * Created by PhpStorm.
 * User: godjqb
 * Date: 16-7-23
 * Time: 上午9:55
 */
namespace Common;

class User{
    protected static $users;

    private $id,$user,$email,$tel,$psw,$lasttime,$regtime,$level,$moreinfo;

    private function __construct(){}
    private function __clone(){}
    public static function getInstance(){
        if(self::$users){
            return self::$users;
        } else {
            self::$users=new self();
            return self::$users;
        }
    }

    public function nameExists($user){
        $check=Factory::createDatabase()->select("users","id","username='.$user.")->getResult();
        if($check['num']==1){
            return true;
        } else return false;
    }

    public function emailExists($email){
        $check=Factory::createDatabase()->select("users","id","username='.$email.")->getResult();
        if($check['num']==1){
            return true;
        } else return false;
    }

    public function regUser($username,$password,$email,$level=0){
        $regtime=time();
        $token=md5($username.$password.$regtime);
        $data=array(
            'username'=>$username,
            'password'=>$password,
            'email'=>$email,
            'regtime'=>$regtime,
            'token'=>$token,
            'level'=>$level,
            'moreinfo'=>"empty"
        );
        return Factory::createDatabase()->insert("user",$data);
    }

    public function signIn($userInput,$password){
        $sign=Factory::createDatabase();
        if(preg_match('/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/',$userInput)){
            $rel=$sign->select("users","id","email='.$userInput.'")->getResult();
        } else {
            $rel=$sign->select("users","id","username='.$userInput.'")->getResult();
        }
        if($rel['num']==1){
            $this->id=$rel['result']['id'];
            $rel=$sign->select("user","password","id='.$this->id.'")->getResult();
        }
    }

}