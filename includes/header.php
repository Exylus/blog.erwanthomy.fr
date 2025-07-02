<style>
    <?php include_once 'includes/header.css' ?>
</style>
<div id="home">
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="register.php">Register</a></li>
            <?php
            // TODO - Change True to Logged in 
            echo (True) ? '<li><a href="login.php">Sign In</a></li>' : '<li><a href="#">Sign Out</a></li>';
            ?>
        </ul>
    </nav>
</div>