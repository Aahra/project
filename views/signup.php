<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 10/2/17
 * Time: 5:01 PM
 */
?>
<html >
<head>

    <title>Sign Up Form </title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


</head>
<body class="container">
<div style="width: 30%;"></div>
<div class="container carousel "  align="center" style="width:40%;border:outset" >
    <form class="form-actions" method="post" action="../register.php">
        <h2>Sign Up</h2>
        <div>
            <label>First Name</label>
            <input  name="firstname" type="text">
        </div><div>
            <label>Last Name</label>
            <input  name="lastname" type="text">
        </div>

        <div>
            <label>Email</label>
            <input  name="email" type="text">
        </div>
        <div>
            <label>Password</label>
            <input  name="password" type="password">

        </div>
        <div>
            <label>Confirm Password</label>
            <input  name="confirmpassword" type="password">

        </div><div>
            <div>
                <label>D.O.B</label>
                <input  name="dob" type="text">
            </div>
            <label>City</label>
            <input  name="city" type="text">

        </div>
        <div>
            <input type="radio" name="gender" value="male"> Male

            <input type="radio" name="gender" value="female"> Female
        </div>
        <div style="padding:20px 0px;">
            <input type="submit" value="Create My Account" id="submit">
        </div>
    </form>
</div>
<div style="width: 30%"></div>

</body>
</html>

