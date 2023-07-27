<?php
include_once "header.php";
?>

<title>Password Recovery</title>

<h1>Password Recovery</h1>

<form action="password_email.php">
    <label for="email" class="form-label">Email for your account: </label>
    <input type="email" id="email" class="form-control">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
include_once "footer.php";
