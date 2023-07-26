<?php
$login_text = "";
if (isset($_SESSION['user'])) {
    $login_text = <<<STR
    <li class="nav-item">
        <a class="nav-link" href="user.php">{$_SESSION['user']}</a>
    </li>
    STR;
} else {
    $login_text = <<<STR
    <li class="nav-item">
        <a class="nav-link" href="login.php">Log In</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="sign_up.php">Sign Up</a>
    </li>
    STR;
}
?>

<header data-bs-theme="dark">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="payslip.php">Pay Slip</a>
                    </li>
                    <?php echo $login_text?>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
</header>