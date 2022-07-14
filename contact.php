<?php
session_start();

$title="Contact";
require "blocks/header.php";
?>
<h1 class="mt-5">Contact</h1>
<?php
if($_SESSION['success_mail']!=""){
    echo "<div class='alert alert-success'>$_SESSION[success_mail]</div>";
}
?>

<form action="check_contact.php" method="post">
    <input type="text" name="username" placeholder="name?" class="form-control">
    <br>
    <input type="email" name="email" placeholder="email?"  class="form-control">
    <br>
    <input type="text" name="subject" placeholder="Topic?" placeholder="email?" class="form-control">
    <br>
    <textarea name="message" placeholder="message" class="form-control"><</textarea>
    <br>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
<?php
$_SESSION['success_mail']="";
require "blocks/footer.php";
?>
