<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 10/4/17
 * Time: 8:15 PM
 */
$host='localhost:3306';
$user='sumit';
$pass='sumit';
$db='financial_adviser';
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
{
    die('connection issue'.mysqli_connect_error());

}
else{
    echo "connection established";
}

/*$sql="create database aahra";
if(mysqli_query($conn,$sql))
{
    echo "database created ";
}
else
{
    echo "cannot create database";
}
*/
/*$sql="create table agent (email_id varchar(30),password varchar(30),first_name varchar(30),lastname varchar(30),dob varchar(10),_name varchar(30),cityname varchar(30), INTEGER ,isactive int(1),type varchar(20))";
if(mysqli_query($conn,$sql))
{
    echo "table created ";

}
else{
    echo "unable to create table";
}
*/
/*
$first_name="amit";
$cityname="lucknow";
$id="amit@gmail.com";
$sql="update agent set first_name=".$first_name.",cityname=".$cityname." where email_id=".$id;
*/

require_once 'dbconfig.php';
$database=$con->aahra;
//$agent=$database->agent;
//$subcategory=$database->subcategory;
//$sql="select *from agent";
//$sql="select *from sub_category";
//$result=mysqli_query($conn,$sql);
//print_r($result);
//foreach ($result as $item)
//{
  //  print_r($item);
    //$subcategory->insertOne($item);

    //echo "</br>";
//}
