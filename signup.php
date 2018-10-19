<?php
include_once 'header.php';
?>
<section class="main-container">
    <div class="main-wrapper">
        <h2>注册新用户</h2>
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET['error'] == "invalidemail") {
                echo '<p class="signuperror">Invalid e-mail!</p>';
            }
            else if ($_GET['error'] == "invalidusername") {
                echo '<p class="signuperror">Invalid username!</p>';
            }
            else if ($_GET['error'] == "passwordcheck") {
                echo '<p class="signuperror">Your passwords do not match!</p>';
            }
            else if ($_GET['error'] == "usertaken") {
                echo '<p class="signuperror">Username is already taken!</p>';
            }
        }
        else if ($_GET['signup'] == "success") {
            echo '<p class="signupsuccess">Signup successful!</p>';
        }

        ?>

        <form class="signup-form" action="includes/signup.inc.php" method="POST">
            <input type="text" name="username" placeholder="username">
            <input type="text" name="email" placeholder="email">
            <input type="password" name="pwd" placeholder="password">
            <input type="password" name="pwd-repeat" placeholder="Repeat password">
            <button type="submit" name="signup-submit" value="submit">提交注册</button>
        </form>
    </div>
</section>
<?php
include_once 'footer.php';
?>
