<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // Set session variables
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["password"] = $_POST["password"];
    }
    if (isset($_SESSION["email"])) {
        echo "Welcome ";
        echo $_SESSION["email"];
    } else {
        header("Location: sessions&cookies.php");
    }
    ?>

    <?php
    if (isset($_POST["cookie"])) {
        setcookie("email", $_SESSION["email"], time() + (86400 * 7));
        setcookie("password", $_SESSION["password"], time() + (86400 * 7));
        echo "Cookies set!";
        // echo $_COOKIE[$cookie_name];
    } else {
        echo "Cookies not set!";
    }
    ?>
    <form name="logout" id="logout" action="logout.php" method="POST">
        <button type="submit">Logout</button>
    </form>



</body>

</html>