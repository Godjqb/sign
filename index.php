<?php
/**
 * Created by PhpStorm.
 * User: godjqb
 * Date: 16-7-23
 * Time: 上午8:59
 */

?>

<!doctype html>
    <html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style/index.css">
</head>
<body>
<div>
    <form method="post" action="">
        <label for="user">Username:</label>
        <input type="text" id="user" name="user" value="<?php echo $user;?>"/>
        <span class="err">*<?php echo $userErr;?></span>
        <br />
        <label for="psw">Password:</label>
        <input type="password" id="psw" name="psw" value="<?php echo $psw;?>"/>
        <span class="err">*<?php echo $pswErr;?></span>
        <br />
        <input type="submit" name="submit" value="Login">
        <input type="button" value="Regist" onclick="window.location.href='regist.php'">
<!--        <button><a href="regist.php">Regist</a></button>-->
    </form>
</div>
</body>
</html>
