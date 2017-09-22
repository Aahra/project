<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 9/21/17
 * Time: 9:11 AM
 */


require_once './vendor/autoload.php';
//echo 'welcome';
$con=new MongoDB\Client("mongodb://127.0.0.1:27017");
//echo 'database connection stablised';
//$db = $con->test7;
echo "data created";
//$regist=array("name"=>"amit","email"=>"12@gmail.com");
//$collection = $db->registration1;
//$collection->insertOne( $regist );
