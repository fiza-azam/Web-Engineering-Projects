<?php
// Start the session
session_start();
if (isset($_SESSION["email"])) {
    header("Location: sessions&cookies2.php");
    // exit;
}
?>
<!DOCTYPE html>
<html>

<body>
    <form name="login" id="login" action="sessions&cookies2.php" method="POST">
        Enter email <input type="email" name="email" id="email" <?php if (isset($_COOKIE["email"])) { ?> value=<?php echo $_COOKIE["email"];
                                                                                                            } ?>></br></br>
        Enter password <input type="password" name="password" id="password" <?php if (isset($_COOKIE["password"])) { ?> value=<?php echo $_COOKIE["email"];
                                                                                                                            } ?>></br></br>
        Remember me <input type="checkbox" name="cookie" id="cookie"></br></br>
        <button type="submit">Login</button>
    </form>

</body>

</html>