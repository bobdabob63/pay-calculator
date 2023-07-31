<?php
include_once "header.php";
?>

<title>Login</title>

<h1>Login</h1>
<form action="" method="post" id="login-form">
    <label for="username" class="form-label">Username: </label>
    <input type="text" id="username" name="username" class="form-control">

    <label for="password" class="form-label">Password: </label>
    <input type="password" id="password" name="password" class="form-control">

    <a href="forgot_password.php">Forgot password?</a>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo <<<STR
    <script>document.getElementById("login-form").style.display = "none";</script>
    STR;
    $servername = "localhost";
    $dbname = "pay_calculator";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", "root", "password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $username = filter_input(INPUT_POST, "username");
    $password = filter_input(INPUT_POST, "password");

    $sql = $conn->query("SELECT * FROM `userdata` WHERE username = '$username';");

    $correct = array("username" => false, "password" => false);

    foreach ($sql as $row) {
        if ($row['status'] == 1) {
            $correct['username'] = true;
            if ($row['password'] == $password) {
                $correct['password'] = true;
            }
        }
    }
    if (!$correct['username']) {
        echo "This username doesn't exist";
    } elseif (!$correct['password']) {
        echo "Incorrect password!";
    } else {
        $_SESSION['user'] = $username;
        echo <<<STR
        <p>You are logged in!</p>
        <script>setTimeout(function(){window.location.assign(".")}, 2000);</script>
        STR;
    }
}
include_once "footer.php";
