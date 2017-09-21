<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 9/21/17
 * Time: 9:11 AM
 */


require_once '../vendor/autoload.php';
//echo 'welcome';
$connection=new MongoDB\Client('mongodb://127.0.0.1:27017');
//echo 'database connection stablised';
$db=$connection->test2;
echo "data created";