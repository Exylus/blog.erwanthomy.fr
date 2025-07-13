<?php
$page_title = "Accueil";
include "includes/header.php"; 
?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <?php include 'sidebar.php'; ?>
        </div>

        <!-- Contenu principal -->
        <div class="col-md-9">
            <h1>Bienvenue sur le blog</h1>
            <h1 class="text-black">Welcome</h1>
            <p class="mt-5">
                <button onclick="location.href='create_post.php'" class="btn btn-dark">+</button>
            <h2>Post something</h2>
            </p>
            <div>
                <output id="postArea"></output>
            </div>
        </div>
    </div>
</div>





<?php include "includes/footer.php"; ?>