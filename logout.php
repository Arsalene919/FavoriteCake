<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("Location:index1.php");
?>
<header class="group">
<nav class="group">
    <ul>
        <?php if ($logged_user) { ?>
            <li><a href="logout.php" title="">Logout</a></li>
        <?php } else { ?>
            <li><a href="signup.php" title="">signup</a></li>
            <li><a href="login.php" title="">Login</a></li>

        <?php } ?>
    </ul>
</nav>
</header>