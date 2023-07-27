<?php
include_once "header.php";
?>

<title>Login</title>

<h1>Login</h1>
<form action="login_request.php" method="post">
    <label for="username" class="form-label">Username: </label>
    <input type="text" id="username" class="form-control">

    <label for="password" class="form-label">Password: </label>
    <input type="password" id="password" class="form-control">

    <a href="forgot_password.php">Forgot password?</a>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
include_once "footer.php";
