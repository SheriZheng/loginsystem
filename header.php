<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <li><a href="index.php">系统后台</a></li>
            </ul>
            <div class="nav-login">
                <?php
                    if (isset($_SESSION['userID'])){
                        echo '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">退出</button>
                </form>';
                    }
                    else {
                        echo '<form action="includes/login.inc.php" method="post">
                    <input type="text" name="emailuid" placeholder="Username/Email">
                    <input type="password" name="pwd" placeholder="password">
                    <button type="submit" name="login-submit">登录</button>
                </form>
                <a href="signup.php">注册</a>';
                    }
                ?>
            </div>
        </div>
    </nav>
</header>