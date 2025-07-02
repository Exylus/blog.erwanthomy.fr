<?php
$page_title = "Accueil";
include "includes/header.php";
?>

<div class="container py-5">
    <h1 class="text-black">Welcome</h1>
    <button onclick="location.href='create_post.php'" class="btn btn-success">+</button>
</div>
<div>
    <output id="postArea"></output>
</div>

<?php include "includes/footer.php"; ?>
