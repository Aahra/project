<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 10/2/17
 * Time: 5:00 PM
 */
?>
<html >
<head>

  <title>Login Form</title>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>

<body class="container">
  	<div class="container">
    <div class="container carousel "  align="center" style="width:40%;border:outset" >
        <form action="/project/login.php" method="post">

        <h2 align="center">Login</h2>
	    <div>
            <label>Email</label>
            <input type="text" name="email">
        </div>
	    <div>
            <label>Password</label>
            <input type="text" name="password">
        </div>
        <div style="padding:20px 0px;">
	    <input type="submit" value="submit">
        </div>
        </form>
</div>
	</div>
</body>
</html>
