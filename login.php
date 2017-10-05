<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 9/22/17
 * Time: 2:03 AM
 */
require 'dbconfig.php';

$db=$con->aahra;
$collection=$db->investor;
//$col=$db->check;
//$regist=array("name"=>"check");
//$col->insertOne($regist);
//echo "connection";
//print_r($collection);
//$record=$collection->find(['name'=>'amit']);
$record = $collection->findOne( [ 'Email_id' =>$_POST['email'],'Password'=>$_POST['password']] );
//$record = $col->find( [ 'name' =>'amit'] );
//echo $record['name'].":</br>1 record found";
//echo $record['name'];
//echo "hell";

//echo $record['name'], ': ', $record['email']."<br>";

if($record['Email_id']!=null&&$record['Password']!=null)
{


    echo "h3ll";
    //print_r($record['email']);
    session_start();
    $_SESSION['email']=$_POST['email'];
    $_SESSION['password']=$_POST['password'];
    header("Location: http://localhost/project/views/dashboard/index.html");
    exit();

}
else{
    echo "invalid credentials";
}

