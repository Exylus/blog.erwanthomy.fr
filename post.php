<?php
$page_title = "Accueil";
include "includes/header.php";
?>

<div class="sidenav">
    <a>My profile</a>
    <a>Saved</a>
    <a>Settings</a>
    <a>Help</a>
</div>

<div class="container py-5">
    <h1 class="text-black">Welcome</h1>
    <p class="mt-5">
        <button onclick="location.href='create_post.php'" class="btn btn-dark">+</button>
        <h2>Post something</h2>
    </p>
    
</div>
<div>
    <output id="postArea"></output>
</div>

<?php include "includes/footer.php"; ?>