<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 9/21/17
 * Time: 1:17 PM
 */
require 'dbconfig.php';
echo "inside register.php";
$db=$con->aahra;
//print_r($connection);
$collection=$db->investor;
//echo "collection created";
//print_r($collection);

$regist=array("First_name"=>$_POST['firstname'],"Last_name"=>$_POST['lastname'],"Email_id"=>$_POST['email'],"Password"=>$_POST['password'],
    "Dob"=>$_POST['dob'],"gender"=>$_POST['gender'],"City"=>$_POST['city']);
//print_r($regist);
$data=$collection->insertOne($regist);
if($data==1)
{
    echo "</br>Registration successful ..please login";
    header("Location:http://localhost/project/views/login.php");
}
else{
    echo "</br> some error";
}