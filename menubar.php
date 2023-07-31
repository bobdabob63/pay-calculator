<header data-bs-theme="light">
    <nav class="navbar navbar-expand-md navbar-light bg-orange d-flex flex-column container-fluid">
        <div class="container-fluid">
            <a class="navbar-brand" href=".">Pay Calculator</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="payslip.php">Pay Slip</a>
                    </li>
                    <div id="logged-in">
                        <li class="nav-item" id="logged-in">
                            <div class="dropdown">
                                <button type="button" class="nav-link btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                    <?php if (isset($_SESSION['user'])) {
                                        echo $_SESSION['user'];
                                    } ?>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./account.php">Account</a></li>
                                    <li><a class="dropdown-item" href="./log_out.php">Log Out</a></li>
                                </ul>
                            </div>
                        </li>
                    </div>
                    <div id="logged-out" class="d-flex flex-row">
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Log In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sign_up.php">Sign Up</a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <p>Database driven pay calculator</p>
        </div>
    </nav>
</header>

<?php
if (isset($_SESSION['user'])) {
    echo <<<STR
    <script>document.getElementById("logged-out").style.display = "none";</script>
    STR;
} else {
    echo <<<STR
    <script>document.getElementById("logged-in").style.display = "none";</script>
    STR;
}
