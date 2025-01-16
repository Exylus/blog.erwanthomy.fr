<div id="home">
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Dashboard</a></li>
            <?php
            // TODO - Change True to Logged in 
            echo (True) ? '<li><a href="#">Sign Out</a></li>' : '<li><a href="#">Sign In</a></li>';
            ?>
        </ul>
    </nav>
</div>