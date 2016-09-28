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

    private $id,$username,$email,$telephone,$password,$lasttime,$regtime,$level,$moreinfo;

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

    public function regUser($username,$password,$email,$tel,$level=0){
        $regtime=time();
        $token=md5($username.$password.$regtime);
        $data=array(
            'username'=>$username,
            'password'=>$password,
            'email'=>$email,
            'telephone'=>$tel,
            'regtime'=>$regtime,
            'token'=>$token,
            'level'=>$level,
            'moreinfo'=>"'empty'"
        );
        return Factory::createDatabase()->insert("users",$data);
    }

    public function signIn($userInput,$password){
        $sign=Factory::createDatabase();
        if(preg_match('/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/',$userInput)){
            $rel=$sign->select("users","id","email='.$userInput.'")->getResult();
        } else {
            $rel=$sign->select("users","id","username='$userInput'")->getResult();
        }
        if($rel['num']==1){
//            echo $rel['result'][0]['id'];
            $this->id=$rel['result'][0]['id'];
            $rel=$sign->select("users","password","id='$this->id'")->getResult();
            if($password==$rel['result'][0]['password']){
                $sign->update('users',["lasttime"=>time()],["id"=>$this->id]);
                $_SESSION['id']=$this->id;
                return $this;
            } else {
                echo json_encode(['status'=>false,'msg'=>'wrong password']);
                return false;
            }
        } else {
            echo json_encode(['status'=>false,'msg'=>'username can\'t be empty']);
            return false;
        }
    }

    public function signOut(){
        $_SESSION['id']=null;
        session_destroy();
        echo json_encode(['status'=>true,'msg'=>'sign out success']);
        return true;
    }

    public function getUserInfo($id){
        $sign=Factory::createDatabase()->select('users','*','id="'.$id.'"')->getResult();
        if($sign['num']==1){
            $this->id=$id;
            $this->username=$sign['result'][0]['username'];
            $this->email=$sign['result'][0]['email'];
            $this->telephone=$sign['result'][0]['telephone'];
            $this->password=$sign['result'][0]['password'];
            $this->lasttime=$sign['result'][0]['lasttime'];
            $this->regtime=$sign['result'][0]['regtime'];
            $this->level=$sign['result'][0]['level'];
            $this->moreinfo=$sign['result'][0]['moreinfo'];
            return $this;
        } else {
            return false;
        }
    }

}