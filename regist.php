<?php
/**
 * Created by PhpStorm.
 * User: godjqb
 * Date: 16-8-25
 * Time: 上午7:09
 */

?>

<!doctype html>
    <html>
<head>
    <meta charset="utf-8" />
    <title>Regist</title>
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
        <label for="repsw">Password again:</label>
        <input type="password" id="repsw" name="repsw" value="<?php echo $repsw;?>"/>
        <span class="err">*<?php echo $repswErr;?></span>
        <br />
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" value="<?php echo $email;?>"/>
        <span class="err">*<?php echo $emailErr;?></span>
        <br />
        <label for="tel">Telephone:</label>
        <input type="text" id="tel" name="tel" value="<?php echo $tel;?>"/>
        <span class="err">*<?php echo $telErr;?></span>
        <br />
        <input type="submit" name="regist" value="Regist">
    </form>
</div>
</body>
</html>
