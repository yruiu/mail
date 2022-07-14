<?php
session_start();
$title="Про нас";
require "blocks/header.php";
?>

<div class="container mt-2">
    <h1>About me</h1>
    <form action="check_post.php" method="post">
        <input type="text" name="username" class="form-control"placeholder="name" >
        <input type="email" name="email" class="form-control" placeholder="email">
        <input type="password" name="password" class="form-control" placeholder="password">
        <textarea name="message" class="form-control" placeholder="messages"></textarea>
        <input type="submit" value="Submit" class="btn btn-success">

    </form>
</div>
<?php
require "blocks/footer.php";
?>
