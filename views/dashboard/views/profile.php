<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 10/5/17
 * Time: 1:01 AM
 */
require_once '../../../dbconfig.php';
$database=$con->aahra;
$collection=$database->investor;
$result=$collection->findOne($_SESSION['email'],$_SESSION['password']);



?>
<html>
<head>
    <title>
        Profile
    </title>
</head>
<ul>
    <li><label>Name:</label><input type="text" name="name" value="<?php echo $result['name'] ?>"></li>
    <li><label>Email:</label><input type="text" name="email"></li>
    <li><label>Contact:</label><input type="text" name="contact"></li>
    <li><label>Address:</label><input type="text" name="address"></li>

</ul>
</html>
