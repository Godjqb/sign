<?php
/**
 * Created by PhpStorm.
 * User: godjqb
 * Date: 16-7-20
 * Time: 下午11:50
 */
require_once 'Database.php';
$connect=new Database();
$con=$connect->connect();
if($con){
   echo 'succeed';
} else {
    $err=mysqli_connect_error();
    echo 'failed '.$err;
}
echo '<br />';

//$sql='SELECT * FROM members';
//$res=$connect->query($sql);
//if(!$res){
//    echo $connect->error();
//}
//for($i=0;$i<$res->num_rows;$i++){
//    $arr=$res->fetch_assoc();
//    $array=array();
//    foreach ($arr as $key=>$value){
//        echo '['.$key.']=>'.$value.' ';
//    }
//    echo '<br />';
//}

//$sql='SELECT * FROM members';
//$res=$connect->query($sql);
//if(!$res){
//    echo $connect->error();
//}
//$arr=array();
//$row=$res->fetch_assoc();
//$key=array_keys($row);
//print_r($key);
//for ($i=0;$i<$res->num_rows;$i++){
//    $arr[$i][0]=$row[$key[1]];
//    $arr[$i][1]=$row[$key[2]];
//}
//for ($j=0;$j<$i;$j++){
//    echo $arr[$j][0].' '.$arr[$j][1].'<br />';
//}

//$connect->exportArr($connect->select('members','name,age'));
//$arr=$connect->select('members');
//print_r($arr);
//echo count($arr);
//for($i=0;$i<count($arr);$i++){
//    foreach ($arr[$i] as $key=>$value){
//        echo '['.$key.']=>'.$value.' ';
//    }
//    echo '<br />';
//}

//echo '<br />';
//
//$data=array(
//    'name'=>"'test'",
//    'age'=>20,
//);
//
//if($connect->insert('members',$data)){
//    echo 'success';
//}

//echo '<br />';
//
//$new=array(
//    'name'=>"'chika'",
//    'age'=>17,
//);
//$where=array(
//    'id'=>11,
//);
//if($connect->update('members',$new,$where)){
//    echo 'success';
//}
//
//echo '<br />';
//
//$where=array(
//    'name'=>"'chika'",
//    'age'=>17,
//);
//
//if($connect->delete('members',$where)){
//    echo 'success';
//}

//$sql='select * from members';
//$res=$connect->query($sql);
////print_r($res);
//$fp=fopen('/home/godjqb/文档/us.csv','w+');
//if($fp){
//    echo 't';
//} else {
//    echo 'f';
//}
//while ($row=$res->fetch_assoc()){
//    fputcsv($fp,$row);
//}
//fclose($fp);

//$fp=fopen('/home/godjqb/文档/us.csv','r');
//$sql='INSERT INTO members1 VALUES ';
//while (!feof($fp)) {
//    $data=fgetcsv($fp);
//    if($data!=null && $data[3]!=0000-00-00){
//        $sql.='('.$data[0].',"'.$data[1].'",'.$data[2].',"'.$data[3].'"),';
//    }
//}
//$sql=trim($sql,',');
//$sql.=';';
//echo $sql;
//$connect->query($sql);

echo '<br />';
$connect->exportArr($connect->select('members'));






