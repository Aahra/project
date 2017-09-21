<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 9/21/17
 * Time: 1:17 PM
 */
require 'dbconfig.php';

$db=$connection->userdetails;
$collection->$db->register;
echo "collection created";

$regist=array("name"=>$_POST['name'],"email"=>$_POST['email'],"password"=>$_POST['password'],
    "dob"=>$_POST['dob'],"gender"=>$_POST['gender']);
print_r($regist);
$data=$collection->insertOne([$regist]);
if($data==1)
{
    echo "</br>data inserted successfully";
}
else{
    echo "</br> some error";
}