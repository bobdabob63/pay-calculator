<?php
include_once "header.php";

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
    echo "You are logged out.";
} else {
    echo "You have to be logged in to log out!";
}
?>

<script>
    setTimeout(function() {
        window.location.assign(".")
    }, 2000);
</script>

<?php
include_once "footer.php";
