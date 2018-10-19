<?php
include_once 'header.php';
?>
<section class="main-container">
    <div class="main-wrapper">
        <?php
        /*use if statement to decide what to show to users depends on their status*/
        if (isset($_SESSION['userID'])){
            echo '<p class="login-status">登录成功</p>';
        }
        else {
            echo '<p class="login-status">请先登录！</p>';
        }
        ?>


    </div>
</section>
<?php
include_once 'footer.php';
?>
