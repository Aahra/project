<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 9/22/17
 * Time: 2:03 AM
 */
require 'dbconfig.php';

$db=$con->userdetails;
$collection=$db->register;
$col=$db->check;
$regist=array("name"=>"check");
//$col->insertOne($regist);
//echo "connection";
//print_r($collection);
//$record=$collection->find(['name'=>'amit']);
$record = $collection->findOne( [ 'email' =>$_POST['email'],'password'=>$_POST['password']] );
//$record = $col->find( [ 'name' =>'amit'] );
//echo $record['name'].":</br>1 record found";
//echo $record['name'];
//echo "hell";

//echo $record['name'], ': ', $record['email']."<br>";

if($record['email']!=null&&$record['password']!=null)
{


    echo "h3ll";
    //print_r($record['email']);
    header("Location: http://localhost/project/front/home.html");
    exit();

}
else{
    echo "invalid credentials";
}

