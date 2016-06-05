<?php
        include("include/flag.php");
        include("include/include/include/info.php");
        include(".conf/config.php");
        include("viiiiiiiva-la-vida.php");
        include("sexy-on-the-bitch.php");
        include("../hackerproof.php");
        include("../flag.gif");
        include("hu3hu3.PhP");
        include("follow-me.jpg");
        include("../not-found");
        include("/");
        include("hackeando-vidas.hatml");
        

        session_start();
        $userinfo = array(
            'its_false'=>'USTED_PUEDE_HACER_MEJOR? ;)', // Uhh, haaackers!!
        );

        if(isset($_GET['logout'])) {
            $_SESSION['username'] = '';
            header('Location:  ' . $_SERVER['PHP_SELF']);
        }
        if(isset($_GET['id'])) {
            $_SESSION['username'] = '';
                print_r(array_rand($hacker,1));
        }
        if(isset($_POST['username'])) {
            if($userinfo[$_POST['username']] == md5($_POST['password'])) {
                $_SESSION['username'] = $_POST['username'];
            }else {
                print_r(array_rand($error,1));
            }
        }
?>
<?php if($_SESSION['username']): ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>REPOWN3D!</title>
        </head>
        
        <body>
            <p>Welcome to system!</p>
           <p>The flag is: ...<!--<?php echo $flag;?>--></p><br/>
	    <a href="index.php?logout">LOG OUT</a>
        </body>
    </html>

<?php else: ?>
    <html>
        <head>
            <title>Log In</title>
        </head>
        <body>
            <h1>Login needed or not ;)</h1>
            <form name="login" action="index.php?id=login" method="post">
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                    <tr>
                        <td colspan="3"><strong>System Login</strong></td>
                    </tr>
                    <tr>
                        <td width="78">Username:</td>
                        <td width="294"><input name="username" type="text" id="username"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input name="password" type="password" id="password"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="Submit" value="Login"></td>
                    </tr>
                </table>
            </form>
        </body>
    </html>
<?php endif; ?>

