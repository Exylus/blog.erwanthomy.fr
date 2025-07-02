<?php
$page_title = "Create a post";
include "includes/header.php";
?>

<div class="container py-5">
    <h1 class="text-black">Create a post</h1>
    <div class="form-floating">
        <textarea class="form-control" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Write something</label>
    </div>
    <button type="submit" class="btn btn-dark mt-4" onclick="publishPost()">PUBLISH</button>
</div>

<?php include "includes/footer.php"; ?>